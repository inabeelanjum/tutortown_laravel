<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\msgs;
use App\Models\hiring;

class msgsController extends Controller
{
   public function chat()
   {
       return view('layout.chat');
   }
   public function student_to_tutor_chat(Request $request, $tutor_id )
   {    
        $tutor = User::where('type', 'tutor')->where('id', $tutor_id)->with('profile')->first();
        
        if($tutor) {
            $sender_id = 2;
            $receiver_id = $tutor_id;
            if($request->has('send_message')) {
                $msg = new msgs();
                $msg->msg = $request->get('message');
                $msg->sender_id = $sender_id;
                $msg->receiver_id = $tutor_id;
                $msg->status = 0;
                $msg->save();
            }
            // list all messages
            // make sidebar users list
            $sidebar_users = [];
            $messages = msgs::where(function($query) use ($sender_id, $receiver_id) {
                                $query->where('sender_id', $sender_id)->where('receiver_id', $receiver_id);
                        })->orWhere(function($query) use ($sender_id, $receiver_id) {
                            $query->where('sender_id', $receiver_id)->where('receiver_id', $sender_id);
                        })
                        ->get();
            if(count($messages)) {
                foreach($messages as $k => $user) {
                    $id = ($user->sender_id == $sender_id) ? $user->receiver_id : $user->sender_id;
                    if(!isset($sidebar_users[$id])) {
                        $sidebar_users[$id] = User::where('id', $id)->with('profile')->first();
                    }
                }
                
            }
            // check if student has already hired this tutor
            $if_hired = hiring::where('sender_id', $sender_id)->where('receiver_id', $receiver_id)->first();
            $resp = ['messages' => $messages, 'sidebar_users' => $sidebar_users, 'active_user' => $receiver_id, 'if_hired' => $if_hired];
            if($request->wantsJson()) {
                return $resp;
            } else {
                return view('layout.chat', $resp);
            }

        } else {
            return view('not-found');
        }
   }

    public function tutor_to_student_chat(Request $request, $student_id )
   {    
        $tutor = User::where('type', 'user')->where('id', $student_id)->with('profile')->first();
        if($tutor) {
            $sender_id = Auth::user()->id;
            $receiver_id = $student_id;
            if($request->has('send_message')) {
                $msg = new msgs();
                $msg->msg = $request->get('message');
                $msg->sender_id = $sender_id;
                $msg->receiver_id = $student_id;
                $msg->status = 0;
                $msg->save();
            }
            // list all messages
            // make sidebar users list
            $sidebar_users = [];
            $messages = msgs::where(function($query) use ($sender_id, $receiver_id) {
                                $query->where('sender_id', $sender_id)->where('receiver_id', $receiver_id);
                        })->orWhere(function($query) use ($sender_id, $receiver_id) {
                            $query->where('sender_id', $receiver_id)->where('receiver_id', $sender_id);
                        })
                        ->get();
            if(count($messages)) {
                foreach($messages as $k => $msg) {
                    // set message to read
                    if($msg->receiver_id == $sender_id) {
                        $msg->status = 1;
                        $msg->save();
                    }
                    $id = ($msg->sender_id == $sender_id) ? $msg->receiver_id : $msg->sender_id;
                    if(!isset($sidebar_users[$id])) {
                        $sidebar_users[$id] = User::where('id', $id)->with('profile')->first();
                    }
                }
                
            }
            return view('layout.chat', ['messages' => $messages, 'sidebar_users' => $sidebar_users, 'active_user' => $receiver_id]);

        } else {
            return view('not-found');
        }
   }
   function send_message(Request $request, $user_id) {
        
        $ret = ['success' => false, 'message' => 'Invalid request'];
        $user = User::where('id', $user_id)->with('profile')->first();
        if($user) {
            $sender_id = Auth::user()->id;
            $receiver_id = $user_id;
            $msg = new msgs();
            $msg->msg = $request->get('message');
            $msg->sender_id = $sender_id;
            $msg->receiver_id = $user_id;
            $msg->status = 0;
            $msg->save();
            $ret = ['success' => true, 'message' => 'Message has been posted.'];
        } 
        return $ret;
   }
    
   function messgae_heartbeat(Request $request, $user_id) {
        
        $ret = ['success' => false, 'message' => 'Invalid request'];
        
        $sender_id = Auth::user()->id;
        $receiver_id = $user_id;
        $messages = msgs::where(function($query) use ($sender_id, $receiver_id) {
            $query->where('sender_id', $sender_id)->where('receiver_id', $receiver_id);
            })->orWhere(function($query) use ($sender_id, $receiver_id) {
                $query->where('sender_id', $receiver_id)->where('receiver_id', $sender_id);
            })
            ->get();
        
        if(count($messages)) {
            ob_start();
            $htm = '';
            foreach($messages as $k => $msg) {
                // set message to read
                if($msg->receiver_id == $sender_id) {
                    $msg->status = 1;
                    $msg->save();
                } ?>
                
                <?php if($msg->sender_id == Auth::user()->id) { ?>
                    <!-- Sender Message-->
                    <div class="media w-50 mb-3"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="50" class="rounded-circle">
                        <div class="media-body ml-3">
                            <div class="bg-light rounded py-2 px-3 mb-2">
                                <p class="text-small mb-0 text-muted"><?php echo $msg->msg ?></p>
                            </div>
                            <p class="small text-muted"><?php echo date('F j, Y', strtotime($msg->created_at)) ?> | <?php echo date('h:i:s a', strtotime($msg->created_at)) ?></p>
                        </div>
                    </div>
                <?php } else { ?>
                    <!-- Reciever Message-->
                    <div class="media w-50 ml-auto mb-3">
                        <div class="media-body">
                            <div class="bg-primary rounded py-2 px-3 mb-2">
                                <p class="text-small mb-0 text-white"><?php echo $msg->msg ?></p>
                            </div>
                            <p class="small text-muted"><?php echo date('F j, Y', strtotime($msg->created_at)) ?> | <?php echo date('h:i:s a', strtotime($msg->created_at)) ?></p>
                        </div>
                    </div>
                <?php } ?>
                    
            <?php 
            }
            $content = ob_get_contents();
            ob_clean();
            $htm = $content;
            $ret['success'] = true;
            $ret['message'] = '';
            $ret['htm'] = $htm;

        }
        return $ret;
    }
   
}