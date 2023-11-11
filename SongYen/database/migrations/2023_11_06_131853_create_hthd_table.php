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
        Schema::create('hthd', function (Blueprint $table) {
            $table->string('MaHinhThuc')->primary()->unique();
            $table->string('TenHinhThuc');
            $table->string('MoTaHinhThuc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hthd');
    }
};
