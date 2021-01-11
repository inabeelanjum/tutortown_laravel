<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\hiring;
use Auth;

class hiringController extends Controller
{
    function hire_me (Request $request, $id){
        $tutor = User::where('type', 'tutor')->where('id', $id)->with('profile')->first();
        if($tutor) {
            $hiring = new hiring();
            $hiring->sender_id = Auth::user()->id;
            $hiring->receiver_id = $id;
            $hiring->status = 0;
            if($hiring->save()) {
                return ['success' => true, 'message' => 'Hiring request has been sent.'];
            }
        } 
        return ['success' => false, 'message' => 'Invalid request'];
        

   }


   public function get_hiring()
   {
   $id = Auth::id();
  $hiring=hiring::where('receiver_id', $id)->first();
  return ['success' => true, 'data' => $hiring];

   }



   public function accept_hiring($id)
   {
   $sender_id = Auth::id();
   $hire_it = [
       'status'=>1,
   ];
  $hiring=hiring::where('receiver_id', $sender_id)->where('sender_id',$id)->update($hire_it);
  return ['success' => true, 'message' =>'hiring request accepted'];

   }
   public function reject_hiring($id)
   {
   $sender_id = Auth::id();
   $hire_it = [
       'status'=>1,
   ];
  $hiring=hiring::where('receiver_id', $sender_id)->where('sender_id',$id)->update($hire_it);
  return ['success' => true, 'message' =>'hiring request rejected'];

   }
}
