<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;
    protected $primaryKey = "id_member";
    protected $table = 'member_tbl';
    protected $fillable = [
        'id_member',
        'nama_member',
        'gambar_member',
        'no_member'
    ];
}
