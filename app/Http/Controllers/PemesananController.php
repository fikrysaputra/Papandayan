<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        $pesanan = DB::table('pesanan')->get();
        return view('pemesanan',['pesanan' => $pesanan]);
    }

    public function hapus($id)
    {
	DB::table('pesanan')->where('id',$id)->delete();
	return redirect('/pemesanan');
    }
}
