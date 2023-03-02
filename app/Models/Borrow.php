<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory;

    public $timestamps = false;


    protected $primaryKey = 'id_pinjam';
    protected $table = 'pinjaman';
    protected $fillable = [
        'tgl_pinjam',
        'duration',
        'jumlah',
        'status',
        'id_buku',
        'id_user',
        'denda',
    ];

    protected $casts = [
        'tgl_pinjam' => 'date',
    ];

    public function book() {
        return $this->belongsTo(Book::class, 'id_buku');
    }

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

}