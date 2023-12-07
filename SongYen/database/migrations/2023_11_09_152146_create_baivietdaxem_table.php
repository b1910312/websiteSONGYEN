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
        Schema::create('baivietdaxem', function (Blueprint $table) {
            $table->id();
            $table->string('MaBaiViet');
            $table->unsignedBigInteger('MaNguoiDung');
            $table->dateTime('ThoiGianXem');
            $table->timestamps();
            $table->foreign('MaNguoiDung')->references('id')->on('nguoidung')->cascadeOnDelete();
            $table->foreign('MaBaiViet')->references('MaBaiViet')->on('baiviet')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baivietdaxem');
    }
};
