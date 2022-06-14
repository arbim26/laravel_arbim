<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mapel;
use App\Models\Guru;
use App\Models\Kelas;

class Agenda extends Model
{
    use HasFactory;
    protected $table = 'agenda';
    protected $guarded = [''];

    public function guru()
    {
        return $this->belongsTo(guru::class);
    }

    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    }

    public function mapel()
    {
        return $this->belongsTo(mapel::class);
    }


}
