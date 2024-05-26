<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
    Schema::create('kasdanbank', function (Blueprint $table) {
        $table->id();
        $table->string('id_biaya');
        $table->string('tanggal_transaksi');
        $table->string('keterangan_transaksi');
        $table->integer('jumlahtransaksi');
    });
}
};
