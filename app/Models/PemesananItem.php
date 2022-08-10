<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananItem extends Model
{
    use HasFactory;

    protected $table='item_pemesanan';
    public $timestamps=false;

    public function product(){
        return $this->belongsTo(Produk::class,'produk_id');
    }
    public function store(){
        return $this->belongsTo(Toko::class,'toko_id');
    }
    public function order(){
        return $this->belongsTo(Pemesanan::class,'pemesanan_id');
    }
}
