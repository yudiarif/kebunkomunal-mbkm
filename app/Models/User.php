<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';
    protected $fillable = [
        'nama',
        'username',
        'no_hp',
        'password',
        'role_id',
        'foto',
        'signed_url',
    ];

    protected $hidden = [
        'password',
    ];

    public function Role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
    public function KomoditiInfoJagung()
    {
    return $this->hasMany(KomoditiInfoJagung::class);
    }
    public function KomoditiInfoCabai()
     {
    return $this->hasMany(KomoditiInfoCabai::class);
    }
    public function KomoditiInfoNIla()
     {
    return $this->hasMany(KomoditiInfoNila::class);
    }
    public function KomoditiInfoAyam()
     {
    return $this->hasMany(KomoditiInfoAyam::class);
    }
}
