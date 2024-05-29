<?php

namespace App\Http\Controllers\Prakerja;

use App\Http\Controllers\Controller;
use App\Models\prakerja;
use App\Http\Requests\PrakerjaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\facades\file;


class PrakerjaController extends Controller
{
    public function index(){
        $data['prakerja'] = prakerja::get();
        return view('prakerja/prakerja',$data);
    }

    public function tambah(){
        return view('tambah/tambah');
    }

    public function save(PrakerjaRequest $r){
        if($r->validated()){
            $foto_user = $r->foto_user->getClientOriginalName();
            $r->foto_user->move('foto_user/',$foto_user);

            prakerja::create([
                'nama' => $r->nama,
                'email' => $r->email,
                'telepon' => $r->telepon,
                'alamat' => $r->alamat,
                'foto_user' => $foto_user
            ]);
       return redirect('prakerja')->with('pesan','input data berhasil');
        }
       
    }

}
