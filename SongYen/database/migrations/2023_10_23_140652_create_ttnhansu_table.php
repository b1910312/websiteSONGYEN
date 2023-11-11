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
        Schema::create('tt_nhansu', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idNhanSu');
            $table->string('HoVaTen');
            $table->timestamp('NamSinh');
            $table->tinyInteger('GioiTinh')->default(0)->comment('0=>Nam,1=>Nu,2=>Khac');
            $table->tinyInteger('ChucVu')->default(4)->comment('1=>Giam Doc,2=> Truong Phong,3 => Pho truong phong, 4=> Nhan vien');
            $table->string('PhongBan');
            $table->string('email')->unique();
            $table->string('SoDienThoai');
            $table->string('CCCD')->unique();

            $table->timestamps();
            $table->foreign('idNhanSu')->references('id')->on('nhansu')->cascadeOnDelete();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tt_nhansu');
    }
};
