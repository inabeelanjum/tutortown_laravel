<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\profile;
use App\Models\reviews;
use App\Models\User;

class profileC extends Controller
{
    public function index()
    {
        $id=Auth::id();
        dd($id);
    
    }
    public function profile(Request $req)
    {
        $id=Auth::id();
    
        $user= User::find($id);
        $show= profile::where('user_id', $id)->first();
        $reviews= reviews::where('tutor_id',$id)->get();
        if ( empty($show )) {
            
            return view('layout.profile_edit');
          }
          else
          {
        $show = [
            'name'  => $user->name,
            'type'=>$user->type,
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
            'reviews'=>$reviews
            
        ];

          if( $req->is('api/*')){
            return ['status' => true, 'data' => $show];
        } else {
            if($user->type=='tutor'){
                return view('layout.portfolio',['show'=>$show ]);
            } 
            else
            {
                return view('layout.Portfolios',['show'=>$show ]);
    
            }
        }            
        
    }
 }
    public function editp()
    {
    $id=Auth::id();
     $user= User::find($id);
     if($user->type=='tutor'){
        return view('layout.profile_edit');
    } 
    else
    {
        return view('layout.profile_edit2');

    }
    }

    public function editpro(Request $req)
    {
        $user = Auth::id();
        $pro= profile::where('user_id', $user)->first();
        if ($req->hasFile('file'))
        {
            $image = $req->file('file')->store('public');
        }
        else{

            $image= null;
        }
        if ( empty($pro )) {
            profile::create([
                'user_id' => $user,
                'about' => $req->about,
            'image' =>$image,
            'location' =>$req->location,
            'charges' => $req->charges,
            'phone' => $req->phone,
            'subj1' =>$req->subj1,
            'subj2' =>$req->subj2,
            'subj3' =>$req->subj3,
            'subj4' =>$req->subj4,
            'subj5' =>$req->subj5,
            'subj6' =>$req->subj6,
            ]);
          }
          else{
        $req -> validate([
           // 'requestr'=> 'required|min:20|max:300',
        ]);
    
        $update =[
            'about' => $req->about,
            'image' =>$image,
            'location' =>$req->location,
            'charges' => $req->charges,
            'phone' => $req->phone,
            'subj1' =>$req->subj1,
            'subj2' =>$req->subj2,
            'subj3' =>$req->subj3,
            'subj4' =>$req->subj4,
            'subj5' =>$req->subj5,
            'subj6' =>$req->subj6,

        ];
        profile::where('user_id', $user)->update($update);
    }
    if( $req->is('api/*')){
        return ['status' => true, 'message' => 'profile is updated'];
    } else {
        return redirect()->back()->with('success','profile updated succesfully');
    }
     
    }



}
