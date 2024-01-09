<?php

namespace App\Http\Controllers;

use App\Models\Literation;
use App\Models\Pinjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $count_literasi = Literation::all()->count();
        $count_buku_dibaca = Literation::distinct('id_buku')
            ->count('id_buku');
        $count_anggota_literasi = Literation::distinct('id_user')
            ->count('id_user');
        $count_buku_dipinjam = Pinjam::distinct('id_buku')
            ->count('id_buku');

        $leaderboards = Literation::select('id_user', DB::raw('count(*) as jumlah_literasi'))
            ->groupBy('id_user')
            ->orderBy('jumlah_literasi', 'DESC')
            ->get();

        return view('pages.leaderboard', [
            'count_literasi' => $count_literasi,
            'count_buku_dibaca' => $count_buku_dibaca,
            'count_anggota_literasi' => $count_anggota_literasi,
            'count_buku_dipinjam' => $count_buku_dipinjam,
            'leaderboards' => $leaderboards
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
        //
    }
}
