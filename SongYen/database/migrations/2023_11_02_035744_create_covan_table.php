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
        Schema::create('covan', function (Blueprint $table) {
            $table->string('MaCoVan')->primary()->unique();
            $table->string('MaPhongBan');
            $table->string('HoVaTen');
            $table->string('HocHam');
            $table->string('HocVi');
            $table->string('NoiCongTac');
            $table->string('NoiGiangDay');
            $table->timestamps();

            $table->foreign('MaPhongBan')->references('MaPhongBan')->on('phongban')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('covan');
    }
};
