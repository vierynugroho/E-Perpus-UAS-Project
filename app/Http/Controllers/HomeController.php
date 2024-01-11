<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Literation;
use App\Models\Pinjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $cari_buku = $request->input('cari_buku');
        $datas = $cari_buku ? Book::where('judul', 'like', '%' . $cari_buku . '%')->paginate(9) : Book::paginate(9);
        $categories = Category::all();

        return view('home', [
            'datas' => $datas,
            'categories' => $categories,
            'cari_buku' => $cari_buku
        ]);
    }

    public function homeByCategory(Request $request, string $id)
    {
        $cari_buku = $request->input('cari_buku');
        $datas = Book::where('id_kategori', $id)
            ->where('judul', 'like', '%' . $cari_buku . '%')
            ->paginate(9);
        $category = Category::findOrFail($id);

        return view('homeByCategory', [
            'datas' => $datas,
            'category' => $category,
            'cari_buku' => $cari_buku
        ]);
    }

    public function detail(string $id)
    {
        $data = Book::findOrFail($id);
        return view('detail', [
            'data' => $data
        ]);
    }

    public function dashboard()
    {
        $user = auth()->user();

        // user information
        $count_pinjam_user = Pinjam::where('id_user', $user->nik)->count();
        $count_literasi_user = Literation::where('id_user', $user->nik)->count();
        $rank_user = Literation::select('id_user', DB::raw('count(*) as jumlah_literasi'))
            ->groupBy('id_user')
            ->orderByDesc('jumlah_literasi')
            ->pluck('id_user')
            ->search($user->nik);
        $count_buku_dibaca = Literation::where('id_user', $user->nik)
            ->distinct('id_buku')
            ->count('id_buku');

        // admin information
        $count_buku = Book::all()->count();
        $count_pinjam = Pinjam::all()->count();
        $count_literasi = Literation::all()->count();
        $leaderboards = Literation::select('id_user', DB::raw('count(*) as jumlah_literasi'))
            ->groupBy('id_user')
            ->orderBy('jumlah_literasi', 'DESC')
            ->get();
        $count_peminjam = Pinjam::distinct('id_user')->count('id_user');

        return view('pages.dashboard', [
            'leaderboards' => $leaderboards,

            // admin information
            'count_pinjam' => $count_pinjam,
            'count_literasi' => $count_literasi,
            'count_buku' => $count_buku,
            'count_peminjam' => $count_peminjam,

            // user information
            'rank_user' => $rank_user + 1,
            'count_literasi_user' => $count_literasi_user,
            'count_pinjam_user' => $count_pinjam_user,
            'count_buku_dibaca' => $count_buku_dibaca
        ]);
    }
}
