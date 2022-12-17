<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function create(Request $request){
        $rating=new Rating();
        $rating->nisn=$request->nisn;
        $rating->kesan=$request->kesan;
        $rating->pesan=$request->pesan;
        $rating->rating=$request->rating;
        $rating->save();

        return "Data Rating Tempat PKL Tersimpan";
    }
}
