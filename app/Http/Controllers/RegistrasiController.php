<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registrasi;
use App\Models\DaftarEvent;
use App\Models\KategoriKelas;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class RegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            //meamanggil data yang ada di daftarevent,kategorikelas dan registrasi
            'daftarevent' => DaftarEvent::all(),
            'kategorikelas' => KategoriKelas::all(),
            'registrasi' => Registrasi::all()
        ];
        return view('registrasi/registrasi', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $event = Event::where('tgl_daftar', '<=', date('Y-m-d'))->where('tgl_maks_daftar', '>=', date('Y-m-d'))->get();
        $kategori = KategoriEvent::all();

        $data = [
            
            'event' => $event,
            'kategori' => $kategori
        ];
        
        return view('registrasi/registrasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'id_event' => 'required',
            'id_kategori_event' => 'required',
            'nik' => 'required',
            'nama'=> 'required',
            'nm_komunitas'=> 'required',
            'tempat_lahir'=> 'required',
            'tanggal_lahir'=> 'required',
            'no_telp' => 'required'
            
        ]);

        //mengambil data model kategorikelas dan registrasi
        $kategori = KategoriKelas::where('id_kategori_event', $data['id_kategori_event'])->first();
        $no_urut = Registrasi::where('id_event', $data['id_event'])->where('id_kategori_event', $data['id_kategori_event'])->orderBy('no_bib', 'desc')->first();
        if ($no_urut) {
            $no_urut = $no_urut->no_bib;
            $no_urut = (int) substr($no_urut, 1, 3);
            $no_urut += 1;
        } else {
            $no_urut = 1;
        }
        $no_bib = $kategori->kode . str_pad($no_urut, 3, "0", STR_PAD_LEFT);
        $data['no_bib'] = $no_bib;
        $data['tgl_daftar'] = date('Y-m-d');
        $data = Registrasi::create($data);
        
        //generate QR code yang telah di enkripsi menggunakan aes 256 setelah registrasi
        $bib_encrypt = $this->encrypt($no_bib);
        $qrcode = QrCode::size(200)->errorCorrection('H')->generate($bib_encrypt);

        $data = [
            'data' => $data,
            'qrcode' => $qrcode
        ];
        
        return view('cetakqr', $data);
    }

    public function cariData(Request $request)
    {
        $data = $request->validate([
            'id_event' => 'required',
            'id_kategori_event' => 'required',
            'nik' => 'required'
        ]);

        $dataRegistrasi = Registrasi::where('id_kategori_event', $data['id_kategori_event'])->where('id_event', $data['id_event'])->where('nik', $data['nik'])->first();
        $qrcode = "";
        
        if ($dataRegistrasi) {
            //generate QR code yang telah di enkripsi menggunakan aes 256 setelah registrasi
            $bib_encrypt = $this->encrypt($dataRegistrasi['no_bib']);
            $qrcode = QrCode::size(200)->errorCorrection('H')->generate($bib_encrypt);
        }

        $data = [
            'data' => $dataRegistrasi,
            'qrcode' => $qrcode
        ];
        
        return view('cetakqr', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
