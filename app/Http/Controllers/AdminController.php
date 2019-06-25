<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input as Input;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
     
    public function index()
    {
        $data['properties'] = DB::table('posts')->get();
        return view('backend.dashboard')->with('data',$data);
    }


    public function posts()
    {
        return view('backend.posts');
    }

    public function create_post(Request $data)
    {
         $this->validate($data,[
         'title'=>'required|max:40',
         'category'=>'required',
         't_rooms'=>'required',
         'bath'=>'required',
         't_area'=>'required',
         'rent_per_month'=>'required',
         'house_no'=>'required',
         'street'=>'required',
         'city'=>'required',
         'postal_code'=>'required'
      ]);
  
    $file = Input::file('thumbnail');

    DB::table('posts')->insert([
        'title' => $data['title'], 
        'category' => $data['category'],
        't_rooms' => $data['t_rooms'],
        'bath' => $data['bath'],
        't_area' => $data['t_area'],
        'rent_per_month' => $data['rent_per_month'],
        'house_no' => $data['house_no'],
        'street' => $data['street'],
        'city' => $data['city'],
        'postal_code' => $data['postal_code'],
        'image' => $file->getClientOriginalName()]
    );

    $file->move('img\houses', $file->getClientOriginalName());

    return redirect('admin')->with('success','Property created successfully!');

        
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_post($id)
    {
        DB::table('posts')->where('id', $id)->delete();
        return redirect('admin')->with('danger','Property deleted successfully!');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_post(Request $data, $id)
    {
        $this->validate($data,[
         'title'=>'required|max:40',
         'category'=>'required',
         't_rooms'=>'required',
         'bath'=>'required',
         't_area'=>'required',
         'rent_per_month'=>'required',
         'house_no'=>'required',
         'street'=>'required',
         'city'=>'required',
         'postal_code'=>'required'
      ]);

    DB::table('posts')
    ->where('id', $id)
    ->update([
        'title' => $data['title'], 
        'category' => $data['category'],
        't_rooms' => $data['t_rooms'],
        'bath' => $data['bath'],
        't_area' => $data['t_area'],
        'rent_per_month' => $data['rent_per_month'],
        'house_no' => $data['house_no'],
        'street' => $data['street'],
        'city' => $data['city'],
        'postal_code' => $data['postal_code']]
    );
    return redirect('admin')->with('info','Property Updated successfully!');


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
              

       $data['properties'] = DB::table('posts')->where('id', '=', $id)->get();
        return view('backend.property_edit')->with('data',$data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function logout(Request $request) {
      Auth::logout();
      return redirect('/admin');
    }
}
