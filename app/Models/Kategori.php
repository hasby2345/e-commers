<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    public $fillable = ['nama_kategori', 'gambar', 'ket'];
    public $visible = ['nama_kategori', 'gambar', 'ket'];
    public $timestamp = true;

    public function Produk (){
        return $this->hasOne(Produk::class, 'id_kategori');
    }

}
