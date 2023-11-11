<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class NguoiDung extends Authenticatable implements JWTSubject
{
    use HasApiTokens, Notifiable, HasFactory;

    protected $table = 'nguoidung';
    protected $hidden = ['password','remember_token','email_verified_at'];
    protected $fillable = [
        'email',
        'password',
        'HoVaTen',
        'NamSinh',
        'SoDienThoai',
        'GioiTinh',
        'status',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }
}
