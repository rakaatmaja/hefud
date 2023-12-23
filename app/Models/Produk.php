<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    public $primaryKey = 'id_produk';
    protected $table = 'tb_produk';
    protected $fillable = ['id', 'id_produk', 'nama_produk', 'desk_produk', 'harga_produk', 'stok_produk', 'id_kategori', 'gambar_produk'];
    public function kategori()
    {
        return $this->belongsto(Kategori::class, 'id_kategori', 'id_kategori');
    }
}
