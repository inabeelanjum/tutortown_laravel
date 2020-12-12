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
           {{ $show->links() }}
    </div>

  @endsection
