<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kader extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_kader';
    protected $fillable = ['nama'];

    public function laporan()
    {
        return $this->hasMany(Laporan::class, 'id_kader');
    }
}