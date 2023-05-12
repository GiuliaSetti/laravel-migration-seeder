<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use DateTime;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index(){

        $trains = Train::all();

        // $departure = new DateTime();

        // $trains = Train::where('departure', '>=', $departure->format('Y-m-d H:i:s'))->get();

        return view('home', compact('trains'));
    }
}
