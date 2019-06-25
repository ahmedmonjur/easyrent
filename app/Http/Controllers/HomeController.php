<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
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
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['properties'] = DB::table('posts')->get();
        return view('frontend/index')->with('data',$data);
    }
    public function search(Request $data)
    {
        $key= $data['key'];
        $type=$data['type'];
        $region=$data['region'];


        $data['properties'] = DB::table('posts')
           ->where('title', 'LIKE', "%$key%")
           ->Where('category', 'LIKE', "%$type%")
           ->get();

        
        return view('frontend/search')->with('data',$data);
    }

}
