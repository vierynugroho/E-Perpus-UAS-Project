<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Pinjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Book::all();
        $count_pinjam = Pinjam::whereIn('status_pinjam', ['PENDING', 'DIPINJAM'])
            ->count();
        $total_buku = Book::all()->sum('quantity');

        return view('pages.admin.daftarBuku', [
            'datas' => $datas,
            'count_pinjam' => $count_pinjam,
            'total_buku' => $total_buku
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('pages.admin.buku.tambah', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'id_kategori' => 'required',
            'tahun' => 'required|numeric',
            'quantity' => 'required|numeric',
            'cover' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'sinopsis' => 'required'
        ]);

        $validatedData['cover'] = $request->file('cover')->store('public/cover');

        // dd('yoho');

        Book::create($validatedData);
        return redirect('dashboard/daftarbuku')->with('success', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Book::findOrFail($id);
        return view('pages.admin.buku.detail', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $buku = Book::findOrFail($id);

        return view('pages.admin.buku.edit', [
            'buku' => $buku,
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
