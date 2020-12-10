<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use App\Models\userrequest;
use App\Models\notification;
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
    public function replyreq($id)
    {
    if(Auth::check())
    { 
        $idd = $id;
        return view("layout/replyreq", ['id' => $idd]); 
    }
    else{
        return redirect('login');
    }
}
    public function creater(Request $req)
    {
        $user = Auth::user()->id;
        $req -> validate([
            'requestr'=> 'required|min:20|max:300',
        ]);
        $rr = userrequest::create([
            'user_req' => $req -> requestr,
            'user_id' => $user,
        ]);
        if( $req->is('api/*'))
        {
            if($rr == true)
            {
                return ['status' => true, 'message' => 'post has been created' ];
            }
            else{
                return ['status' => false, 'message' => 'invalid request' ];
            }
          
            } 
        else 
        {

            return redirect()->back()->with('success','post has been created');
        }
       
    }
    public function replyr(Request $req,$id)
    {
        $user_rec=$id;
         $user = Auth::id();
        $req -> validate([
            'replyr'=> 'required|min:20|max:300',
        ]);
        $rr = notification::create([
            'replyr' => $req -> replyr,
            'send_id' => $user,
            'receiv_id' =>$user_rec,
        ]);

        if( $req->is('api/*'))
        {
            if($rr == true)
            {
                return ['status' => true, 'message' => 'request has been replyed' ];
            }
            else{
                return ['status' => false, 'message' => 'invalid request' ];
            }
          
            } 
        else 
        {

            return redirect()->back()->with('success','Reply  has been sent');
        }
      
    }
    
    public function show(Request $req)
    {
      $show =userrequest::all();

      if( $req->is('api/*')){
        return ['status' => true, 'data' => $show];
    } else {
        return view('layout/requests', ['show' => $show]);
    }
      
    

   
    }

}
