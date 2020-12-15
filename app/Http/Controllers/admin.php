<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\report;
use Auth;

class admin extends Controller
{
    public function index()
    {
        if(Auth::user()->type =='admin')
        {

            $show =$show =report::simplePaginate(3);
            return view('layout.admin', ['show' =>$show]);
        }
        else
        {
            return view('layout.home');

        }
    }


}
