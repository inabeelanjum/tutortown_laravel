@extends('layout.master')
@section('head')
    <link rel="stylesheet" href="assets/css/styles.css">
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
    <div class="container">
      <form class="search-form">
          <div class="input-group">
              <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div><input class="form-control" type="text" placeholder="I am looking for..">
              <div class="input-group-append"><button class="btn btn-primary" type="button">Search </button></div>
          </div>
      </form>
        <div class="row">
            <div class="col-md-12">

                <div>
                    <ul class="nav nav-tabs">
                      <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-3">Today <span class="badge badge-pill badge-primary">42</span></a></li>
                        <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-4">All <span class="badge badge-pill badge-primary">42</span></a></li>
                    </ul>

                            <ul class="thread-list">
                                <li class="thread"><span class="time">Apr 21</span><span class="title">maths teacher needed </span><span> <button type="button" class="btn btn-success pull-right">Message</button></i></a></span></li> <hr>
                                <li class="thread"><span class="time">Apr 21</span><span class="title">maths teacher needed </span><span> <button type="button" class="btn btn-success pull-right">Message</button></i></a></span></li><hr>
                                <li class="thread"><span class="time">Apr 21</span><span class="title">maths teacher needed </span><span> <button type="button" class="btn btn-success pull-right">Message</button></i></a></span></li><hr>
                                <li class="thread"><span class="time">Apr 21</span><span class="title">maths teacher needed </span><span> <button type="button" class="btn btn-success pull-right">Message</button></i></a></span></li><hr>
                                <li class="thread"><span class="time">Apr 21</span><span class="title">maths teacher needed </span><span> <button type="button" class="btn btn-success pull-right">Message</button></i></a></span></li><hr>
                                <li class="thread"><span class="time">Apr 21</span><span class="title">maths teacher needed </span><span> <button type="button" class="btn btn-success pull-right">Message</button></i></a></span></li><hr>
                                <li class="thread"><span class="time">Apr 21</span><span class="title">maths teacher needed </span><span> <button type="button" class="btn btn-success pull-right">Message</button></i></a></span></li><hr>

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
