<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pembayaran;
use App\Models\Pelanggan;
use App\Models\Produk;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = new Pembayaran();
        return view('admin.pembayaran.pembayaran', ['pembayaran'=> $pembayaran->getAllData()]);
    }
    public function create()
    {
        $pembayaran = Pembayaran::all();
        $pelanggan = Pelanggan::all();
        $produk = Produk::all();
        return view('admin.pembayaran.create',
        compact('pembayaran','pelanggan','produk'));
    }
    public function store(Request $request)
    {	
        $pembayaran = new Pembayaran();	
        $pembayaran->pelanggan_id = $request->pelanggan_id;
        $pembayaran->produk_id = $request->produk_id;
        $pembayaran->tanggal = $request->tanggal;
        $pembayaran->total = $request->total;
        $pembayaran->save();
        return redirect('admin/pembayaran');
    }
    public function show(string $id)
    {
        $pembayaran = Pembayaran::find($id);
        return view('admin.pembayaran.detail', compact('pembayaran'));
    }

    public function edit(string $id)
    {
        $pembayaran = DB:: table('pembayaran')->where('id', $id)->get();
        return view('admin.pembayaran.edit', compact('pembayaran'));
    }
    public function update(Request $request)
    {
        $pembayaran = Pembayaran::find($request->id);
        $pembayaran->pelanggan_id = $request->pelanggan_id;
        $pembayaran->produk_id = $request->produk_id;
        $pembayaran->tanggal = $request->tanggal;
        $pembayaran->total = $request->total;
        $pembayaran->save();
        return redirect('admin/pembayaran');
    }
    public function destroy(string $id)
    {
        DB::table('pembayaran')->where('id',$id)->delete();
        return redirect('admin/pembayaran');
    }
}
