<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class NhanSu extends Authenticatable implements JWTSubject
{
    use HasApiTokens, Notifiable, HasFactory;

    protected $table = 'nhansu';
    protected $hidden = ['password','remember_token','email_verified_at'];
    protected $fillable = [
        'email',
        'password',
        'status',
    ];

    function TTNhanSu()
    {
        return $this->belongsTo(TTNhanSu::class,'id','idNhanSu');
    }
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }
}
