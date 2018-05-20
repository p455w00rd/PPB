<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Barang;
use Illuminate\Support\Facades\Input;

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

    //hilang
    public function hilangindex()
    {
        $barang = Barang::where('tipe','0')
            ->where('ditemukan','o')
            ->get();

    	return view('barang.hilang.index',['barang' => $barang]);
    }
    public function hilangcreate()
    {
        return view('barang.hilang.create');
    }
    public function hilangstore(Request $request)
    {
        $dob = Carbon::parse($request->input('tanggal'))->format('Y-m-d');
        Input::merge(['tanggal' => $dob]);
        $barang = $request->all();
//        dd($barang);
        Barang::create($barang);

        return redirect()->route('hilang.index');
    }
    public function hilangedit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.hilang.update',['barang'=>$barang]);
    }
     public function hilangupdate($id, Request $request)
     {
         $barang = Barang::findOrFail($id);
         $dob = Carbon::parse($request->input('tanggal'))->format('Y-m-d');
         Input::merge(['tanggal' => $dob]);
         $input = $request->all();

//        dd($request->input('dob'));
//        dd($input);
         $barang->fill($input)->save();
         return redirect()->route('hilang.index');
     }
     public function hilangdelete($id)
     {
         $barang = Barang::findOrFail($id);
         $barang->delete();
         return redirect()->route('hilang.index');
     }
     public function hilang($id)
     {
         $barang = Barang::findOrFail($id);
         return view('barang.hilang.show',['barang'=>$barang]);
     }

     //ditemukan
    public function temuindex()
    {
        $barang = Barang::where('tipe','1')
            ->where('ditemukan','o')
            ->get();

        return view('barang.temu.index',['barang' => $barang]);
    }
    public function temucreate()
    {
        return view('barang.temu.create');
    }
    public function temustore(Request $request)
    {
        $dob = Carbon::parse($request->input('tanggal'))->format('Y-m-d');
        Input::merge(['tanggal' => $dob]);
        $barang = $request->all();
//        dd($barang);
        Barang::create($barang);

        return redirect()->route('temu.index');
    }
    public function temuedit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.temu.update',['barang'=>$barang]);
    }
    public function temuupdate($id, Request $request)
    {
        $barang = Barang::findOrFail($id);
        $dob = Carbon::parse($request->input('tanggal'))->format('Y-m-d');
        Input::merge(['tanggal' => $dob]);
        $input = $request->all();

//        dd($request->input('dob'));
//        dd($input);
        $barang->fill($input)->save();
        return redirect()->route('temu.index');
    }
    public function temudelete($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('temu.index');
    }
    public function temu($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.temu.show',['barang'=>$barang]);
    }
}
