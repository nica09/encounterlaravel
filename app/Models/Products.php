<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $primaryKey = "id_product";
    protected $table = 'product_tbl';
    protected $fillable = [
    	'id_product',
        'nama_produk',
        'quantity_produk',
        'harga_produk',
        'deskripsi_produk',
        'img_product',
    ];
}
