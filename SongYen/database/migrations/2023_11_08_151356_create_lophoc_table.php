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
        Schema::create('lophoc', function (Blueprint $table) {
            $table->string('MaLopHoc')->primary()->unique();
            $table->string('MaKhoaHoc');
            $table->date('NgayBatDau');
            $table->date('NgayKetThuc');
            $table->tinyInteger('TrangThai')->comment('(1) Đang mở đăng ký, (2) đang giảng dạy, (3) Đã hoàn thành, (4) đã hủy');
            $table->timestamps();
            $table->foreign('MaKhoaHoc')->references('MaKhoaHoc')->on('khoahoc')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lophoc');
    }
};
