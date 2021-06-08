<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sliderm extends Model
{
    use HasFactory;
    protected $primaryKey = "id_slider";
    protected $table = 'slider_tbl';
    protected $fillable = [
    	'id_slider',
        'gambar_slider',
        'judul_slider',
        'status_slider',
    ];
}
