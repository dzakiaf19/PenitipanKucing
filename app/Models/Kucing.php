<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kucing extends Model
{
    use HasFactory;
    protected $table = 'kucings';
    protected $fillable = [
        'nama_kucing',
        'warna',
        'pemilik',
        'tanggal_titip',
        'tanggal_pulang',
        'gambar',
    ];
    public $timestamps = false;
}
