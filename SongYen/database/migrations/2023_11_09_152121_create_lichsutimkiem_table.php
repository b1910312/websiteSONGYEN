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
        Schema::create('lichsutimkiem', function (Blueprint $table) {
            $table->string('MaTimKiem')->primary()->unique();
            $table->unsignedBigInteger('MaNguoiDung');
            $table->string('TuKhoaTimKiem');
            $table->timestamps();
            $table->foreign('MaNguoiDung')->references('id')->on('nguoidung')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lichsutimkiem');
    }
};
