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
                      <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-3">Today <span class="badge badge-pill badge-primary">42</span></a></li>
                        <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-4">All <span class="badge badge-pill badge-primary">42</span></a></li>
                    </ul>

                            <ul class="thread-list">
                            @foreach( $show as $s)
                                <li class="thread"><span class="title">{{$s ->replyr }} </span><span> <button type="button" class="btn btn-success pull-right">Message</button></i></a></span></li> <hr>
                             @endforeach
                        </div>
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
