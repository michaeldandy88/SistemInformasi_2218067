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
        $table->string('id_pegawai');
        $table->string('id_customer');
        $table->string('nama_pengguna');
        $table->string('ussername');
        $table->string('katasandi');
    });
}
};