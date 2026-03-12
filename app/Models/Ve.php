<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ve extends Model
{
    use HasFactory;

    protected $table = 'Ve';
    protected $primaryKey = 'MaVe';
    public $timestamps = false;

    protected $fillable = [
        'MaSuatChieu',
        'MaPhong',
        'SoGhe',
        'MaHoaDon',
        
        'GiaVe',
        'TrangThai',
        'NgayDat',
    ];

    protected $casts = [
        'NgayDat' => 'datetime',
    ];

   
    public function suatChieu()
    {
        return $this->belongsTo(SuatChieu::class, 'MaSuatChieu', 'MaSuatChieu');
    }

    
    public function hoaDon()
    {
        return $this->belongsTo(HoaDon::class, 'MaHoaDon', 'MaHoaDon');
    }

    
    public function phongChieu()
{
    return $this->belongsTo(PhongChieu::class, 'MaPhong', 'MaPhong');
}

public function ghe()
{
    return Ghe::where('MaPhong', $this->MaPhong)
              ->where('SoGhe', $this->SoGhe)
              ->first();
}



}
