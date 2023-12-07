<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LopHoc extends Model
{
    use HasFactory;
    protected $table = 'lophoc';
    protected $primaryKey = 'MaLopHoc';
    protected $fillable = [
        'MaLopHoc',
        'MaKhoaHoc',
        'NgayBatDau',
        'NgayKetThuc',
        'TrangThai',
    ];
    public function khoahoc(){
        return $this->belongsTo(KhoaHoc::class,'MaKhoaHoc','MaKhoaHoc');
    }
}
