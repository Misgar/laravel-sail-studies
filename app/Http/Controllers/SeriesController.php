<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SeriesController extends Controller
{
        public function index(Request $request)
    {


        $series = [
            'Punisher',
            'Lost',
            'Game of Thrones',
            'Breaking Bad'
        ];

//        return view('series.index',compact('series'));

            return view('series.index')->with('series',$series);
    }


    public function create()
    {
        return view ('series.create');
    }
}
