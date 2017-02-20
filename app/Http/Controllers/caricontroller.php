<?php

namespace App\Http\Controllers;
use App\pegawaiModel;
use Request;

class caricontroller extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function search(Request $request)
    {

        $query = $request->get('q');
        $hasil = pegawaiModel::where('server', 'LIKE', '%' . $query . '%')
        ->orwhere('pegawai.nip','LIKE', '%' . $query . '%')
        ->orwhere('pegawai.email','LIKE', '%' . $query . '%')
        ->orwhere('pegawai.golongan_id','LIKE', '%' . $query . '%')
                        ->paginate(10);
        return view('pegawai.cari', compact(''query','hasil'));
    }
 
    //
}
