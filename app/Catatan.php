<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catatan extends Model
{
    protected $table = 'catatan';
    protected $primaryKey = 'id_catatan';
    protected $fillable = [
        'tanggal_catatan', 'catatan',
    ];
    public $incrementing = true;
    public $timestamp = true;
}
