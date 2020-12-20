<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Models\reviews;
use App\Models\skill;
use App\Models\star;


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
        $skill= skill::where('user_id', $tutor_id)->first();
        $reviews= reviews::where('tutor_id',$tutor_id)->simplePaginate(1);
        $star =star::where('tutor_id',$tutor_id)->get();
        $avg = 0;
        $total = count($star);
        if($total > 0 )
        {
        foreach($star as $s)
        {
            $avg += $s->star;
        }
        $average = $avg / $total ;
    }
    else{
        $average = 0;
    }
       
        $show = [
            'id' => $tutor_id,
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
            'reviews'=>$reviews,
            'average' => $average,
        ];
            if( $request->is('api/*')){
                return ['status'=>true, 'data' => $show];
            } else {
                return view('layout.tutor.profile', ['show' => $show ,'reviews' => $reviews ]);
            }
     
        }
}
