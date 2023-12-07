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
        Schema::create('khoahoc', function (Blueprint $table) {
            $table->string('MaKhoaHoc')->primary()->unique();
            $table->string('ChuDe');
            $table->string('TenKhoaHoc');
            $table->integer('HocPhi');
            $table->string('Lotrinh');
            $table->string('NguoiGiangDay');
            $table->string('NgayBatDau');
            $table->string('NgayKetThuc');
            $table->string('HinhThuc');
            $table->timestamps();
            $table->foreign('ChuDe')->references('MaChuDe')->on('chude')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khoahoc');
    }
};
