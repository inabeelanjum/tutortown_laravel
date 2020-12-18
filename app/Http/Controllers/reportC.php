<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\report;
use Auth;
class reportC extends Controller
{
    public function index()
    {
    
    }

    public function report($id)
    {
        $user_id =$id;
        return view('layout.report',['id'=>$user_id]);

    }

    public function report_submit(Request $req ,$id)
    {
        $reporter_id = Auth::id();
        $user_id = $id;
        $req -> validate([
            'report'=> 'required|min:20|max:300',
        ]);
        $count = report::where('user_id',$user_id)->where('reporter_id' , $reporter_id)->first();

        if($count)
        {
            
            
            return redirect()->back()->with('fail','sorry you cannot report twice');
        }
        else
        {
            
            $rr = report::create([
                'reporter_id' => $reporter_id,
                'user_id' => $id,
                'report' =>$req->report,
                'report_type'=> 'profile'
            ]);
    
            return redirect()->back()->with('success','report has been submitted');
           
        }

    }

    public function report_comment(Request $req , $id)
    {
        $reporter_id = Auth::id();
        $user_id = $id;

        $count = report::where('user_id',$user_id)->where('reporter_id' , $reporter_id)->first();

        if($count)
        {
            
            return redirect()->back()->with('fail','sorry you cannot report twice');
        }
        else
        {
            
            $rr = report::create([
                'reporter_id' => $reporter_id,
                'user_id' => $id,
                'report' =>$req->comment,
                'report_type'=> 'comment'
            ]);
    
            return redirect()->back()->with('success','report has been submitted');
           
        }


    }
}
