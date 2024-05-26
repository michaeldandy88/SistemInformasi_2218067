<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
    Schema::create('supplier', function (Blueprint $table) {
        $table->id();
        $table->string('id_biaya');
        $table->string('nama_supplier');
        $table->string('alamat_supplier');
        $table->integer('kontak_suplier');
        $table->string('katasandi');
    });
}
};
