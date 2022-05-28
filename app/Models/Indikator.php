<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indikator extends Model
{
    use HasFactory;
    protected $fillable = [
        "nama_indikator",
        "id_kelompok"
    ];
    
    public function produkss(){
        return $this->belongsToMany(Produk::class, "indikator_produk", "id_indikator", "id_produk");
    }

    public function kelompoks(){
        return $this->belongsTo(KelompokIndikator::class, "id_kelompok");
    }
}
