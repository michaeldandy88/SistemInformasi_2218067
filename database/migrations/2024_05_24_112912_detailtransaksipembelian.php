<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
    Schema::create('detailtransaksipembelian', function (Blueprint $table) {
        $table->id();
        $table->string('id_transaksipembelian');
        $table->string('id_invoice');
        $table->string('id_barang');
        $table->integer('jumlah_pembelian');
        $table->integer('harga_satuan');
    });
}
};
