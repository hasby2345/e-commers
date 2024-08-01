<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

    public $fillable = ['id_user', 'id_produk','id_keranjang'];
    public $visible = ['id_user', 'id_produk','id_keranjang'];
    public $timestamp = true;

    public function User (){
        return $this->belongsTo(User::class, 'id_user');
    }
    public function Keranjang()
    {
        return $this->belongsTo(Keranjang::class, 'id_keranjang');
    }

}
