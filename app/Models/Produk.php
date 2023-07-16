<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    public $timestamps = false;
    protected $primarykey = 'id';
	
    protected $fillable = [
        'nama_barang',
        'gambar',
        'kode_barang',
        'stok',
        'jenis_barang',
        'harga'
    ];
    public function produk(){
        return $this->hasMany(Produk::class);
    }

    public function getAllData(){
        $alldata = DB::table('produk')
        ->select('produk.*')
        ->get();
        return $alldata;
    }
}
