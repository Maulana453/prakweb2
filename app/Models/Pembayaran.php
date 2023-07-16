<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    public $timestamps = false;
    protected $primarykey = 'id';
	
    protected $fillable = [	

        'pelanggan_id',
        'produk_id',
        'tanggal',
        'total',
    ];
    public function pelanggan(){
        return $this->belongsTo(Pelanggan::class);
    }
    public function produk(){
        return $this->belongsTo(Produk::class);
    }
    public function getAllData(){
        $alldata = DB::table('pembayaran')

        ->join('pelanggan','pembayaran.pelanggan_id','=','pelanggan.id')
        ->join('produk','pembayaran.produk_id','=','produk.id')
        ->select('pembayaran.*','pelanggan.nama as nama','produk.nama_barang as nama_produk')
        ->get();
        return $alldata;
    }
}
