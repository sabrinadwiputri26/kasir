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
        Schema::create('kasirs_pelanggan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('PelangganId');
            $table->string('NamaPelanggan');
            $table->text('Alamat');
            $table->string('NomorTelepon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kasirs_pelanggan');
    }
};
