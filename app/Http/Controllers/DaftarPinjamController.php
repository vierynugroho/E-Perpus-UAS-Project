<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Pinjam;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class DaftarPinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Pinjam::whereIn('status_pinjam', ['PENDING', 'DIPINJAM'])->get();
        $count_dipinjam = Pinjam::whereIn('status_pinjam', ['DIPINJAM'])
            ->count();
        $count_peminjam = Pinjam::distinct('id_user')->count('id_user');
        return view('pages.admin.daftarpinjam', [
            'datas' => $datas,
            'count_peminjam' => $count_peminjam,
            'count_dipinjam' => $count_dipinjam,
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Pinjam::find($id);
        return view('pages.admin.daftarpinjam.edit', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $data = Pinjam::find($id);
            $data['status_pinjam'] = $request->status_pinjam;
            $data->save();

            $pinjam = Pinjam::find($id);
            if ($pinjam->status_pinjam == 'PENDING' || $pinjam->status_pinjam == 'DIKEMBALIKAN') {
                $quantity = $pinjam->book->quantity + 1;
                $book = Book::find($pinjam->book->id);
                $book['quantity'] = $quantity;

                $book->save();
            } else {
                $quantity = $pinjam->book->quantity - 1;
                $book = Book::find($pinjam->book->id);
                $book['quantity'] = $quantity;
                $book->save();
            }


            return redirect('dashboard/daftarpinjam')->with('success', 'BERHASIL! Status Buku Diubah!');
        } catch (QueryException $e) {
            return redirect('dashboard/daftarpinjam')->with('error', 'GAGAL! Status Buku Gagal Diubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $pinjam = Pinjam::find($id);
            $pinjam->delete();

            $quantity = $pinjam->book->quantity + 1;
            $book = Book::find($pinjam->book->id);
            $book['quantity'] = $quantity;
            $book->save();

            return redirect('dashboard/daftarpinjam')->with('success', 'BERHASIL! Buku Dihapus Dari Daftar Pinjam!');
        } catch (QueryException $e) {
            return redirect('dashboard/daftarpinjam')->with('error', 'GAGAL! Buku Gagal Dihapus Dari Daftar Pinjam!');
        }
    }
}
