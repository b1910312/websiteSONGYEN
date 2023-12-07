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
        Schema::create('lotrinh', function (Blueprint $table) {
            $table->id();
            $table->string('MaKhoaHoc');
            $table->string('TenGiaiDoan');
            $table->string('NoiDungGiaiDoan');
            $table->string('MoTaGiaiDoan');
            $table->timestamps();
            $table->foreign('MaKhoaHoc')->references('MaKhoaHoc')->on('khoahoc')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lotrinh');
    }
};
