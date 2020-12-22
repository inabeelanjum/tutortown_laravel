<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\report;
use App\Models\notification;
use App\Models\profile;
use App\Models\User;
use App\Models\skill;
use App\Models\reviews;
use Auth;
use DB;

class admin extends Controller
{
    public function index()
    {
        if(Auth::user()->type =='admin')
        {
            $show =report::simplePaginate(3);
            return view('layout.admin', ['show' =>$show]);
        }
        else
        {
            return view('layout.admin');

        }
    }

    public function warning(request $req ,$id)
    {
        $receiv_id = $id;
        $send_id = Auth::id();
        $rr =notification::create([
        'send_id' =>  $send_id,
        'receiv_id' => $receiv_id,
        'replyr' => 'your profile has been reported , this is auto generate warning on next report your profile will be banned',

      ]);
      return redirect()->back()->with('success','warning has been sent');
       
    }

    public function delete_account(Request $req , $id )
    {
        $pro = $id;
        User::where('id',$pro)->delete();
        profile::where('user_id',$pro)->delete();
        skill::where('user_id',$pro)->delete();
        return redirect('admin');


    }


    public function delete_request($id){

       $find = report::find($id);
       $find->delete();


       return redirect()->back()->with('success','Report has been deleted');

    }

    public function delete_comment($id)
    {
        $comment = reviews::find($id);
        $report = report::where('user_id',$id);
        $comment->delete();
        $report->delete();
        return redirect()->back()->with('success','Review Has Been deleted');
    }


}
