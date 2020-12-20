@extends('layout.master')
@section('head')
    <style type="text/css">
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
      .fa-star {
    color: #e6e600;

}

    </style>
@endsection
@section('content')
  

    <div class="container mt-4">
    
      <div class="row">
      <a  href="{{ url('editp')}}" class="btn btn-success btn-lg btn-block" >Edit Profile</a>
      

        <div class="col-12 col-lg-8">
      
          <div class="card mb-4">
         <b> <h2 class="card-header text-center">{{$show['name']}}</h2> </b>
          	<h4 class="card-header  float-right">Average Ratings <i class="text-center fas fa-star float-right">{{  round($show['average'], 2)}}</i></h4>
            
            
          	<img src="<?php echo url('/files/'.$show['image'])?>" alt="Portrait of Firstname Lastname" class="w-100" height='500px'>
            <div class="card-body">
							<h3 class="card-text">About</h3>

							<p class="card-text">{{$show['about']}}</p>
            </div>
          </div>
          
          <div class="card mb-4">
          	<h2 class="card-header text-center">Testimonials</h2>
            <div class="card-body">
            	<div id="carousel" class="carousel slide" data-ride="false">
                
                @if(count($show['reviews']))
                <div class="carousel-inner">
                @foreach($show['reviews'] as $k => $value)
                  <div class="carousel-item active">
                    <blockquote class="blockquote text-center d-flex flex-column justify-content-center">
                      <p class="mb-0">{{$value->message}}</p>
                      <form action="{{ url('report_comment/'.$value->id)}}">
                       <input type="hidden" name='comment' value='{{$value->message}}'>
                      
                      <button class="btn btn-success btn-block" type='submit'>Report</button>
                      </form>
                      <footer class="blockquote-footer"></footer>
                    </blockquote>
                  </div>
                  @endforeach
                     </div>
                     
                     @endif
                     @if(session() -> has('success'))
     <div class= "alert alert-success">
      {{ session() -> get('success')}}
     </div>

     @elseif(session() -> has('fail'))
     <div class= "alert alert-danger">
      {{ session() -> get('fail')}}
     </div>

     @endif
                 
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4">
          <div class="card mb-4">
          	<h2 class="card-header text-center">Contact info</h2>
            <div class="card-body">
            	<div class="media">
                <div class="fa-layers fa-fw fa-2x mr-3">
                  <i class="fa fa-user text-success"></i>
	            		<i class="fas fa-male text-white" data-fa-transform="shrink-5"></i>
	            	</div>
               
	              <div class="media-body">
                {{$show['name']}}
	              	<hr>
	              </div>
	            </div>
           

            	<div class="media">
                <div class="fa-layers fa-fw fa-2x mr-3">
                  <i class="fa fa-phone text-success"></i>
	            		<i class="fas fa-phone text-white" data-fa-transform="shrink-8"></i>
	            	</div>
	              <ul class="media-body list-unstyled">
	              	<li><a href="">{{$show['phone']}}</a></li>
	              	<li><hr></li>
                  <!-- Alternative to using <hr>: use "border border-secondary border-top-0 border-right-0 border-left-0 pb-3" on <ul> -->
	              </ul>
	            </div>
         
	            <div class="media">
                <div class="fa-layers fa-fw fa-2x mr-3">
                  <i class="fa fa-envelope text-success"></i>
	            		<i class="fas fa-envelope text-white" data-fa-transform="shrink-8"></i>
	            	</div>
          
	              <ul class="media-body list-unstyled">
	              	<li><a href="">{{$show['email']}}</a></li>

	              	<li><hr></li>
	              </ul>
	            </div>

	            <div class="media">
                <div class="fa-layers fa-fw fa-2x mr-3">
            			<i class="fa fa-map-marker text-success"></i>
	            		<i class="fas fa-home text-white" data-fa-transform="shrink-8"></i>
	            	</div>
           
	              <div class="media-body">
	              	<address class="mb-0">
                  {{$show['location']}}
	              	</address>
	              	<hr>
	              </div>
	            </div>
              <div class="media">
                <div class="fa-layers fa-fw fa-2x mr-3">
            			<i class="fa fa-money text-success"></i>
	            		<i class="fas fa-home text-white" data-fa-transform="shrink-8"></i>
	            	</div>
           
	              <div class="media-body">
	              	<address class="mb-0">
                <h2> <b> {{$show['location']}}</b> </h2> Rupees per hour
	              	</address>
	              	<hr>
	              </div>
	            </div>
       
	            <div class="media">
            		<div class="fa-layers fa-fw fa-2x mr-3">
            			<i class="fa fa-comments text-success"></i>
	            		<i class="fas fa-at text-white" data-fa-transform="shrink-8"></i>
	            	</div>
	              <div class="media-body">
                  <form method="post" action="{{url(($show['type'] == 'tutor') ? '/user/chat' : '/tutor/chat')}}">

                    <div class="form-group">
                      <div class="input-group input-group-sm">
                        <div class="input-group-prepend" id="message">
                          <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                        </div>
                        <textarea class="form-control" name="message" placeholder="Your message here" aria-label="Your message" aria-describedby="message" rows="3"></textarea>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-success">Send message</button>
                  </form>
	              </div>
	            </div>
            </div>
          </div>
          <div class="card mb-4">
          	<h2 class="card-header text-center">Skills</h2>
            <div class="card-body">
	            <div class="media">
            		<div class="fa-layers fa-fw fa-2x mr-3">
            			<i class="fa fa-user-plus text-success"></i>
	            		<i class="fas fa-code text-white" data-fa-transform="shrink-8"></i>
	            	</div>
	              <ul class="media-body list-unstyled">
	              	<li><i class="fa fa-check text-success"></i> {{$show['subj1']}}</li>
                  <li><i class="fa fa-check text-success"></i> {{$show['subj2']}}</li>
                  <li><i class="fa fa-check text-success"></i> {{$show['subj3']}}</li>
                  <li><i class="fa fa-check text-success"></i> {{$show['subj4']}}</li>
                  <li><i class="fa fa-check text-success"></i> {{$show['subj5']}}</li>
                  <li><i class="fa fa-check text-success"></i> {{$show['subj6']}}</li>
	              		
                  <li><hr></li>
	              </ul>
	            </div>

           

            </div>
          </div>
        </div>
      </div>
    </div>

 @endsection
