<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    use HasFactory;
    protected $table = "tbl_pendaftaran_peserta";
    protected $primary_key = "id_pendaftaran_peserta";
    protected $fillable = [
        'no_bib',
        'id_event',
        'nik',
        'nama',
        'nm_komunitas',
        'tempat_lahir',
        'tanggal_lahir',
        'no_telp',
        'id_kategori_event',
        'tgl_daftar'
        
    ];
    
    public function daftarevent()
    {
        return $this->belongsTo(DaftarEvent::class, 'id_event', 'id_event');
    }
    public function kategorikelas()
    {
        return $this->belongsTo(KategoriKelas::class, 'id_kategori_event', 'id_kategori_event');
    }
    
    public $timestamps = false;
}
