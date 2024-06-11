<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemupukan extends Model
{
    use HasFactory;

    protected $table = 'pemupukan';
    protected $fillable = ['user_id', 'komoditi_id', 'pupuk_id', 'tanggal_pupuk'];
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