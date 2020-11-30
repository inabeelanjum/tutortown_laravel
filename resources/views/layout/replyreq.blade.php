<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Untitled</title>
  <link rel="stylesheet" href="\assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="\https://fonts.googleapis.com/css?family=Poppins">
  <link rel="stylesheet" href="\assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="\assets/fonts/ionicons.min.css">
  <link rel="stylesheet" href="\assets/css/Login-Form-Dark.css">
  <link rel="stylesheet" href="\assets/css/Navigation-with-Search.css">
  <link rel="stylesheet" href="\assets/css/styles.css">
</head>

<body>
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
  <div class="container">
    <div class="contact-clean">
    @if(session() -> has('success'))
     <div class= "alert alert-success">
      {{ session() -> get('success')}}
     </div>

    @endif
        <form method="post" action = "{{ url('replyr',$id)}}">
        @csrf
            <h2 class="text-center">Post Request</h2>
          <div class="form-group"><textarea class="form-control" name="replyr" placeholder="please write about your reply" rows="8"></textarea></div>
            <div class="form-group"><button class="btn btn-success" type="submit">Post </button></div>
        </form>

        @if(!$errors -> isempty())
        <div class= "alert alert danger mt-3">
         <ul>
         @foreach($errors->all() as $error)
           <li> {{$error}} </li>
         @endforeach
         </ul>

        </div>


        @endif
    </div>
  </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
