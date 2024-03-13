<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiSlot extends Model
{
    use HasFactory;
    protected $table = 'informasi_slot';
    protected $primaryKey = 'id'; 

    protected $fillable = [
        'komoditi_id',
        'slot',
        'tanggal',
    ];

    // Relasi ke tabel komoditis
    public function komoditi()
    {
        return $this->belongsTo(Komoditi::class, 'komoditi_id');
    }
}
