<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produk::create([
            'nama_produk' => 'GTC01RR',
            'harga_produk' => '1000000',
            'deskripsi_produk' => 'Bisa Digunakan Untuk Mobil Bisa Digunakan Untuk Mobil Bisa Digunakan Untuk Mobil Bisa Digunakan Untuk Mobil Bisa Digunakan Untuk Mobil Bisa Digunakan Untuk Mobil Bisa Digunakan Untuk Mobil Bisa Digunakan Untuk Mobil Bisa Digunakan Untuk Mobil Bisa Digunakan Untuk Mobil Bisa Digunakan Untuk Mobil Bisa Digunakan Untuk Mobil Bisa Digunakan Untuk Mobil',
            
            'merk' => '1',
            'link' => 'x',

            'promo' => '1'
        ]);

    }
}
