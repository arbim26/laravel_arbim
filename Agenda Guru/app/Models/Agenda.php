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
    protected $fillable = ['tanggal','nama_guru','mata_pelajaran','materi_pelajaran','jam_pelajaran','siswa_absen','kelas','jenis_pembelajaran','link','dokumentasi','keterangan'];

    public function guru()
    {
        return $this->belongTo(guru::class);
    }

    public function kelas()
    {
        return $this->belongTo(kelas::class);
    }

    public function mapel()
    {
        return $this->belongTo(mapel::class);
    }


}
