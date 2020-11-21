<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use App\Models\userrequest;
use Illuminate\Http\Request;


class requestController extends Controller
{
    public function index()
    {
        return view("layout/requests");
    }
    public function postr()
    {
    if(Auth::check())
    {

        return view("layout/postr"); 
    }
    else{
        return redirect('login');
    }
}
    public function creater(Request $req)
    {
        $user = Auth::id();
        $req -> validate([
            'requestr'=> 'required|min:20|max:300',
        ]);
        $rr = userrequest::create([
            'user_req' => $req -> requestr,
            'user_id' => $user,
        ]);
        return redirect()->back()->with('success','post has been created');
    }
    
    public function show()
    {
      $show =userrequest::all();

      return view('layout/requests', ['show' => $show]);
    }

}
