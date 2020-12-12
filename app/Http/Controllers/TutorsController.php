<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Models\reviews;


class TutorsController extends Controller
{
    function tutors_list(Request $request) {
        $tutors = User::where('type', 'tutor')->get();
        if($tutors) {
            foreach($tutors as $k => $tutor) {
                $profile = Profile::where('user_id', $tutor->id)->first();       
                $tutors[$k]->profile = $profile;
            }
        }
        if( $request->is('api/*')){
            return ['status' => true, 'data' => $tutors];
        } else {
            return view('layout.list', ['tutors' => $tutors]);
        }
    }
    function tutor_profile(Request $request, $tutor_id) {
      
        $user= User::find($tutor_id);
        $show= profile::where('user_id', $tutor_id)->first();
        $reviews= reviews::where('tutor_id',$tutor_id)->simplePaginate(1);
       
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
            if( $request->is('api/*')){
                return ['status'=>true, 'data' => $show];
            } else {
                return view('layout.tutor.profile', ['show' => $show ,'reviews' => $reviews ]);
            }
     
        }
}
