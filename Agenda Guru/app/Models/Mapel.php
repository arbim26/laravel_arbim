<?php

namespace App\Models;

use App\Models\Agenda;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mapel extends Model
{
    use HasFactory;
    protected $table = 'mapel';
    protected $fillable = ['mata_pelajaran'];

    public function agenda()
    {
        return $this->hasOne(Agenda::class);
    }

    public function guru()
    {
        return $this->belongsTo(guru::class);
    }

    public function mapel()
    {
        return $this->hasOne(guru::class);
    }
}
