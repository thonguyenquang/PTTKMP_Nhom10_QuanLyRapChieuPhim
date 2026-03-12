<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ghe extends Model
{
    use HasFactory;

    protected $table = 'Ghe';
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = ['MaPhong', 'SoGhe'];

    protected $fillable = [
        'MaPhong',
        'SoGhe'
    ];

   
    public function phongChieu()
    {
        return $this->belongsTo(PhongChieu::class, 'MaPhong', 'MaPhong');
    }

    
    public function ves()
    {
        return Ve::where('MaPhong', $this->MaPhong)
                 ->where('SoGhe', $this->SoGhe);
    }

    
    protected function setKeysForSaveQuery($query)
    {
    return $query->where([
        'MaPhong' => $this->getAttribute('MaPhong'),
        'SoGhe' => $this->getOriginal('SoGhe') 
    ]);
    }
    
}
