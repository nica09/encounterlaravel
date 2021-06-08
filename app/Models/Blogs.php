<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;
    protected $primaryKey = "id_blog";
    protected $table = 'blog_tbl';

    protected $fillable = [
        'id_blog',
        'judul_blog',
        'deskripsi_blog',
        'img_blog',
    ];
}
