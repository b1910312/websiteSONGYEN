<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhoaHoc extends Model
{
    use HasFactory;
    protected $table = 'khoahoc';
    protected $primaryKey = 'MaKhoaHoc';
    protected $fillable = [
        'MaKhoaHoc',
        'ChuDe',
        'TenKhoaHoc',
        'HocPhi',
        'LoTrinh',
        'NguoiGiangDay',
        'NgayBatDau',
        'NgayKetThuc',
        'HinhThuc',
    ];
    public function chude()
    {
        return $this->belongsTo(ChuDe::class,'ChuDe','MaChuDe');
    }
    public function lophoc()
    {
        return $this->hasMany(LopHoc::class,'MaKhoaHoc','MaKhoaHoc');
    }
}
