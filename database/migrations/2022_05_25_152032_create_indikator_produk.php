<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndikatorProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indikator_produk', function (Blueprint $table) {
            $table->unsignedBigInteger("id_produk");
            $table->unsignedBigInteger("id_indikator");

            $table->foreign("id_produk")->references("id")->on("produks")->onDelete("cascade");
            $table->foreign("id_indikator")->references("id")->on("indikators")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indikator_produk');
    }
}
