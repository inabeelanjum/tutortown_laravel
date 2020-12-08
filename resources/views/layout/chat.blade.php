@extends('layout.master')
@section('head')
    <link rel="stylesheet" href="<?php echo url('/assets/css/styles.css') ?>">
@endsection

@section('content')
<style type="text/css">
#btnh{
	margin-top:20px;
	color:  #fff;
}
.hire_me_alert {
	margin-top: 20px;
}
      .carousel-indicators {
        bottom: 0;
      }
      .carousel-indicators li {
        background-color: #868e96;
        cursor: pointer;
      }
      .carousel-indicators .active {
        background-color: #007bff;
      }
    </style>

<div class="bootstrap_chat">
<div class="container py-5 px-4">

  <div class="row rounded-lg overflow-hidden shadow">
    <!-- Users box-->
    <div class="col-5 px-0">
      <div class="bg-white">

        <div class="bg-gray px-4 py-2 bg-light">
          <p class="h5 mb-0 py-1">Recent</p>
        </div>

        <div class="messages-box">
          <div class="list-group rounded-0">
            <?php
            if(count($sidebar_users)) {
                foreach($sidebar_users as $k => $suser) {
					?>
						<a href="<?php echo ($active_user != $suser->id) ? url('/tutor/chat/'.$suser->id) : '#' ?>" class="list-group-item list-group-item-action <?php echo ($active_user == $suser->id) ? ' active text-white ' : ' list-group-item-ligh ' ?>  rounded-0">
							<div class="media"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="50" class="rounded-circle">
								<div class="media-body ml-4">
								<div class="d-flex align-items-center justify-content-between mb-1">
									<h6 class="mb-0"><?php echo $suser->name ?></h6>
								</div>
								</div>
							</div>
						</a>
					<?php
				}
            }
			?>




          </div>
        </div>
      </div>
    </div>
  
    <div class="col-7 px-0">
      <div class="px-4 py-5 chat-box bg-white">
			<div class="chat_wrapper">
				<?php if(count($messages)) { ?>
					<?php foreach($messages as $k => $msg) { ?>
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
					<?php } ?>
				<?php } ?>
			</div>

        

      <!-- Typing area -->
	  <form class="send_message_form" action="<?php echo url('/send-message/'.$active_user) ?>"  class="bg-light">
			@csrf
			<div class="input-group">
			<input type="text" placeholder="Type a message" required aria-describedby="button-addon2" class="form-control send_message rounded-0 border-0 py-4 bg-light">
			<div class="input-group-append">
				<button id="button-addon2" type="submit" class="btn btn-link"> <i class="fa fa-paper-plane"></i></button>

			</div>
		</form>
		@if(Auth::user()->type =='user')
	</div>
 	<?php if(isset($if_hired) && $if_hired->status == 0) { ?>
		<div class="alert hire_me_alert alert-info" role="alert">A hiring request has been sent to Tutor.</div>
 	<?php } else if(isset($if_hired) && $if_hired->status == 1) { ?> 
		<div class="alert hire_me_alert alert-info" role="alert" style="overflow: hidden;">You have hired this tutor. <a  class="btn btn-primary float-right" href="<?php echo url('/post-review/'.$active_user) ?> ">Post Review</a></div>
	<?php } else {  ?>
 		<a id ='btnh' class="btn hire_me btn-success" >Hire Me</a>
 		<div class="alert hire_me_alert alert-success" role="alert" style="display: none;">
 	<?php } ?>
  
</div>
@endif
 <!--hire me button-->

	</div>

  </div>
</div>
</div>
<style>
	.overlay_wrapper {
		width: 100%;
		height: 100%;
		position: fixed;
		top: 0;
		left: 0;
		z-index: 1000;
		background: rgba(255,255,255,0.8);
		display: none;
	}
	.overlay_wrapper .overlay {
		width: 150px;
		height: 40px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
	}
</style>
<div class="overlay_wrapper">
	<div class="overlay">
		<div class="spinner-grow text-success" role="status">
			<span class="sr-only">Loading...</span> 
		</div>
		<div class="spinner-grow text-success" role="status">
			<span class="sr-only">Loading...</span> 
		</div>
		<div class="spinner-grow text-success" role="status">
			<span class="sr-only">Loading...</span> 
		</div>
	</div>
</div>
<script>
	
	(function($){
		$(document).ready(function(){
			$('.send_message_form').submit(function(){
				var message = $('.send_message').val();
				var action = $(this).attr('action');
				$('.overlay_wrapper').show();
				$.ajax({
					type:'POST',
					url:action,
					data:'_token=<?php echo csrf_token() ?>&message='+message,
					success:function(data) {
						$('.overlay_wrapper').hide();
						$('.send_message').val('');
						
					}, 
					error: function(){
						$('.overlay_wrapper').hide();
					}
				});
				return false;
			});
			
			setInterval(() => {
				var action = '<?php echo url('/message-heartbeat/'.$active_user); ?>';
				$.ajax({
					type:'POST',
					url:action,
					data:'_token=<?php echo csrf_token() ?>',
					success:function(data) {
						$('.overlay_wrapper').hide();
						if(data.success == true) {
							$('.chat_wrapper').html(data.htm);
						}
						
						
					}, 
					error: function(){
						$('.overlay_wrapper').hide();
					}
				});
				return false;
			}, 5000);
			$('body').on('click','.hire_me',function(){
				$('.overlay_wrapper').show();
				var action = '<?php echo url('/hire-me/'.$active_user); ?>';
				$.ajax({
					type:'POST',
					url:action,
					data:'_token=<?php echo csrf_token() ?>',
					success:function(data) {
						if(data.success == true) {
							$('.hire_me_alert').html(data.message).slideDown();
						}
						
						
					}, 
					error: function(){
						$('.overlay_wrapper').hide();
					}
				});

			});
		});
	})(jQuery);
</script>
@endsection
