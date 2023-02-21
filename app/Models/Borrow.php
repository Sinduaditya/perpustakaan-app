<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory;

    protected $table = 'pinjaman';
    protected $fillable = [
        'no_user',
        'username',
        'kode_buku',
        'judul_buku',
        'jumlah',
        'tgl_pinjam',
        'tgl_kembali',
        'status',
    ];
}