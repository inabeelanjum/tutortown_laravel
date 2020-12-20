<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\reviews;
use App\Models\star;


class reviewController extends Controller
{
    public function post_review_form(Request $req , $id)
    {
        return view('layout.post_review', ['id' => $id]);
    }

    public function review_submit(Request $req , $id )
    {
      $tutor_id = $id;
      $user_id =Auth::id();
      $req -> validate([
        'review'=> 'required|min:5|max:300',
    ]);
      $rr = reviews::create([
        'user_id' => $user_id,
        'tutor_id' => $tutor_id,
        'message' =>$req->review,
    ]);
    $star =star::create([
        'user_id' => $user_id,
        'tutor_id' => $tutor_id,
        'star' =>$req->star,
    ]);
    if( $req->is('api/*')){
        if($rr == true)
        {
            return ['status' => true, 'message' => 'review is submitted' ];
        }
        else{
            return ['status' => false, 'message' => 'invalid request' ];

        }
      
    } else {
        return redirect()->back()->with('success','Review has been posted');
    }

  

    }
}
