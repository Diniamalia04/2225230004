<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dini extends Model
{
    use HasFactory;
    protected $table= 'dini';
    protected $fillable= ['penulis', 'judul', 'genre', 'cerita'];
}
