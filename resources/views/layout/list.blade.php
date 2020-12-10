@extends('layout.master')
@section('head')
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Product-List.css">
    <link rel="stylesheet" href="assets/css/styles.css">
@endsection


@section('content')
    <div class="row product-list">
    @foreach($tutors as $tutor):
        <div class="col-sm-6 col-md-4 product-item">
            <div class="product-container">
                <div class="row">
                    <div class="col-md-12"><a class="product-image" href="#"><img src=""></a></div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <h2><a href="#">{{$tutor->name}}</a></h2>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="product-description">{{$tutor->about}} </p>
                        <div class="row">
                        <a class="float-right btn btn-primary" href="<?php echo url('/tutor/profile/'.$tutor->id) ?>">View Profile</a>
                            <div class="col-6">
                                <p class="product-price">{{$tutor->charges}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    @endsection