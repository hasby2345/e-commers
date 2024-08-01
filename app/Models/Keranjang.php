<?php

namespace App\Models;

use App\Models\Produk;
use App\Models\User;
use App\Models\DetailTransaksi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->belongsToMany(User::class, 'id_user');
    }
    public function Produk()
    {
        return $this->belongsToMany(Produk::class, 'id_produk');
    }
    public function DetailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class, 'id_keranjang');
    }
}
