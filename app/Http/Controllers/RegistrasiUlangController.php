<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistrasiUlang;
use App\Models\DaftarEvent;
use App\Models\KategoriKelas;

class RegistrasiUlangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //melakukan dekrip untuk melakukan registrasi ulang 
        $no_bib = $request->get('no_bib');
        $data = null;
        if ($no_bib) {
            $no_bib = $this->decrypt($no_bib);
            $data = RegistrasiUlang::where('no_bib', $no_bib)->first();
            if (!$data) {
                session()->flash('error', 'Nomor registrasi tidak ditemukan');
            } else {
                if ($data->registrasi_ulang == 1) {
                    session()->flash('error', 'Nomor registrasi tersebut sudah diregistrasi ulang');
                    $data = null;
                }
            }
        }

        $data = [
            'event' => DaftarEvent::all(),
            'kategori' => KategoriKelas::all(),
            'data' => $data
        ];
        return view('registrasiulang.registrasi_ulang', $data);
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
        //Jika data sesuai data otamatis di dekrip begitu juga sebaliknya
        $id = $request->post('id_pendaftaran_peserta');
        $peserta = RegistrasiUlang::where('id_pendaftaran_peserta', $id)->first();
        if (!$peserta) {
            session()->flash('error', 'Peserta Tidak Ditemukan');
            return redirect()->route('registrasiulang.index');
        }
        $data['registrasi_ulang'] = 1;

        RegistrasiUlang::where('id_pendaftaran_peserta', $id)->update($data);
        session()->flash('success', 'Peserta dengan No. BIB ' . $peserta['no_bib'] . ' Berhasil Diregistrasi Ulang');
        return redirect()->route('registrasiulang.index');
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
