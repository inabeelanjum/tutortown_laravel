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
