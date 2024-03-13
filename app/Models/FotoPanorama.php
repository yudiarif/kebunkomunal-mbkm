<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoPanorama extends Model
{
    use HasFactory;
    protected $table = 'foto_panorama';

    protected $fillable = [
        'user_id',
        'komoditi_id',
        'foto1',
        'foto2',
        'foto3',
        'panorama1',
        'panorama2',
        'panorama3',
    ];
}
