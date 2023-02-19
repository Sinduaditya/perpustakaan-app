<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'buku';

    protected $fillable = [
        'kode_buku',
        'judul_buku',
        'jumlah',
        'penggarang',
        'penerbit',
        'status_buku',
        'tahun_terbit',
        'sinopsis_buku',
        'kategori',
        'cover_buku'
    ];

}