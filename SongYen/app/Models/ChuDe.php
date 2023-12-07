<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChuDe extends Model
{
    use HasFactory;
    protected $table = 'chude';
    protected $primaryKey = 'MaChuDe';
    protected $fillable = [
        'MaChuDe',
        'TenChuDe',
        'MoTaChuDe',
    ];
    public function khoahoc()
    {
        return $this->hasMany(KhoaHoc::class,'ChuDe','MaChuDe');
    }
}
