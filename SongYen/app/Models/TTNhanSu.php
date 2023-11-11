<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TTNhanSu extends Model
{
    use HasFactory;

    protected $table = 'tt_nhansu';
    protected $fillable = [
        'idNhanSu',
        'HoVaTen',
        'NamSinh',
        'GioiTinh',
        'ChucVu',
        'PhongBan',
        'email',
        'SoDienThoai',
        'CCCD',
    ];

    function PhongBan()
    {
        return $this->belongsTo(PhongBan::class, 'MaPhongBan', 'PhongBan');
    }
}
