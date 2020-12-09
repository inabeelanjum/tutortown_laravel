<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\reviews;

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

      $rr = reviews::create([
        'user_id' => $user_id,
        'tutor_id' => $tutor_id,
        'message' =>$req->review,
    ]);
    return redirect()->back()->with('success','Review has been posted');

    }
}
