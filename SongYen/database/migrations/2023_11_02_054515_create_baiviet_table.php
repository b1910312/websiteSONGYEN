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
        Schema::create('baiviet', function (Blueprint $table) {
            $table->string('MaBaiViet')->primary()->unique();
            $table->string('Sabo');
            $table->string('Meta');
            $table->string('NoiDung');
            $table->tinyInteger('ChuDe')->comment('1 => sức khỏe tinh thần, 2 => tâm lý học đường, 3 => tâm lý học giới tính, 4 => kỹ năng sống');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baiviet');
    }
};
