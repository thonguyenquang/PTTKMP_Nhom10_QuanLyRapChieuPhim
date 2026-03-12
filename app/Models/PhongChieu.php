<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhongChieu extends Model
{
    use HasFactory;

    protected $table = 'PhongChieu';
    protected $primaryKey = 'MaPhong';
    public $timestamps = false;

    protected $fillable = [
        'TenPhong',
        'SoLuongGhe',
        'LoaiPhong',
    ];

   
    public function suatChieu()
    {
        return $this->hasMany(SuatChieu::class, 'MaPhong', 'MaPhong');
    }

   
    public function ghe()
    {
        return $this->hasMany(Ghe::class, 'MaPhong', 'MaPhong');
    }

}
