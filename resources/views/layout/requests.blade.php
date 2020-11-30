@extends('layout.master')
@section('head')
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
    @endsection
  
  @section('content')

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

          <div class="card mb-4">
            <h2 class="card-header text-center">Work Requests</h2>

           @foreach($show as $s)
            <div class="card-body">
              <div class="media mb-2">
                <div class="media-body">
                </div>
              </div>
              <p class="card-text">{{$s->user_req}}</p>
             
  <div class="form-group"><a href="{{ url('replyreq', $s->user_id )}} "><button class="btn btn-success">Reply</button></div> </a>
  <hr>
           @endforeach


  <div class="tab-content">
      <div class="tab-pane active" role="tabpanel" id="tab-1">
          <div class="thread-list-head">
              <nav class="thread-pages">
                  <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#">5</a></li>
                      <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                  </ul>
              </nav>
          </div>




            </div>
          </div>
        </div>
      </div>
    </div>

  @endsection
