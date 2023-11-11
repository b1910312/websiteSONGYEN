<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoVan extends Model
{
    use HasFactory;
    protected $table = 'covan';
    protected $primaryKey = 'MaCoVan';
    protected $fillable = [
        'MaCoVan',
        'MaPhongBan',
        'HoVaTen',
        'HocHam',
        'HocVi',
        'NoiCongTac',
        'NoiGiangDay',
    ];

    function PhongBan()
    {
        return $this->belongsTo(PhongBan::class, 'MaPhongBan', 'MaPhongBan');
    }
}
