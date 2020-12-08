<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">

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
  </head>
  <body class="bg-light">
    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand" href="#" style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 36px;font-weight: bold;font-style: normal;">Tutor Town</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" id="togle"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto" style="font-size: 18px;">
                    <li class="nav-item" role="presentation" style="font-size: 16px;"><a class="nav-link active" href="#" style="color: rgb(0,,0,0);font-size: 20px;">Requests&nbsp; &nbsp; &nbsp;</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color: rgb(0,0,0);">Profile&nbsp; &nbsp; &nbsp;</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color: rgb(0,0,0);">Messages&nbsp; &nbsp; &nbsp;</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color: rgb(0,0,0);">Notifications&nbsp; &nbsp; &nbsp;</a></li>
                </ul><button class="btn btn-success" id="btn-logout" type="button"><i class="fa fa-lock"></i>&nbsp; Log Out</button></div>
</div>
</nav>

    <div class="container mt-4">
      <div class="row">
        <div class="col-12 col-lg-8">
          <div class="card mb-4">
          	<h2 class="card-header text-center">{{$show['name']}}</h2>
            
          	<img src="assets/img/port.jpeg" alt="Portrait of Firstname Lastname" class="w-100" height='500px'>
            <div class="card-body">
							<h3 class="card-text">About</h3>

							<p class="card-text">{{$show['about']}}</p>
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
                  <form>

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

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>