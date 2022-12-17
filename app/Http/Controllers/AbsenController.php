<?php

namespace App\Http\Controllers;
use App\Models\absen;

use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function create(Request $request){
        $absen=new absen();
        $absen->nisn=$request->nisn;
        $absen->tanggal=$request->tanggal;
        $absen->keterangan=$request->keterangan;
        $absen->alasan=$request->alasan;
        $absen->save();
        return response()->json($absen, 200);
        return "Data Tersimpan";
    }

    public function detail($nisn){
        $absen= absen::find($nisn);
        return $absen;
    }

    public function index(){
        $absen= absen::get();
        return $absen;
    }
}
