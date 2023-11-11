<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TTDoanhNghiep extends Model
{
    use HasFactory;

    protected $table = 'ttdoanhnghiep';
    protected $fillable = [
        'TenDoanhNghiep',
        'MaSoThue',
        'SoDienThoai',
        'TamNhin',
        'SuMenh',
        'MucTieu',
    ];

}
