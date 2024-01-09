<?php

namespace App\Http\Controllers;

use App\Models\Literation;
use App\Models\Pinjam;
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
            ->whereIn('status_pinjam', ['PENDING', 'DIPINJAM'])
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
