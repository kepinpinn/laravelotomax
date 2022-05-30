<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table =  'produks';

    protected $fillable = [
        'nama_produk',
        'harga_produk',
        'deskripsi_produk',
        'merk',
        'link',
        'gambar_produk',
        'promo'
    ];

    public function merks(){
        return $this->belongsTo(Merk::class, 'merk');
    }
    public $timestamps = false;

    public function indikators(){
        return $this->belongsToMany(Indikator::class, "indikator_produk", "id_produk", "id_indikator");
    }
}
