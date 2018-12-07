<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeri';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'gambar',
    ];
    public $incrementing = true;
    public $timestamp = true;
}
