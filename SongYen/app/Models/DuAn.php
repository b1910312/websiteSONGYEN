<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DuAn extends Model
{
    use HasFactory;
    protected $table = 'duan';
    protected $primaryKey = 'MaDuAn';
    protected $fillable = [
        'MaDuAn',
        'TenDuAn',
        'MucKieuGoiDauTuDuoi',
        'MucKieuGoiDauTuTren',
        'SoTienKieuGoiThanhCong',
        'NgayKeuGoi',
        'NgayKetThucKeuGoi',
        'ThoiGianThucHienDuAn',
        'NgayBatDauDuAn',
        'NgayKetThucDuAn',
        'TrangThai',
    ];
}
