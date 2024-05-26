<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
    Schema::create('biaya', function (Blueprint $table) {
        $table->id();
        $table->string('id_pengeluaran');
        $table->integer('jumlah_biaya');
        $table->string('keterangan_biaya');
    });
}
};
