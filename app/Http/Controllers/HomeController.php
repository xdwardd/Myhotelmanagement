<?php

namespace App\Http\Controllers;
use App\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->id == 1) {
            return view('home');
        }
      abort('404');  
    }


    public function details(){

        if (auth()->user()->id == 1) {

            $rooms = Room::all();
            return view('details',compact('rooms'));
        }

        abort('404');
    }
}
