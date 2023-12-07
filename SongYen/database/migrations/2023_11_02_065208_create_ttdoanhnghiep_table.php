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
        Schema::create('ttdoanhnghiep', function (Blueprint $table) {
            $table->id();
            $table->string('TenDoanhNghiep');
            $table->string('MaSoThue');
            $table->string('SoDienThoai');
            $table->string('TamNhin');
            $table->string('SuMenh');
            $table->string('MucTieu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ttdoanhnghiep');
    }
};
