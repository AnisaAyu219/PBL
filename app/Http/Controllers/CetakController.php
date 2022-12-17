<?php

namespace App\Http\Controllers;


use App\Models\Jurnal;
 
use PDF;
use Illuminate\Http\Request;

class CetakController extends Controller
{
    public function cetak_pdf()
    {
        $jurnal = Jurnal::all();
     
        $pdf = PDF::loadview('laporan_pdf',['jurnal'=>$jurnal]);
        return $pdf->stream();
    }
}
