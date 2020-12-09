<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;


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
        $tutor = User::where('type', 'tutor')->where('id', $tutor_id)->with('profile')->first();
        if($tutor) {
            if( $request->is('api/*')){
                return ['status'=>true, 'data' => $tutor];
            } else {
                return view('layout.tutor.profile', ['tutor' => $tutor]);
            }
        } else {
            //return view('permission-denied');
            return view('not-found', ['message', 'Tutor profile not found.']);
        }
    }
}
