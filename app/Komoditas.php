<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komoditas extends Model
{
    protected $table = 'komoditas';
    protected $primaryKey = 'id_laporan';
    protected $fillable = [
        'jumlah', 'total', 'tanggal', 'tipe'
    ];
    public $incrementing = true;
    public $timestamp = true;
}
