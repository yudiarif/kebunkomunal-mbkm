<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    use HasFactory;
    protected $table = 'map';

    protected $fillable = [
        'komoditi_id',
        'latitude',
        'longitude',
        'alamat',
        'link_google_map',
    ];

    public function komoditi()
    {
        return $this->belongsTo(Komoditi::class, 'komoditi_id');
    }
}
