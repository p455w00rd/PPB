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
    public function hilangcreate(Request $request)
    {
        $barang = $request->all();
        Barang::create($barang);

    	return redirect()->route('hilang');
    }
    // public function hilangupdate($id Request $request)
    // {
    //     return view('welcome');
    // }
    // public function hilangdelete()
    // {
    //     return view('welcome');
    // }
    // public function hilang($id)
    // {
    //     return view('welcome');
    // }
    // public function temuindex()
    // {
    //     $barang = Barang::where('tipe','0')->get();

    // 	return view('barang.hilang.index',['barang' => $barang]);
    // }
    // public function temucreate(Request $request)
    // {
    //     $barang = $request->all();
    //     Barang::create($barang);

    // 	return redirect()->route('hilang');
    // }
    // public function temuupdate($id Request $request)
    // {
    //     return view('welcome');
    // }
    // public function temudelete()
    // {
    //     return view('welcome');
    // }
    // public function temu($id)
    // {
    //     return view('welcome');
    // }
}
