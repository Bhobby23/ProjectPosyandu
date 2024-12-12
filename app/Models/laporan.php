<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = ['nik', 'id_kader', 'tanggal'];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'nik');
    }

    public function kader()
    {
        return $this->belongsTo(Kader::class, 'id_kader');
    }
}