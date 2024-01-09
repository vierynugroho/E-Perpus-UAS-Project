<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use Illuminate\Http\Request;

class DaftarHistoryPinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Pinjam::where('status_pinjam', ['DIKEMBALIKAN'])->get();
        $count_dikembalikan = Pinjam::whereIn('status_pinjam', ['DIKEMBALIKAN'])
            ->count();
        $count_dipinjam = Pinjam::whereIn('status_pinjam', ['PENDING', 'DIPINJAM'])
            ->count();
        $count_peminjam = Pinjam::distinct('id_user')->count('id_user');
        return view('pages.admin.daftarHistoriPinjam', [
            'datas' => $datas,
            'count_peminjam' => $count_peminjam,
            'count_dipinjam' => $count_dipinjam,
            'count_dikembalikan' => $count_dikembalikan,
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
