<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoTrinh extends Model
{
    use HasFactory;
    protected $table = 'lotrinh';
    protected $fillable = [
        'MaKhoaHoc',
        'TenGiaiDoan',
        'NoiDungGiaiDoan',
        'MoTaGiaiDoan',
    ];
    public function khoahoc()
    {
        return $this->belongsTo(KhoaHoc::class, 'MaKhoaHoc', 'MaKhoaHoc');
    }
}
