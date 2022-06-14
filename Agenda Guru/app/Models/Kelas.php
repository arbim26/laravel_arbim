<?php

namespace App\Models;

use App\Models\Agenda;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $fillable = ['nama_kelas','walas'];



    public function agenda()
    {
        return $this->hasOne(Agenda::class);
    }

    public function guru()
    {
        return $this->belongsTo(guru::class);
    }
}

