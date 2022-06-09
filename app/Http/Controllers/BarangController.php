<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Jenis_Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $barang = Barang::paginate(3);
        return view('barang.index')
            ->with('title', 'Barang')
            ->with('barang', $barang);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
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
            'id' => 'required',
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:1024',
            'harga' => 'required',
            'deskripsi' => 'required',
        ]);

        $barang = new Barang;
        $barang->id = $request->get('id');
        $barang->nama_barang = $request->get('nama_barang');
        $barang->jenis_barang = $request->get('jenis_barang');
        $barang->gambar = $request->file('gambar')->store('images', 'public');
        $barang->harga = $request->get('harga');
        $barang->deskripsi = $request->get('deskripsi');

        $jenis_barang = new Jenis_Barang;
        $jenis_barang->id = $request->get('jenis_barang');

        //fungsi eloquent untuk menambahkan data dengan relasi belongsTo
        $barang->kelas()->associate($jenis_barang);
        $barang->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('barang.index')
            ->with('success', 'Barang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Menampilkan detail data dengan menemukan/berdasarkan ID Barang
        $barang = Barang::find($id);
        return view('barang.detail', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('barang.edit', compact('barang'));
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
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:1024',
            'harga' => 'required',
            'deskripsi' => 'required',
        ]);

        $barang = Barang::with('jenis_barang')->where('id', $id)->first();
        $barang->id = $request->get('id');
        $barang->nama_barang = $request->get('nama_barang');
        $barang->jenis_barang = $request->get('jenis_barang');
        if ($barang->gambar && file_exists(storage_path('app/public/' . $barang->gambar))) {
            \Storage::delete('public/' . $barang->gambar);
        }
        $image_name = $request->file('gambar')->store('images', 'public');
        $barang->gambar = $image_name;
        $barang->harga = $request->get('harga');
        $barang->deskripsi = $request->get('deskripsi');

        $jenis_barang = new Jenis_Barang;
        $jenis_barang->id = $request->get('Jenis_Barang');

        //fungsi eloquent untuk mengupdate data dengan relasi belongsTo
        $barang->jenis_barang()->associate($jenis_barang);
        $barang->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('barang.index')
            ->with('success', 'Barang Berhasil Diupdate');
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
        Barang::find($id)->delete();
        return redirect()->route('barang.index')
            ->with('success', 'Barang Berhasil Dihapus');
    }
}
