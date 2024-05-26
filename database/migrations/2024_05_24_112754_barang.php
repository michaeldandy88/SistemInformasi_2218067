<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
    Schema::create('barang', function (Blueprint $table) {
        $table->id();
        $table->integer('harga_barang');
        $table->integer('berat_barang');
        $table->string('stok_barang');
    });
}
};
