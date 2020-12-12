<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Profile;
use App\Models\User;


class search extends Controller
{
  public function index()
  {
    if(Auth::check())
    {
      return view('layout/home');
    }
    else{
      return redirect('login');
    }
  }
public function updateloc(Request $req)
{
$user=Auth::id();
$pro= User::where('id', $user)->first();
if ($req->has('lat'))
{
  $update = [
    'lat' => $req->lat,
    'lang' => $req->lang,
  ];
  User::where('id', $user)->update($update);
}
}

  public function searchtutor(Request $req)
  {
    $s=$req->search_item;
   $tutors=profile::query()
    ->where('subj1', 'LIKE', "%{$s}%") 
    ->orWhere('subj2', 'LIKE', "%{$s}%") 
    ->orWhere('subj3', 'LIKE', "%{$s}%")
    ->orWhere('subj4', 'LIKE', "%{$s}%")
    ->orWhere('subj5', 'LIKE', "%{$s}%")
    ->orWhere('subj6', 'LIKE', "%{$s}%")    
    ->get();

    if( $req->is('api/*')){
      return ['status' => true, 'data' => $tutors];
  } else {
    return view('layout.result', ['tutors' => $tutors]);
  }
    
    
  }
}
