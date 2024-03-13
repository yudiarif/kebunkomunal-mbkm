<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomoditiInfoAyam extends Model
{
    use HasFactory;
    protected $table = 'komoditi_info_ayam';

    protected $fillable = [
        'user_id',
        'komoditi_id',
        'berat',
        'kematian',
        'tanggal_pakan',
        'jumlah_pakan',
        'suhu',
        'amoniac',
        'jumlah_slot',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function komoditi()
    {
        return $this->belongsTo(Komoditi::class, 'komoditi_id');
    }
}
