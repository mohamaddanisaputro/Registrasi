<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarEvent;

class DaftarEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'daftarevent' => DaftarEvent::all()
        ];
        return view('daftarevent/daftar_event', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftarevent/create_daftar_event');
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
            'nama_event' => 'required',
            'tgl_daftar' => 'required',
            'tgl_maks_daftar' => 'required',
            'informasi' => 'required'
        ]);
        

        DaftarEvent::create($data);
        return redirect()->route('daftarevent.index');
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
        $data = [
            'data' => DaftarEvent::firstWhere('id_event', $id)
        ];
        return view('daftarevent/edit_daftar_event', $data);
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
            'nama_event' => 'required',
            'tgl_daftar' => 'required',
            'tgl_maks_daftar' => 'required',
            'informasi' => 'required'
        ]);

        DaftarEvent::where('id_event', $id)->update($data);
        return redirect()->route('daftarevent.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DaftarEvent::where('id_event', $id)->delete();
        return redirect()->route('daftarevent.index');
    }
}
