<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\Menu;
use App\Models\Service;
use App\Models\User;
use App\Models\ServiceDetails;
use Illuminate\Support\Facades\Auth;
use Alert;
use App\Http\Middleware\Authenticate;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use PharIo\Manifest\Author;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$user = User::where('id', Auth::user()->id)->first();

    	return view('profile.index', compact('user'));
    }

    public function update(Request $request)
    {
    	 $this->validate($request, [
            'password'  => 'confirmed']);

    	$user = User::where('id', Auth::user()->id)->first();
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->nohp = $request->nohp;
    	$user->alamat = $request->alamat;
    	if(!empty($request->password))
    	{
    		$user->password = Hash::make($request->password);
    	}
    	
    	$user->update();

    	// Alert()->success('User Sukses diupdate', 'Success');
    	return redirect('profile');
    }
}
