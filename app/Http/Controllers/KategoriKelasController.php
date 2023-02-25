<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriKelas;
class KategoriKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[
            'kategorikelas' => KategoriKelas::all()
        ];
        return view('kategorikelas/kategori_kelas',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('kategorikelas/create_kategori_kelas');
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
            'kode' => 'required',
            'nama_kategori'=> 'required',
            'min_umur'=> 'required',
            'max_umur'=> 'required'
        ]);
        KategoriKelas::create($data);
        return redirect()->route('kategorikelas.index');
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
        $data=[
                'data' => KategoriKelas::firstwhere('id_kategori_event',$id)
        ];
        return view ('kategorikelas/edit_kategori_kelas',$data);
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
            'kode' => 'required',
            'nama_kategori'=> 'required',
            'min_umur'=> 'required',
            'max_umur'=> 'required'
        ]);
        KategoriKelas::where('id_kategori_event',$id)->update($data);
        return redirect()->route('kategorikelas.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        KategoriKelas::where('id_kategori_event', $id)->delete();
        return redirect()->route('kategorikelas.index');
    }
}
