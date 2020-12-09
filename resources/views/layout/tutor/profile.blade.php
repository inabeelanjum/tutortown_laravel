@extends('layout.master')
@section('head')
<link rel="stylesheet" href="<?php echo url('/assets/css/styles.css') ?>">
@endsection
@section('content')   
    <div class="container mt-4">
      <div class="row">
        <div class="col-12 col-lg-8">
          <div class="card mb-4">
              
          	<h2 class="card-header text-center"><?php echo $tutor->name; ?></h2>
         
          	<img src="assets/img/port.jpeg" alt="Portrait of Firstname Lastname" class="w-100" height='500px'>
            <div class="card-body">
							<h3 class="card-text">About</h3>

							<p class="card-text">{{$tutor->about}}</p>
            </div>
          </div>
          
          <div class="card mb-4">
          	<h2 class="card-header text-center">Testimonials</h2>
            <div class="card-body">
            	<div id="carousel" class="carousel slide" data-ride="false">
                <ol class="carousel-indicators mb-0">
                  <li data-target="#carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel" data-slide-to="1"></li>
                  <li data-target="#carousel" data-slide-to="2"></li>
                  <li data-target="#carousel" data-slide-to="3"></li>
                  <li data-target="#carousel" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <blockquote class="blockquote text-center d-flex flex-column justify-content-center">
                      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in ipsum porttitor, tempor risus eget, finibus enim.</p>
                      <footer class="blockquote-footer">Firstname Lastname</footer>
                    </blockquote>
                  </div>
                  <div class="carousel-item">
                    <blockquote class="blockquote text-center d-flex flex-column justify-content-center">
                      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in ipsum porttitor, tempor risus eget, finibus enim. Morbi porta ligula elit, at eleifend tellus tincidunt sit amet. Nunc ex ligula, rutrum vel lorem vel, auctor placerat mi.</p>
                      <footer class="blockquote-footer">Firstname Lastname</footer>
                    </blockquote>
                  </div>
                  <div class="carousel-item">
                    <blockquote class="blockquote text-center d-flex flex-column justify-content-center">
                      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in ipsum porttitor, tempor risus eget, finibus enim. Morbi porta ligula elit, at eleifend tellus tincidunt sit amet. Nunc ex ligula, rutrum vel lorem vel, auctor placerat mi. Duis sed ante ultrices, viverra elit eu, ultricies sem. Donec quis porta sapien. Cras at lacus purus.</p>
                      <footer class="blockquote-footer">Firstname Lastname</footer>
                    </blockquote>
                  </div>
                  <div class="carousel-item">
                    <blockquote class="blockquote text-center d-flex flex-column justify-content-center">
                      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in ipsum porttitor, tempor risus eget, finibus enim. Morbi porta ligula elit, at eleifend tellus tincidunt sit amet. Nunc ex ligula, rutrum vel lorem vel, auctor placerat mi.</p>
                      <footer class="blockquote-footer">Firstname Lastname</footer>
                    </blockquote>
                  </div>
                  <div class="carousel-item">
                    <blockquote class="blockquote text-center d-flex flex-column justify-content-center">
                      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in ipsum porttitor, tempor risus eget, finibus enim.</p>
                      <footer class="blockquote-footer">Firstname Lastname</footer>
                    </blockquote>
                  </div>
                </div>
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
                {{$tutor->name}}
	              	<hr>
	              </div>
	            </div>
           

            	<div class="media">
                <div class="fa-layers fa-fw fa-2x mr-3">
                  <i class="fa fa-phone text-success"></i>
	            		<i class="fas fa-phone text-white" data-fa-transform="shrink-8"></i>
	            	</div>
	              <ul class="media-body list-unstyled">
	              	<li><a href="">{{$tutor->phone}}</a></li>
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
	              	<li><a href="">{{$tutor->email}}</a></li>

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
                  {{$tutor->location}}
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
                <h2> <b> {{$tutor->location}}</b> </h2> Rupees per hour
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
                  <form action="<?php echo url(($tutor->type == 'tutor' ? '/user/chat/' : '/tutor/chat/').$tutor->id) ?>" method="post">
                        @csrf
                        <div class="form-group">
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend" id="message">
                            <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                            </div>
                            <textarea class="form-control" name="message" required placeholder="Your message here" aria-label="Your message" aria-describedby="message" rows="3"></textarea>
                        </div>
                        </div>
                        <button type="submit" name="send_message" class="btn btn-sm btn-success">Send message</button>
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
	              	<li><i class="fa fa-check text-success"></i> {{$tutor->subj1}}</li>
                  <li><i class="fa fa-check text-success"></i> {{$tutor->subj2}}</li>
                  <li><i class="fa fa-check text-success"></i> {{$tutor->subj3}}</li>
                  <li><i class="fa fa-check text-success"></i> {{$tutor->subj4}}</li>
                  <li><i class="fa fa-check text-success"></i> {{$tutor->subj5}}</li>
                  <li><i class="fa fa-check text-success"></i> {{$tutor->subj6}}</li>
	              		
                  <li><hr></li>
	              </ul>
	            </div>

           

            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
