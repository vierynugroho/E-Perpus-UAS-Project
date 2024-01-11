<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Pinjam;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $datas = Pinjam::where('id_user', $user->nik)
            ->whereIn('status_pinjam', ['PENDING', 'DIPINJAM'])
            ->get();

        // user information
        $count_pinjam_user = Pinjam::where('id_user', auth()->user()->nik)
            ->whereIn('status_pinjam', ['DIPINJAM'])
            ->count();


        return view('pages.pinjam', [
            'datas' => $datas,
            'count_pinjam_user' => $count_pinjam_user,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
            $validatedData = $request->validate([
                'id_user' => 'required',
                'id_buku' => 'required',
            ]);


            Pinjam::create($validatedData);

            return redirect('dashboard/pinjam')->with('success', 'BERHASIL! Buku Ke Antrian Pinjam!');
        } catch (QueryException $e) {
            return redirect('dashboard/pinjam')->with('error', 'GAGAL! Buku Gagal Ke Antrian Pinjam!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Pinjam::findOrFail($id);

        return view('pages.pinjam.detail', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $pinjam = Pinjam::find($id);
            if ($pinjam->status_pinjam == 'DIPINJAM' || $pinjam->status_pinjam == 'DIKEMBALIKAN') {
                $pinjam->delete();

                $quantity = $pinjam->book->quantity + 1;
                $book = Book::find($pinjam->book->id);
                $book['quantity'] = $quantity;

                $book->save();
            }
            $pinjam->delete();

            return redirect('dashboard/pinjam')->with('success', 'BERHASIL! Buku Dihapus Dari Daftar Pinjam!');
        } catch (QueryException $e) {
            return redirect('dashboard/pinjam')->with('error', 'GAGAL! Buku Gagal Dihapus Dari Daftar Pinjam!');
        }
    }
}
