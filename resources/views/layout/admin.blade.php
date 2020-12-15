@extends('layout.master')
@section('head')
    <link rel="stylesheet" href="assets/css/styles.css">
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div>
                    <ul class="nav nav-tabs">
                      <li class="nav-item"><span class="badge badge-pill badge-danger">Reports</span></li>
                    </ul>
<br>
                            <ul class="thread-list">
                            @foreach( $show as $s)
                                
                                <li class="thread"><span class="title">{{$s ->report }} </span><span>
                                <a href="{{ url('delete/'.$s->user_id)}}" class="btn btn-success pull-right">Report</a></i></a></span>
                                <a href="{{ url('tutor/profile/'.$s->user_id)}}" class="btn btn-success pull-right">View profile</a></i></a></span>
                  
                                </li> <hr>
                             @endforeach
                           
                        </div>
                        {{$show->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
