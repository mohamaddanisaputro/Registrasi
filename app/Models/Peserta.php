<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;
    
    protected $table = "tbl_peserta";
    protected $primary_key = "id_peserta";
    protected $fillable = [
        'nik',
        'nama',
        'nm_komunitas',
        'tempat_lahir',
        'tanggal_lahir',
        'no_telp'
    ];
    public $timestamps = false;
}
