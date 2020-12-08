@extends('layout.master')
@section('head')
    <link rel="stylesheet" href="<?php echo url('/assets/css/styles.css') ?>">
@endsection

@section('content')
  
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
