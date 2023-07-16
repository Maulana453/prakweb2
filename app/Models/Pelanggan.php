<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';
    public $timestamps = false;
    protected $primarykey = 'id';
	
    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
    ];
    public function pelanggan(){
        return $this->hasMany(Pelanggan::class);
    }

    public function getAllData(){
        $alldata = DB::table('pelanggan')
        ->select('pelanggan.*')
        ->get();
        return $alldata;
    }
}
