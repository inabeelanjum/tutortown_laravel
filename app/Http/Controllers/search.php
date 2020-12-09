<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Profile;

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

    
    return view('layout.result', ['tutors' => $tutors]);
    
  }
}
