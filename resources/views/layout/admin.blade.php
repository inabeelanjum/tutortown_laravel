@extends('layout.master')
@section('head')
    <link rel="stylesheet" href="assets/css/styles.css">
@endsection

@section('content')

   
        <div class="row">
        <div class="container">
            <div class="col-md-12">
            @if(session() -> has('success'))
     <div class= "alert alert-success">
      {{ session() -> get('success')}}
      @endif
     </div>


                <div>
                    <ul class="nav nav-tabs">
                      <li class="nav-item"><span class="badge badge-pill badge-danger">Reports</span></li>
                    </ul>
<br>
                            <ul class="thread-list">
                            @foreach( $show as $s)
                                
                                <li class="thread"><span class="title">{{$s ->report }} </span><span>
                                <a href="{{ url('delete/'.$s->id)}}" class="btn btn-danger pull-right">Delete Report</a></i></a></span>
                                @if($s->report_type == 'comment')
                                <a href="{{ url('delete_comment/'.$s->user_id)}}" class="btn btn-primary pull-right"style="margin-right:5px;">Delete Comment</a></i></a></span>
                                @else
                                <a href="{{ url('tutor/profile/'.$s->user_id)}}" class="btn btn-success pull-right"style="margin-right:5px;">View profile</a></i></a></span>
                                 @endif
                                </li> <hr>
                             @endforeach
                           
                        </div>
                        {{$show->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
