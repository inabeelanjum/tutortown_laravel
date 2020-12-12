<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use App\Models\notification;

class notiController extends Controller
{
    public function all_notifications(Request $req)

    {
        {
            $id =Auth::id();
            $show= notification::where('receiv_id', $id)->simplePaginate(5);

            if( $req->is('api/*'))
            {
                return ['status'=> true , 'data' => $show];
            }
            else{
                return view('layout/notifications', ['show' => $show]);
            }
            
            
          }

        
    }
    
}
