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
        Schema::create('sukien', function (Blueprint $table) {
            $table->string('MaSuKien');
            $table->string('TenSuKien');
            $table->string('DiaDiem');
            $table->date('NgayBatDauSuKien');
            $table->date('NgayKetThucSuKien');
            $table->integer('TrangThai')->default(1)->comment('1=>Sắp diễn ra,2=>Đang diễn ra,3=>Đã kết thúc,4=>Đã hủy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sukien');
    }
};
