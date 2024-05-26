<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
    Schema::create('customer', function (Blueprint $table) {
        $table->id();
        $table->string('nama_customer');
        $table->string('kontak_customer');
    });
}
};