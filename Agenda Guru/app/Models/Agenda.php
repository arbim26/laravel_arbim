<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    protected $table = 'agenda';
    protected $fillable = ['tanggal','nama_guru','mata_pelajaran','materi_pelajaran','jam_pelajaran','siswa_absen','kelas','jenis_pembelajaran','link','dokumentasi','keterangan'];
}
