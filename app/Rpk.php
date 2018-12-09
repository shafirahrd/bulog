<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rpk extends Model
{
    protected $table = 'rpk';
    protected $primaryKey = 'id_rpk';
    protected $fillable = [
        'ktp', 'npwp', 'pemilik_toko', 'nama_toko', 'alamat', 'kota_kabupaten', 'kode_pos', 'nomor_hp', 'email', 'foto_identitas', 'foto_izin_usaha', 'foto_npwp', 'status'
    ];
    public $incrementing = true;
    public $timestamp = true;
}
