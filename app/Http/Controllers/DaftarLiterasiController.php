<?php

namespace App\Http\Controllers;

use App\Models\Literation;
use App\Models\Pinjam;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class DaftarLiterasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas =   Literation::all();
        $count_literasi = Literation::all()->count();
        $count_buku_dibaca = Literation::distinct('id_buku')
            ->count('id_buku');
        $count_anggota_literasi = Literation::distinct('id_user')
            ->count('id_user');
        $count_buku_dipinjam = Pinjam::distinct('id_buku')
            ->count('id_buku');

        return view('pages.admin.daftarLiterasi', [
            'datas' => $datas,
            'count_literasi' => $count_literasi,
            'count_buku_dibaca' => $count_buku_dibaca,
            'count_anggota_literasi' => $count_anggota_literasi,
            'count_buku_dipinjam' => $count_buku_dipinjam,
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
        $literasi = Literation::find($id);

        return view('pages.admin.literasi.detail', [
            'literasi' => $literasi
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
            $literation = Literation::find($id);

            $literation->delete();

            return redirect('dashboard/daftarliterasi')->with('success', 'BERHASIL! Literasi Berhasil Dihapus!');
        } catch (QueryException $e) {
            return redirect('dashboard/daftarliterasi')->with('error', 'GAGAL! Literasi Gagal Dihapus!');
        }
    }
}
