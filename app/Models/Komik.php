<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komik extends Model
{
    use HasFactory;
    protected $table = 'komiks';
    protected $fillable = ['nama', 'genre', 'rating', 'image_path', 'pdf_path'];
}
