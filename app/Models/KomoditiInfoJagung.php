<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomoditiInfoJagung extends Model
{
    use HasFactory;
    protected $table = 'komoditi_info_jagung';

    protected $fillable = [
        'user_id',
        'komoditi_id',
        'pupuk_id',
        'tinggi',
        'kematian',
        'kehijauan',
        'tanggal_pupuk',
        'ph_tanah',
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

    public function pupuk()
    {
        return $this->belongsTo(Pupuk::class, 'pupuk_id');
    }
}
