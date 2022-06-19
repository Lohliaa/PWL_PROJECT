<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisService;
use App\Models\Service;
use App\Models\User;
use App\Models\ServiceDetails;
use Illuminate\Support\Facades\Auth;
use Alert;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexhistory()
    {
    	$services = Service::where('user_id', Auth::user()->id)->where('status', '!=',0)->get();

    	return view('history.index', compact('services'));
    }

    public function detail($id)
    {
    $service = Service::where('id', $id)->first();
    $service_details = ServiceDetails::where('service_id', $service->id)->get();

    return view('history.detail', compact('service','service_details'));
    }

    //////////////////////////////////////Halaman admin//////////////////////////////////////////

    public function index(Request $request)
    {
        //fungsi eloquent menampilkan data menggunakan paginaon
        $service = Service::orderBy('id', 'asc')->paginate(5);
        return view('admin2.index', compact('service'));

    }
    public function create()
    {
        return view('admin2.create');
    }
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([ 'tanggal' => 'required', 'status' => 'required', 'jumlah_harga' => 'required'
        ]);
        //fungsi eloquent untuk menambah data 
        Service::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama 
        return redirect()->route('admin2.index')
        ->with('success', 'jenis service Berhasil Ditambahkan');
    }
    public function show($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan ... jenis_service
        $service = Service::find($id);
        return view('admin2.detail', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim product untuk diedit
        $service = Service::find($id);
        return view('admin2.edit', compact('service'));


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
        $request->validate([ 'tanggal' => 'required', 'status' => 'required', 'jumlah_harga' => 'required'
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita 
        Service::find($id)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama 
        return redirect()->route('admin2.index')
        ->with('success', 'jenis service Berhasil Diupdate');


    }

    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data 
        Service::find($id)->delete();
        return redirect()->route('admin2.index')
        -> with('success', 'jenis service Berhasil Dihapus');

    }
}
