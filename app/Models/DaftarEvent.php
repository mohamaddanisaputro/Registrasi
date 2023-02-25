<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarEvent extends Model
{
    use HasFactory;
    protected $table = "tbl_event";
    protected $primary_key = "id_event";
    protected $fillable = [
        'nama_event',
        'tgl_daftar',
        'tgl_maks_daftar',
        'informasi'
    ];
    public $timestamps = false;
}
