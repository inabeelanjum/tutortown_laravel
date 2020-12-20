<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\profile;
use App\Models\reviews;
use App\Models\User;
use App\Models\skill;

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
        $skill= skill::where('user_id', $id)->first();
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
            'subj1'  => $skill->subj1,
            'subj2'  => $skill->subj2,
            'subj3'  => $skill->subj3,
            'subj4'  => $skill->subj4,
            'subj5'  => $skill->subj5,
            'subj6'  => $skill->subj6,
            'reviews'=> $reviews
            
        ];

          if( $req->is('api/*')){
            $show_api= profile::where('user_id', $id)->first();
            return ['status' => true, 'data' => $show_api];
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
            ]);
            skill::create([
                'user_id' => $user,
                'subj1' =>$req->subj1,
                'subj2' =>$req->subj2,
                'subj3' =>$req->subj3,
                'subj4' =>$req->subj4,
                'subj5' =>$req->subj5,
                'subj6' =>$req->subj6,

            ]);
          }
          else{
        $update =[
            'about' => $req->about,
            'image' =>$image,
            'location' =>$req->location,
            'charges' => $req->charges,
            'phone' => $req->phone,
          

        ];

        $update_skills =[
            'subj1' =>$req->subj1,
            'subj2' =>$req->subj2,
            'subj3' =>$req->subj3,
            'subj4' =>$req->subj4,
            'subj5' =>$req->subj5,
            'subj6' =>$req->subj6,
        ];
        profile::where('user_id', $user)->update($update);
        skill::where('user_id', $user)->update($update_skills);
    }
    if( $req->is('api/*')){
        return ['status' => true, 'message' => 'profile is updated'];
    } else {
        return redirect()->back()->with('success','profile updated succesfully');
    }
     
    }


    public function skill_api()
    {
      $user =Auth::id();

       $data = skill::where('user_id',$user)->first();
        return ['status' => true , 'data' => $data];
    }


    public function get_review_api()
    {
    $user =Auth::id();
    $data = reviews::where('tutor_id',$user)->get();
    return ['status' => true , 'data' => $data];


    }


}
