<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaksin extends Model
{
    use HasFactory;

    protected $fillable = ['nama','nik','no_telp','email', 'tgl_lahir', 'riwayat_penyakit'];
}
