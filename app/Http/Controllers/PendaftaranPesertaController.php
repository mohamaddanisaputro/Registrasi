<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranPeserta;
use App\Models\DaftarEvent;
use App\Models\KategoriKelas;
use App\Models\Peserta;
class PendaftaranPesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   

        //fungsi cari 
        $cari = $request->get('cari');
        if ($cari) {
            $pendaftaranpeserta = PendaftaranPeserta::where('nama', 'LIKE', '%' . $cari . '%')
                ->orWhere('no_bib', 'LIKE', '%' . $cari . '%')
                ->get();
        } else {
            $pendaftaranpeserta = PendaftaranPeserta::all();
        }
        return view ('pendaftaranpeserta.pendaftaran_peserta',compact('pendaftaranpeserta')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peserta = Peserta::all();
        $event = DaftarEvent::where('tgl_daftar', '<=', date('Y-m-d'))->where('tgl_maks_daftar', '>=', date('Y-m-d'))->get();
        $kategori = KategoriKelas::all();

        $data = [
            'peserta' => $peserta,
            'event' => $event,
            'kategori' => $kategori
            
        ];
        return view('pendaftaranpeserta.create_pendaftaran_peserta', $data);
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
            // 'tgl_daftar' => 'required'
        ]);
        $data['tgl_daftar'] = date('Y-m-d');

        $kategori = KategoriKelas::where('id_kategori_event', $data['id_kategori_event'])->first();
        $no_urut = PendaftaranPeserta::where('id_event', $data['id_event'])->where('id_kategori_event', $data['id_kategori_event'])->orderBy('no_bib', 'desc')->first();
        if ($no_urut) {
            $no_urut = $no_urut->no_bib;
            $no_urut = (int) substr($no_urut, 1, 3);
            $no_urut += 1;
        } else {
            $no_urut = 1;
        }
        $data['no_bib'] = $kategori->kode . str_pad($no_urut, 3, "0", STR_PAD_LEFT);

        PendaftaranPeserta::create($data);
        return redirect()->route('pendaftaranpeserta.index');
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
        
        $peserta = Peserta::all();
        $event = DaftarEvent::all();
        $kategori = KategoriKelas::all();

        $data = [
            'peserta' => $peserta,
            'event' => $event,
            'kategori' => $kategori,
            'data' => PendaftaranPeserta::firstWhere('id_pendaftaran_peserta', $id)
        ];
        return view('pendaftaranpeserta/edit_pendaftaran_peserta', $data);
        
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

        PendaftaranPeserta::where('id_pendaftaran_peserta', $id)->update($data);
        return redirect()->route('pendaftaranpeserta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PendaftaranPeserta::where('id_pendaftaran_peserta',$id)->delete();
        return redirect()->route('pendaftaranpeserta.index');
    }
    // public function cari(Request $request)
	// {
	// 	// menangkap data pencarian
	// 	$cari = $request->cari;
 
    // 		// mengambil data dari table pegawai sesuai pencarian data
	// 	$pegawai = DB::table('tbl_pendaftaran_peserta')
	// 	->where('nama','like',"%".$cari."%")
	// 	->paginate();
 
    // 		// mengirim data pegawai ke view index
	// 	return view('index',['pegawai' => $pegawai]);
 
	// }
}
