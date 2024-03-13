<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panen extends Model
{
    use HasFactory;

    protected $table = 'panen';
    protected $fillable = ['user_id', 'komoditi_id', 'tanggal_panen', 'jumlah_panen'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function komoditi()
    {
        return $this->belongsTo(Komoditi::class);
    }
}
