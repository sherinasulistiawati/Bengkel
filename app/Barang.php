<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $fillable = ['nama_barang','jenis_barang','harga','stok_barang','satuan'];

    public function barangs()
   {
   	return $this->hasMany('App\Penjualan');
   	return $this->hasMany('App\Pembelian');
   }
}
