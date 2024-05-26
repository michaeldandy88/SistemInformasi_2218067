<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
    Schema::create('detailtransaksipenjualan', function (Blueprint $table) {
        $table->id();
        $table->string('id_penjualan');
        $table->string('id_invoice');
        $table->string('id_barang');
        $table->integer('jumlah_penjualan');
        $table->integer('harga_satuan');
    });
}
};
