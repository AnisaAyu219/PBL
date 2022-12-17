<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurnal;
use App\Http\Requests\ImageStoreRequest;

class JurnalController extends Controller
{
    public function create(Request $request){
        $jurnal=new jurnal();
        $jurnal->nisn=$request->nisn;
        $jurnal->tanggal=$request->tanggal;
        $jurnal->kegiatan=$request->kegiatan;
        $jurnal->dokumentasi=$request->file('dokumentasi')->store('dokumentasi');
        $jurnal->save();

        return "Data Jurnal Tersimpan";
    }

    public function update(Request $request, $id){

        $jurnal= jurnal::find($id);
        $jurnal->nisn=$request->nisn;
        $jurnal->tanggal=$request->tanggal;
        $jurnal->kegiatan=$request->kegiatan;
        $jurnal->dokumentasi=$request->dokumentasi;
        $jurnal->save();

        return "Data Jurnal Terupdate";
    }

    public function delete($id){
        $jurnal= jurnal::find($id);
        $jurnal->delete();

        return "Data Terhapus";
    }

    public function detail($id){
        $jurnal= jurnal::find($id);
        return $jurnal;
    }

    public function index(){
        $jurnal= jurnal::get();

        //print_r($jurnal);
        return $jurnal;
        // return response()->json([
        //     'nama_jurnal' => $jurnal['nama_jurnal']
        // ,201]);
    }

}
