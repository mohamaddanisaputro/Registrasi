<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriKelas extends Model
{
    use HasFactory;

    
    protected $table = "tbl_kategori_event";
    protected $primary_key = "id_kategori_event";
    protected $fillable = [
        'kode',
        'nama_kategori',
        'min_umur',
        'max_umur'
    
    ];
    public $timestamps = false;
}
