<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Pinjam;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        try {
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

            Book::create($validatedData);

            return redirect('dashboard/daftarbuku')->with('success', 'BERHASIL! Buku Berhasil Ditambahkan!');
        } catch (QueryException $e) {
            return redirect('dashboard/daftarbuku')->with('error', 'GAGAL! Buku Gagal Ditambahkan!');
        }
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
        $book = Book::findOrFail($id);
        $categories = Category::all();

        return view('pages.admin.buku.edit', [
            'book' => $book,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {

            $validatedData = $request->validate([
                'judul' => 'required',
                'penulis' => 'required',
                'penerbit' => 'required',
                'id_kategori' => 'required',
                'tahun' => 'required|numeric',
                'quantity' => 'required|numeric',
                'cover' => 'mimes:jpeg,png,jpg,gif,svg',
                'sinopsis' => 'required'
            ]);

            $book = Book::findOrFail($id);

            $book->judul = $validatedData['judul'];
            $book->penulis = $validatedData['penulis'];
            $book->penerbit = $validatedData['penerbit'];
            $book->id_kategori = $validatedData['id_kategori'];
            $book->tahun = $validatedData['tahun'];
            $book->quantity = $validatedData['quantity'];
            $book->sinopsis = $validatedData['sinopsis'];

            if ($request->hasFile('cover')) {
                Storage::delete($book->cover);
                $cover = $request->file('cover')->store('public/cover');
                $book->cover = $cover;
            }

            $book->save();
            return redirect('dashboard/daftarbuku')->with('success', 'BERHASILl! Buku Berhasil Diperbarui!');
        } catch (QueryException $e) {
            return redirect('dashboard/daftarbuku')->with('error', 'GAGAL! Data Gagal Diperbarui!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        try {
            $book = Book::find($id);
            if ($book->cover !== null) {
                Storage::delete($book->cover);
            }
            $book->delete();

            return redirect('dashboard/daftarbuku')->with('success', 'BERHASIL! Buku Berhasil Dihapus!');
        } catch (QueryException $e) {
            return redirect('dashboard/daftarbuku')->with('error', 'GAGAL! Buku Sedang Dalam Transaksi!');
        }
    }
}
