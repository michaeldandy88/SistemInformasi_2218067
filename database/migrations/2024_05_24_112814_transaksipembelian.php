<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
    Schema::create('transaksipembelian', function (Blueprint $table) {
        $table->id();
        $table->string('id_supplier');
        $table->string('tanggal_pembelian');
        $table->integer('total_harga');
    });
}
};
