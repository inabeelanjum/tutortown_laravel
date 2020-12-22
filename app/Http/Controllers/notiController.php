<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use App\Models\notification;
use App\Models\msgs;

class notiController extends Controller
{
    public function all_notifications(Request $req)

    {
        {
            $id =Auth::id();
            $show= notification::where('receiv_id', $id)->simplePaginate(5);

            if( $req->is('api/*'))
            {
                $show_api= notification::where('receiv_id', $id)->get();
                return ['status'=> true , 'data' => $show_api];
            }
            else{
                return view('layout/notifications', ['show' => $show]);
            }
            
            
          }

        
    }
    public function message_api(Request $req , $id)
    {

     $sender_id =Auth::id();
     $receiver_id = $id;
     $rr = msgs::create([
         'status'=> 0,
        'sender_id' => $sender_id,
        'receiver_id' => $receiver_id,
         'msg' => $req->msg,
    ]);
    if( $req->is('api/*'))
    {
        if($rr == true)
        {
            return ['status' => true, 'message' => 'message sent' ];
        }
        else{
            return ['status' => false, 'message' => 'invalid request' ];
        }
      
        } 
    else 
    {

        return 'hi';
    }




    }


    public function all_message_api($id)
    {
        $sender_id =Auth::id();
        $receiver_id = $id;
        $all = msgs::where('sender_id', $sender_id)->where('receiver_id',$receiver_id)->get();
        
        return ['status' => true, 'data' => $all ];
       

    }
    
}
