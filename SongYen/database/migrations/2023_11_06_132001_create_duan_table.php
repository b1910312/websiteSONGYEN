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
        Schema::create('duan', function (Blueprint $table) {
            $table->string('MaDuAn')->primary()->unique();
            $table->string('TenDuAn');
            $table->integer('MucKeuGoiDauTuDuoi');
            $table->integer('MucKeuGoiDauTuTren');
            $table->integer('SoTienKeuGoiThanhCong');
            $table->date('NgayKeuGoi');
            $table->date('NgayKetThucKeuGoi');
            $table->string('ThoiGianThucHienDuAn');
            $table->date('NgayBatDauDuAn');
            $table->date('NgayKetThucDuAn');
            $table->integer('TrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('duan');
    }
};
