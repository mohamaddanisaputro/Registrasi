<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registrasi;
use App\Models\DaftarEvent;
use App\Models\KategoriKelas;
class CariController extends Controller
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
            
            'registrasi' => Registrasi::all(),
            'daftarevent' =>DaftarEvent::all(),
            'kategorikelas' => KategoriKelas::all()
        ];
     
        return view('cari', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nama'=> 'required'
            
        ]);
        //mengambil data dari model Pendaftaran peserta dan registrasi
        $registrasi = PendaftaranPeserta::where('id_pendaftaran_peserta',$data['id_pendaftaran_peserta'])->first();
        $cari = Registrasi::where('nama', $data['nama'])->orderBy('cari', 'desc')->first();
       
        $data = [
            'data'=>$data,
            'cari'=>$cari
        ];

        return view('cari',$data);
        
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
