<?php

namespace App\Http\Controllers;

use App\Models\JenisService;
use App\Models\Service;
use App\Models\User;
use App\Models\ServiceDetails;
use Alert;
use App\Http\Middleware\Authenticate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Author;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function indexJenisService($id_jenis_service)
    {
    	$jenis_service = JenisService::where('id_jenis_service', $id_jenis_service)->first();

    	return view('pesan.index', compact('jenis_service'));
    }
    public function pesan(Request $request, $id_jenis_service)
    {	
    	$jenis_service= JenisService::where('id_jenis_service', $id_jenis_service)->first();
    	$tanggal = Carbon::now();

    	
    	if($request->jumlah_pesan > $jenis_service->harga_service)
    	{
    		return redirect('pesan/'.$id_jenis_service);
    	}

    	//cek validasi
    	$cek_service = Service::where('user_id', Auth::user()->id)->where('status',0)->first();
    	//simpan ke database service
    	if(empty($cek_service))
    	{
    		$service = new Service();
	    	$service->user_id = Auth::user()->id;
	    	$service->tanggal = $tanggal;
	    	$service->status = 0;
	    	$service->jumlah_harga = 0;
	    	$service->save();
    	}
    	

    	//simpan ke database service detail
    	$service_baru = Service::where('user_id', Auth::user()->id)->where('status',0)->first();

    	//cek service detail
    	$cek_service_detail = ServiceDetails::where('id_jenis_service', $jenis_service->id_jenis_service)->where('service_id', $service_baru->id)->first();
    	if(empty($cek_service_detail))
    	{
    		$service_detail = new ServiceDetails;
	    	$service_detail->id_jenis_service = $jenis_service->id_jenis_service;
	    	$service_detail->service_id = $service_baru->id;
	    	$service_detail->jumlah = $request->jumlah_service;
	    	$service_detail->jumlah_harga = $jenis_service->harga_jual*$request->jumlah_service;
	    	$service_detail->save();
    	}else 
    	{
    		$service_detail = ServiceDetails::where('id_jenis_service', $jenis_service->id_jenis_service)->where('service_id', $service_baru->id)->first();

    		$service_detail->jumlah = $service_detail->jumlah+$request->jumlah_service;

    		//harga sekarang
    		$harga_service_detail_baru = $jenis_service->harga_jual*$request->jumlah_service;
	    	$service_detail->jumlah_harga = $service_detail->jumlah_harga+$harga_service_detail_baru;
	    	$service_detail->update();
    	}

    	//jumlah total
    	$service = Service::where('user_id', Auth::user()->id)->where('status',0)->first();
    	$service->jumlah_harga = $service->jumlah_harga+$jenis_service->harga_jual*$request->jumlah_service;
    	$service->update();
        
        Alert()->success('Layanan Service Motor Sukses Masuk Keranjang','Success');
    	return redirect('check-out');

    }

    public function check_out()
    {
        $service = Service::where('user_id', Auth::user()->id)->where('status',0)->first();
 	    $service_details = [];
        if(!empty($service))
        {
            $service_details = ServiceDetails::where('service_id', $service->id)->get();

        }
        
        return view('pesan.check_out', compact('service', 'service_details'));
    }

    public function delete($id)
    {
        $service_detail = ServiceDetails::where('id', $id)->first();

        $service = Service::where('id', $service_detail->service_id)->first();
        $service->jumlah_harga = $service->jumlah_harga-$service_detail->jumlah_harga;
        $service->update();


        $service_detail->delete();

        Alert()->success('Layanan Service Motor Sukses Dihapus','Success');
        return redirect('check-out');
    }

    public function konfirmasi()
    {
        $user = User::where('id', Auth::user()->id)->first();

        if(empty($user->alamat))
        {
            alert()->error('Layanan Service Motor Sukses Dihapus','Error');
            return redirect('profile');
        }

        if(empty($user->nohp))
        {
          alert()->error('Identitasi Harap dilengkapi', 'Error');
            return redirect('profile');
        }

        $service = Service::where('user_id', Auth::user()->id)->where('status',0)->first();
        $service_id = $service->id;
        $service->status = 1;
        $service->update();

        $service_details = ServiceDetails::where('service_id', $service_id)->get();
        foreach ($service_details as $service_detail) {
            $jenis_service = JenisService::where('id_jenis_service', $service_detail->id_jenis_service)->first();
            $jenis_service->harga_service = $jenis_service->harga_service-$service_detail->jumlah;
            $jenis_service->update();
        }

        alert()->success('Layanan Service Motor Sukses Check Out Silahkan Lanjutkan Proses Pembayaran', 'Success');
        return redirect('history/');

    }

    // Untuk halaman admin

    public function index(Request $request)
    {
        //fungsi eloquent menampilkan data menggunakan paginaon
        $jenis_service = JenisService::orderBy('id_jenis_service', 'asc')->paginate(5);
        return view('order.tampilanawal', compact('jenis_service'));

    }
    public function create()
    {
        return view('jenis_service.create');
    }
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([ 'foto' => 'required', 'kategori' => 'required', 'harga_service' => 'required',
        'deskripsi' => 'required', 
        ]);

        //fungsi eloquent untuk menambah data 
        JenisService::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama 
        return redirect()->route('jenis_service.index')
        ->with('success', 'Jenis_Service Berhasil Ditambahkan');
    }
    public function show($id_jenis_service)
    {
        //menampilkan detail data dengan menemukan/berdasarkan ... Jenis Service
        $jenis_service = JenisService::find($id_jenis_service);
        return view('pesan.index', compact('jenis_service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_jenis_service)
    {
        //menampilkan detail data dengan menemukan berdasarkan id jenis_service untuk diedit
        $jenis_service = JenisService::find($id_jenis_service);
        return view('jenis_service.edit', compact('jenis_service'));


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
        //melakukan validasi data
        $request->validate([ 'foto' => 'required', 'kategori' => 'required', 'harga_service' => 'required',
        'deskripsi' => 'required', 
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita 
        JenisService::find($id_jenis_service)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama 
        return redirect()->route('jenis_service.index')
        ->with('success', 'Jenis Service Berhasil Diupdate');


    }

    public function destroy($id_jenis_service)
    {
        //fungsi eloquent untuk menghapus data 
        JenisService::find($id_jenis_service)->delete();
        return redirect()->route('jenis_service.index')
        -> with('success', 'Jenis Service Berhasil Dihapus');

    }

}
