<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Literation;
use App\Models\Pinjam;
use Illuminate\Http\Request;

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
    public function index()
    {
        $datas = Book::all();
        return view('home', [
            'datas' => $datas,

        ]);
    }

    public function dashboard()
    {
        // ada 2
        // count admin (keseluruhan)
        // count user (data user login)

        $count_buku = Book::all()->count();
        $count_pinjam = Pinjam::all()->count();
        $count_literasi = Literation::all()->count();

        return view('pages.dashboard', [
            'count_pinjam' => $count_pinjam,
            'count_literasi' => $count_literasi,
            'count_buku' => $count_buku,
        ]);
    }
}
