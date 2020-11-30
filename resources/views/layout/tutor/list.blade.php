@extends('layout.master')
@section('head')
    <link rel="stylesheet" href="<?php echo url('/assets/css/styles.css') ?>">
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
        <div class="row">
            <div class="col-md-12">
                <?php echo '<pre>';
                    if(count($tutors)):
                        ?>
                        <ul  class="list-group">
                        <?php
                        foreach($tutors as $k => $tutor):
                            ?>
                                <li  class="list-group-item">
                                    <?php echo $tutor->name; ?>
                                    <a class="float-right btn btn-primary" href="<?php echo url('/tutor/profile/'.$tutor->id) ?>">View Profile</a>
                                </li>
                            <?php
                        endforeach;
                        ?>
                        </ul>
                        <?php
                    else:
                        ?>

                        <?php
                    endif;

                ?>
                
               
                        
                
            </div>
        </div>
    </div>
@endsection
