<?php

namespace App\Http\Controllers;

use App\Models\Literation;
use Illuminate\Http\Request;

class LiterasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $literasis = Literation::where('id_user', '=', Auth()->user()->nik)->get();

        return view('pages.literasi', [
            'datas' => $literasis
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
