<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Pinjam::where('id_user', auth()->user()->nik)->whereIn('status_pinjam', ['DIKEMBALIKAN'])->get();
        // user information
        $count_pinjam_user = Pinjam::where('id_user', auth()->user()->nik)
            ->whereIn('status_pinjam', ['DIKEMBALIKAN'])
            ->count();
        return view('pages.history', [
            'datas' => $datas,
            'count_pinjam_user' => $count_pinjam_user
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
            $historyPinjam = Pinjam::find($id);

            $historyPinjam->delete();

            return redirect('dashboard/history')->with('success', 'BERHASIL! Literasi Berhasil Dihapus!');
        } catch (QueryException $e) {
            return redirect('dashboard/history')->with('error', 'GAGAL! Literasi Gagal Dihapus!');
        }
    }
}
