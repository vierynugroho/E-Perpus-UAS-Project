<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;
    protected $table = 'pinjam';

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    public function book()
    {
        return $this->belongsTo(Book::class, 'id_buku', 'id');
    }
}
