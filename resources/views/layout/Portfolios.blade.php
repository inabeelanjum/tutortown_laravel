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
    </style>
@endsection
@section('content')
   

    <div class="container mt-4">

      <div class="row">
      <a  href="{{ url('editp')}}" class="btn btn-success btn-lg btn-block">Edit Profile</a>
        <div class="col-12 col-lg-8">
          <div class="card mb-4">
          	<h2 class="card-header text-center">{{$show['name']}}</h2>
            
          	<img src= "<?php echo url('/files/'.$show['image'])?>" alt="image" class="w-100" height='500px'>
            <div class="card-body">
							<h3 class="card-text">About</h3>
							<p class="card-text">{{$show['about']}}</p>
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
             
       
            </div>
          </div>
          
        </div>
      </div>
    </div>
@endsection
