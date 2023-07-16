<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Pelanggan;
use App\Models\Produk;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = new Transaksi();
        return view('admin.transaksi.transaksi', ['transaksi'=> $transaksi->getAllData()]);
    }
    public function create()
    {
        $transaksi = Transaksi::all();
        $pelanggan = Pelanggan::all();
        $produk = Produk::all();
        return view('admin.transaksi.create',
        compact('pelanggan','produk','transaksi'));
    }
    public function store(Request $request)
    {	
        $transaksi = new Transaksi();
        $transaksi->pelanggan_id = $request->pelanggan_id;
        $transaksi->tanggal = $request->tanggal;
        $transaksi->keterangan = $request->keterangan;
        $transaksi->produk_id = $request->produk_id;
        $transaksi->save();
        return redirect('admin/transaksi');
    }
    public function show(string $id)
    {
        $Transaksi = Transaksi::find($id);
        return view('admin.transaksi.detail', compact('transaksi'));
    }

    public function edit(string $id)
    {
        $Transaksi = DB:: table('transaksi')->where('id', $id)->get();
        return view('admin.transaksi.edit', compact('transaksi'));
    }
    public function update(Request $request)
    {
        $transaksi = Transaksi::find($request->id);
        $transaksi->pelanggan_id = $request->pelanggan_id;
        $transaksi->tanggal = $request->tanggal;
        $transaksi->keterangan = $request->keterangan;
        $transaksi->produk_id = $request->produk_id;
        $transaksi->save();
        return redirect('admin/transaksi');
    }
    public function destroy(string $id)
    {
        DB::table('transaksi')->where('id',$id)->delete();
        return redirect('admin/transaksi');
    }
}
