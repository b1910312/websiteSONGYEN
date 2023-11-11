<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LichSuTimKiem extends Model
{
    use HasFactory;
    protected $table = 'lichsutimkiem';
    protected $primaryKey = 'MaTimKiem';
    protected $fillable = [
        'MaTimKiem',
        'MaNguoiDung',
        'TuKhoaTimKiem',
    ];
}
