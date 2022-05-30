<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produk;

class IndikatorProduk extends Model
{
    use HasFactory;
    protected $table = 'indikator_produk';


    public function getDataProduk()
    {
        return $this->belongsTo(Produk::class, "id", "id_produk");
    }
}
