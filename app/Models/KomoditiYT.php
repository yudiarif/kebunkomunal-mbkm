<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomoditiYT extends Model
{
    use HasFactory;
    
    protected $table = 'komoditi_youtube';
    protected $fillable = ['user_id', 'komoditi_id', 'link_youtube'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function komoditi()
    {
        return $this->belongsTo(Komoditi::class);
    }
}
