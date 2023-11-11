<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinhVucHoatDong extends Model
{
    use HasFactory;
    protected $table = 'lvhd';
    protected $fillable = [
        'MaLinhVuc',
        'TenLinhVuc',
        'MoTaLinhVuc',
    ];
}
