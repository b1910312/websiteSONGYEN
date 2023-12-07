<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NenTang extends Model
{
    use HasFactory;
    protected $table = 'nentang';
    protected $primaryKey = 'MaNenTang';
    protected $fillable = [
        'MaNenTang',
        'MaDoiTuong',
        'TenNenTang',
        'URL',
    ];
}
