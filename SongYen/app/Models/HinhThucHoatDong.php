<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HinhThucHoatDong extends Model
{
    use HasFactory;
    protected $table = 'hthd';
    protected $primaryKey = 'MaHinhThuc';
    protected $fillable = [
        'MaHinhThuc',
        'TenHinhThuc',
        'MoTaHinhThuc',
    ];

}
