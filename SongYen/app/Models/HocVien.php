<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HocVien extends Model
{
    use HasFactory;
    protected $table = 'hocvien';
    protected $fillable = [
        'MaNguoiDung',
        'HoVaTen',
        'GioiTinh',
        'NgaySinh',
        'CCCD',
        'MaKhoaHoc',
        'TrangThai'
    ];
    public function khoahoc()
    {
        return $this->belongsTo(KhoaHoc::class, 'MaKhoaHoc', 'MaKhoaHoc');
    }
}
