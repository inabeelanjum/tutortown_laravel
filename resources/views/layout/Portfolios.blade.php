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
      <button  action="{{ url('editp')}}" class="btn btn-success btn-lg btn-block">Update Profile</button>
        <div class="col-12 col-lg-8">
          <div class="card mb-4">
          	<h2 class="card-header text-center">{{$show['name']}}</h2>
            
          	<img src= "/storage/{{$show['image']}}" alt="image" class="w-100" height='500px'>
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

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
