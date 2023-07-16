<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    public $timestamps = false;
    protected $primarykey = 'id';
	
    protected $fillable = [	
        'pelanggan_id',
        'tanggal',
        'keterangan',
        'produk_id',
    ];
    public function pelanggan(){
        return $this->belongsTo(Pelanggan::class);
    }
    public function produk(){
        return $this->belongsTo(Produk::class);
    }
    public function getAllData(){
        $alldata = DB::table('transaksi')

        ->join('pelanggan','transaksi.pelanggan_id','=','pelanggan.id')
        ->join('produk','transaksi.produk_id','=','produk.id')
        ->select('transaksi.*','pelanggan.nama as nama','produk.nama_barang as nama_produk')
        ->get();
        return $alldata;
    }
}
