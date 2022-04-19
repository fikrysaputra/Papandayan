<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class BeliController extends Controller
{
    public function index()
    {
	    return view('beli');
    }
    public function store(Request $request)
    {
    $request->session()->put('jumlah','1');
    echo $request->session()->get('jumlah');

	DB::table('pesanan')->insert([
		'id' => $request->id,
		'name' => $request->name,
		'pesanan' => $request->pesanan,
		'jumlah' => $request->jumlah,
        'hari' => $request ->hari
	]);
	return redirect('/berhasilpesan');
    }

    public function berhasilpesan()
    {
	    return view('berhasilpesan');
    }
	
    public function deletesession(Request $request){
        $request->session()->forget('nama');
    }

}