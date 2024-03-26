<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('detailpenjualan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penjualan_id');
            $table->integer('jumlah_produk');
            $table->float('subtotal',10,2);
            $table->timestamps();
            $table->foreignId('produk_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailpenjualan');
    }
};