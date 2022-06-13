<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pegawai = Pegawai::paginate(3);
        return view('pegawai.index')
        ->with('title','Pegawai')
        ->with('pegawai',$pegawai);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.create');
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
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'jabatan' => 'required'
        ]);

        Pegawai::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('pegawai.index')
            ->with('success', 'Pegawai Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Menampilkan detail data dengan menemukan/berdasarkan ID Pegawai
        $Pegawai = Pegawai::find($id);
        return view('pegawai.detail', compact('Pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Pegawai = Pegawai::find($id);
        return view('pegawai.edit', compact('Pegawai'));
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
        //melakukan validasi data
        $request->validate([
            'id' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'jabatan' => 'required'
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita
        Pegawai::find($id)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('pegawai.index')
            ->with('success','Pegawai Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data
        Pegawai::find($id)->delete();
        return redirect()->route('pegawai.index')
            ->with('success', 'Pegawai Berhasil Dihapus');
    }
}
