<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_produk', function (Blueprint $table) {
            // $table->id();
            $table->timestamps();
            $table->integer('id_produk')->primary();;
            $table->string('nama_produk');
            $table->string('desk_produk');
            $table->decimal('harga_produk', $precision = 10, $scale = 2);
            $table->integer('stok_produk');
            $table->integer('id_kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_produk');
    }
};
