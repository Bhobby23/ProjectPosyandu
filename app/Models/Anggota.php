<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $primaryKey = 'nik';
    public $incrementing = false;
    protected $fillable = ['nik', 'nama', 'alamat'];

    public function laporan()
    {
        return $this->hasMany(Laporan::class, 'nik');
    }
}