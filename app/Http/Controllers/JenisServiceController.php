<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisService;
use Illuminate\Support\Facades\Storage;

class JenisServiceController extends Controller
{
    public function index()
    {
        $jenis_service = JenisService::orderBy('id_jenis_service', 'asc')->paginate(5);
        return view('jenis_service.index', compact('jenis_service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenis_service.create');
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
            'foto' => 'required',
            'kategori' => 'required',
            'harga_service' => 'required',
            'deskripsi' => 'required',
        ]);

        $foto = $request->file('foto')->store('images', 'public');

        JenisService::create([
            'id_jenis_service' => $request->id_jenis_service,
            'foto' => $foto,
            'kategori' => $request->kategori,
            'harga_service' => $request->harga_service,
            'deskripsi' => $request->deskripsi,
        ]);

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('jenis_service.index')
            ->with('success', 'Jenis Service Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_jenis_service)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id_jenis_service
        $JenisService = JenisService::find($id_jenis_service);
        return view('jenis_service.detail', compact('JenisService'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_jenis_service)
    {
        //menampilkan detail data dengan menemukan berdasarkan id_product untuk diedit
        $JenisService = JenisService::find($id_jenis_service);
        return view('jenis_service.edit', compact('JenisService'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_jenis_service)
    {
        $jenis_service = JenisService::findOrFail($id_jenis_service);
        $request->validate([
            'foto' => 'required',
            'kategori' => 'required',
            'harga_service' => 'required',
            'deskripsi' => 'required',
        ]);

        $foto = $request->file('foto')->store('images', 'public');

        $jenis_service->update([
            'foto' => $foto,
            'kategori' => $request->kategori,
            'harga_service' => $request->harga_service,
            'deskripsi' => $request->deskripsi,
        ]);
        $jenis_service->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('jenis_service.index')
            ->with('success', 'Jenis Service Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_jenis_service)
    {
        //fungsi eloquent untuk menghapus data
        JenisService::find($id_jenis_service)->delete();
        return redirect()->route('jenis_service.index')
            ->with('success', 'Jenis Service Berhasil Dihapus');
    }
}
