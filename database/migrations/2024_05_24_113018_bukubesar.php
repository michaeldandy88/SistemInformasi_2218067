<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
    Schema::create('pengguna', function (Blueprint $table) {
        $table->id();
        $table->string('id_detailtransaksipembelian');
        $table->string('id_detailtransaksipenjualan');
        $table->string('id_kasdanbank');
        $table->string('id_pengeluaran');
        $table->string('tanggal_transaksi');
        $table->string('keterangan');
        $table->string('jenis_transaksi');
        $table->integer('saldo');
    });
}
};
