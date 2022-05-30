<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelompokIndikator extends Model
{
    use HasFactory;
    protected $table = 'kelompok_indikators';
    protected $fillable = [
        'pertanyaan'
    ];

    public function indikators(){
        return $this->hasMany(Indikator::class, 'id_kelompok');
    }
}
