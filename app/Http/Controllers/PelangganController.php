<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = new Pelanggan();
        return view('admin.pelanggan.pelanggan', ['pelanggan'=> $pelanggan->getAllData()]);
    }
    public function create()
    {
        $pelanggan = Pelanggan::all();
        return view('admin.pelanggan.create',
        compact('pelanggan'));
    }
    public function store(Request $request)
    {	
        $pelanggan = new Pelanggan();	
        $pelanggan->nama = $request->nama;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->no_hp = $request->no_hp;
        $pelanggan->save();
        return redirect('admin/produk');
    }
    public function show(string $id)
    {
        $pelanggan = Pelanggan::find($id);
        return view('admin.produk.detail', compact('pelanggan'));
    }

    public function edit(string $id)
    {
        $pelanggan = DB:: table('pelanggan')->where('id', $id)->get();
        return view('admin.pelanggan.edit', compact('pelanggan'));
    }
    public function update(Request $request)
    {
        $pelanggan = Pelanggan::find($request->id);
        $pelanggan->nama = $request->nama;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->no_hp = $request->no_hp;
        $pelanggan->save();
        return redirect('admin/pelanggan');
    }
    public function destroy(string $id)
    {
        DB::table('pelanggan')->where('id',$id)->delete();
        return redirect('admin/pelanggan');
    }
}
