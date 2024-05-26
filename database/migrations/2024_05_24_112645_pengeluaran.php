<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
    Schema::create('pengeluaran', function (Blueprint $table) {
        $table->id();
        $table->string('id_outlet');
        $table->string('tanggal_pengeluaran');
        $table->string('keterangan_pengeluaran');
        $table->string('jumlahpengeluaran');
    });
}
};
