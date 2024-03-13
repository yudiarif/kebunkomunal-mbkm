<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komoditi extends Model
{
    use HasFactory;
    protected $table = 'komoditi'; 
    protected $primaryKey = 'id'; 

    protected $fillable = [
        'nama_komoditi',
        'jenis_komoditi',
        
    ];

    public function informasiSlot()
    {
        return $this->hasOne(InformasiSlot::class, 'komoditi_id');
    }
}
