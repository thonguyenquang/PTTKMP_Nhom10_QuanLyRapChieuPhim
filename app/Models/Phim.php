<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phim extends Model
{
    use HasFactory;

    protected $table = 'Phim';
    protected $primaryKey = 'MaPhim';
    public $timestamps = false;

    protected $fillable = [
        'TenPhim',
        'MoTa',
        'TheLoai',
        'ThoiLuong',
        'NgayKhoiChieu',
        'DuongDanPoster',
        'NuocSanXuat',
        'DinhDang',
        'DaoDien',
    ];

    
    protected $casts = [
        'NgayKhoiChieu' => 'date',
    ];
    public function suatChieu()
    {
        return $this->hasMany(SuatChieu::class, 'MaPhim', 'MaPhim');
    }
}
