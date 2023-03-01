<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Returns extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pinjam';
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

    public function book() {
        return $this->belongsTo(Book::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function borrow() {
        return $this->belongsTo(Borrow::class);
    }
}
