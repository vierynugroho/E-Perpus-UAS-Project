<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;
    protected $table = 'pinjam';

    protected $fillable = [
        'id_buku',
        'id_user',
        'status_pinjam',
        'created_at',
        'updated_at',
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
