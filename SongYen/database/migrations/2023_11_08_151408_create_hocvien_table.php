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
        Schema::create('hocvien', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('MaNguoiDung');
            $table->string('HoVaTen');
            $table->string('GioiTinh')->comment('(1) Nam, (2) Nữ, (3) Không xác định');
            $table->date('NgaySinh');
            $table->string('CCCD');
            $table->string('MaKhoaHoc');
            $table->tinyInteger('TrangThai')->comment('(1) Đang học, (2) Đã hoàn thành, (3) đã hủy');
            $table->timestamps();
            $table->foreign('MaKhoaHoc')->references('MaKhoaHoc')->on('khoahoc')->cascadeOnDelete();
            $table->foreign('MaNguoiDung')->references('id')->on('nguoidung')->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hocvien');
    }
};
