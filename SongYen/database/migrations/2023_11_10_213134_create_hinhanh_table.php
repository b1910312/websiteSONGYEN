<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hinhanh', function (Blueprint $table) {
            $table->string('MaHinhAnh')->primary()->unique();
            $table->string('MaDoiTuong');
            $table->string('URL');
            $table->tinyInteger('Thumbnail')->default(0)->comment('(0) không phải thumbnail (1) là thumbnail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hinhanh');
    }
};
