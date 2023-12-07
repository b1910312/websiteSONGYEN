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
        Schema::create('lvhd', function (Blueprint $table) {
            $table->string('MaLinhVuc')->primary()->unique();
            $table->string('TenLinhVuc');
            $table->string('MoTaLinhVuc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lvhd');
    }
};
