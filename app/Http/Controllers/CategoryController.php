<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Category::all();
        $count_kategori = Category::all()->count();
        return view('pages.admin.daftarKategori', [
            'datas' => $datas,
            'count_kategori' => $count_kategori,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.kategori.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required'
            ]);

            Category::create($validatedData);

            return redirect('dashboard/kategori')->with('success', 'BERHASIL! Kategori Berhasil Ditambahkan!');
        } catch (QueryException $e) {
            return redirect('dashboard/kategori')->with('error', 'GAGAL! Kategori Gagal Ditambahkan!');
        }
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
        $data = Category::find($id);

        return view('pages.admin.kategori.edit', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $category = Category::find($id);

            $validatedData = $request->validate([
                'name' => 'required'
            ]);

            $category->name = $validatedData['name'];

            $category->save();

            return redirect('dashboard/kategori')->with('success', 'BERHASIL! Kategori Berhasil Diubah!');
        } catch (QueryException $e) {
            return redirect('dashboard/kategori')->with('error', 'GAGAL! Kategori Gagal Diubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $category = Category::find($id);

            $category->delete();

            return redirect('dashboard/kategori')->with('success', 'BERHASIL! Kategori Berhasil Dihapus!');
        } catch (QueryException $e) {
            return redirect('dashboard/kategori')->with('error', 'GAGAL! Tersedia Buku Dalam Kategori!');
        }
    }
}
