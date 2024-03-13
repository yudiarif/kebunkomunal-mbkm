<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoPerkembangan extends Model
{
    use HasFactory;
    protected $table = 'foto_perkembangan';

    protected $fillable = [
        'user_id',
        'komoditi_id',
        'foto1',
        'foto2',
        'foto3',
    ];
}
