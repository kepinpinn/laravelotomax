<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    use HasFactory;

    protected $fillable = [
        'merek',
        'foto_merek'
    ];
    public $timestamps = false;
    public function produks(){
        return $this->hasMany(Produk::class);
    }
}
