<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use Illuminate\Http\Request;

class DaftarPinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Pinjam::all();
        $count_dipinjam = Pinjam::whereIn('status_pinjam', ['PENDING', 'DIPINJAM'])
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
