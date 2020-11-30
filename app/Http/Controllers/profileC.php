<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\profile;
use App\Models\User;

class profileC extends Controller
{
    public function index()
    {
        $id=Auth::id();
        dd($id);
    
    }
    public function profile()
    {
        $id=Auth::id();
        $user= User::find($id);
        $show= profile::where('user_id', $id)->first();
        $show = [
            'name'  => $user->name,
            'email'  => $user->email,
            'image'  => $show->image,
            'about'  => $show->about,
            'location'  => $show->location,
            'phone'  => $show->phone,
            'subj1'  => $show->subj1,
            'subj2'  => $show->subj2,
            'subj3'  => $show->subj3,
            'subj4'  => $show->subj4,
            'subj5'  => $show->subj5,
            'subj6'  => $show->subj6,
            
        ];
      return view('layout.portfolio',['show'=>$show ]);
    }
    public function editp()
    {
     return view('layout.profile_edit/');
    }

}
