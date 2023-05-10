<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $fillable = ['merk_produk', 'jenis_produk', 'jumlah_stok', 'harga_produk', 'keterangan'];
}
