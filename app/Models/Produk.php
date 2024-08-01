<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    public $fillable = ['nama_produk', 'deskripsi', 'harga', 'stok', 'gambar', 'id_kategori'];
    public $visible = ['nama_produk', 'deskripsi', 'harga', 'stok', 'gambar', 'id_kategori'];
    public $timestamp = true;

    public function Kategori (){
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function DetailPesanan (){
        return $this->hasMany(DetailPesanan::class, 'id_produk');
    }

    public function keranjang()
    {
        return $this->belongsToMany(Keranjang::class);
    }
}
