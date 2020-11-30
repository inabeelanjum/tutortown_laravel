<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use App\Models\notification;

class notiController extends Controller
{
    public function index()

    {
        {
            $id =Auth::id();
            $show= notification::where('receiv_id', $id)->get();
      
            return view('layout/notifications', ['show' => $show]);
          }

        
    }
    
}
