<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\DB;
class ProdukController extends Controller
{
    public function admin(){
        return view('admin.dashboard');
    }
    public function logout(){
        $this->middleware('guest')->except('logout');
        return view('home');
    }
    public function index()
    {
        $produk = new Produk();
        return view('admin.produk.produk', ['produk'=> $produk->getAllData()]);
    }
    public function create()
    {
        $produk = Produk::all();
        return view('admin.produk.create',
        compact('produk'));
    }
    public function store(Request $request)
    {	
        $produk = new Produk();
        $produk->nama_barang = $request->nama_barang;
        $produk->gambar = $request->gambar;
        $produk->kode_barang = $request->kode_barang;
        $produk->stok = $request->stok;
        $produk->jenis_barang = $request->jenis_barang;
        $produk->harga = $request->harga;
        $produk->save();
        return redirect('admin/produk');
    }
    public function show(string $id)
    {
        $produk = Produk::find($id);
        return view('admin.produk.detail', compact('produk'));
    }

    public function edit(string $id)
    {
        $produk = DB:: table('produk')->where('id', $id)->get();
        return view('admin.produk.edit', compact('produk'));
    }
    public function update(Request $request)
    {
        $produk = Produk::find($request->id);
        $produk->nama_barang = $request->nama_barang;
        $produk->gambar = $request->gambar;
        $produk->kode_barang = $request->kode_barang;
        $produk->stok = $request->stok;
        $produk->jenis_barang = $request->jenis_barang;
        $produk->harga = $request->harga;
        $produk->save();
        return redirect('admin/produk');
    }
    public function destroy(string $id)
    {
        DB::table('produk')->where('id',$id)->delete();
        return redirect('admin/produk');
    }
}
