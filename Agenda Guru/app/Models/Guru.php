<?php

namespace App\Models;

use App\Models\Agenda;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Guru extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable;

    use HasFactory;
    protected $table = 'guru';
    protected $fillable = ['email','password','nama_guru','nik','mata_pelajaran'];

    public function agenda()
    {
        return $this->hasOne(Agenda::class);
    }
}
