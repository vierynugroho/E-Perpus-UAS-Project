<?php

namespace App\Http\Controllers;

use App\Models\Literation;
use App\Models\Pinjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LiterasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $literasis = Literation::where('id_user', '=', Auth()->user()->nik)->get();
        $count_pinjam_user = Pinjam::where('id_user', auth()->user()->nik)
            ->whereIn('status_pinjam', ['PENDING', 'DIPINJAM'])
            ->count();
        $count_literasi_user = Literation::where('id_user', auth()->user()->nik)->count();
        $rank_user = Literation::select('id_user', DB::raw('count(*) as jumlah_literasi'))
            ->groupBy('id_user')
            ->orderByDesc('jumlah_literasi')
            ->pluck('id_user')
            ->search(auth()->user()->nik);
        $count_buku_dibaca = Literation::where('id_user', auth()->user()->nik)
            ->distinct('id_buku')
            ->count('id_buku');

        return view('pages.literasi', [
            'datas' => $literasis,
            'count_pinjam_user' => $count_pinjam_user,
            'count_literasi_user' => $count_literasi_user,
            'rank_user' => $rank_user + 1,
            'count_buku_dibaca' => $count_buku_dibaca
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.literasi.tambah');
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

        $literasi = Literation::findOrFail($id);
        return view('pages.literasi.detail', [
            'literasi' => $literasi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('pages.literasi.edit');
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
        //
    }
}
