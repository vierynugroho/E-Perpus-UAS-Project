<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Literation extends Model
{
    use HasFactory;

    protected $table = 'literations';

    protected $fillable = [
        'judul',
        'id_buku',
        'id_user',
        'ringkasan',
        'halaman',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'nik');
    }
    public function book()
    {
        return $this->belongsTo(Book::class, 'id_buku', 'id');
    }
}
