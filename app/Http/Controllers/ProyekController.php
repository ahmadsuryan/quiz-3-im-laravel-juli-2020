<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use DB;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyek = DB::table('proyek')->get();
        $data['judul']='Daftar Proyek';
        $data['proyek']=$proyek;
        return view('proyek.index',$data);
    }

    public function erd()
    {
        
        $data['judul']='ERD Proyek';
        
        return view('proyek.erd',$data);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['judul']='Buat Proyek Baru';
        return view('proyek.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nama_proyek" => 'required|unique:proyek',
            "deskripsi_proyek" => 'required'
        ]);
        $query = DB::table('proyek')->insert([
            "nama_proyek" => $request['nama_proyek'],
            "deskripsi_proyek" => $request['deskripsi_proyek'],
            "tangal_mulai" => date('Y-m-d')
        ]);

        return redirect('/proyek');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyek = DB::table('proyek')->where('id', $id)->first();
        $data['judul']='Detail Proyek';
        $data['proyek']=$proyek;
        return view('proyek.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyek = DB::table('proyek')->where('id', $id)->first();
        $data['judul']='Ubah proyek';
        $data['proyek']=$proyek;
        return view('proyek.edit',$data);
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
        $request->validate([
            "judul" => ['required',Rule::unique('proyek')->ignore($id)],
            "isi" => 'required'
        ]);
        $affected = DB::table('proyek')
              ->where('id', $id)
              ->update([
                  'judul' => $request['judul'],
                  'isi' => $request['isi'],
                  "tanggal_diperbaharui" => date('Y-m-d')
                ]);
        return redirect('/proyek')->with('sukses','berhasil update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('proyek')->where('id', $id)->delete();
        return redirect('/proyek')->with('sukses','berhasil delete');
    }
}
