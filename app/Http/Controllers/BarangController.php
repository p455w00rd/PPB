<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function hilangindex()
    {
        $barang = Barang::where('tipe','0')->get();

    return view('barang.hilang.index',['barang' => $barang]);
    }
}
