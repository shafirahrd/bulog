<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    protected $fillable = [
        'nama', 'deskripsi', 'harga', 'gambar',
    ];
    public $incrementing = true;
    public $timestamp = true;
}
