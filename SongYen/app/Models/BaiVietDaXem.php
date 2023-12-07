<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiVietDaXem extends Model
{
    use HasFactory;
    protected $table = 'baivietdaxem';
    protected $fillable = [
        'MaBaiViet',
        'MaNguoiDung',
        'ThoiGianXem',
    ];
    public function baiviet()
    {
        return $this->belongsTo(BaiViet::class, 'MaBaiViet', 'MaBaiViet');
    }
}
