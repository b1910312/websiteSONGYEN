<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HinhAnh extends Model
{
    use HasFactory;

    protected $table = 'hinhanh';
    protected $primaryKey = 'MaHinhAnh';
    protected $fillable = [
        'MaHinhAnh',
        'TenHinhAnh',
        'URL',
        'Thumbnail',
    ];
}
