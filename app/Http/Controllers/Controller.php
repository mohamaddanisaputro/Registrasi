<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $key;
    
    public function __construct()
    {
        // tentukan kunci yang akan di gunakan
        $this->key = "contohenkripsiyacontohenkripsiya";
    }
    
    public function encrypt($text)
    {
        // return $this->encrypter->encrypt($text);

        // Membuat vector inisialisasi (IV)
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));

        // Menjalankan proses enkripsi
        $ciphertext = openssl_encrypt($text, 'aes-256-cbc', $this->key, OPENSSL_RAW_DATA, $iv);

        // Menambahkan IV ke hasil enkripsi
        $ciphertext = $iv . $ciphertext;

        // Menampilkan hasil enkripsi dalam bentuk base64
        return base64_encode($ciphertext);
    }
    
    public function decrypt($text)
    {
        // return $this->encrypter->decrypt($text);

        // Decode data dari base64
        $ciphertext = base64_decode($text);

        // Mendapatkan panjang IV
        $ivlen = openssl_cipher_iv_length('aes-256-cbc');

        // Mendapatkan IV dari data yang dideskripsi
        $iv = substr($ciphertext, 0, $ivlen);

        // Mendapatkan data yang dideskripsi
        $ciphertext = substr($ciphertext, $ivlen);

        // Menjalankan proses deskripsi
        $plaintext = openssl_decrypt($ciphertext, 'aes-256-cbc', $this->key, OPENSSL_RAW_DATA, $iv);
        // Menampilkan hasil deskripsi
        return $plaintext;
    }
}
