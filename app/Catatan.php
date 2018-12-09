<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catatan extends Model
{
    protected $table = 'catatan';
    protected $primaryKey = 'id_catatan';
    protected $fillable = [
        'id_rpk','catatan'
    ];
    public $incrementing = true;
    public $timestamp = true;
}
