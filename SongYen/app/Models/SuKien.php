<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuKien extends Model
{
    use HasFactory;
    protected $table = 'sukien';
    protected $primaryKey = 'MaSuKien';
    protected $fillable = [
        'MaSuKien',
        'TenSuKien',
        'DiaDiem',
        'NgayBatDauSuKien',
        'NgayKetThucSuKien',
        'TrangThai',
    ];
}
