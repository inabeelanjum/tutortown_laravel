@extends('layout.master')
   
@section('head')
    <link rel="stylesheet" href="assets/css/styles.css">
@endsection

@section('content')
    <section id="hero">
        <div id="hero-div" style="width: 100%;height: 100%;background-color: rgba(0,0,0,0.32);">
        <div class="container justify-content-center align-items-center align-content-center " id="chero" style="margin-left: auto;margin-right: auto;">
            <div class="row">
                <div class="col">
                    <div class="d-flex" id="divc"><input class="form-control form-control-lg bg-white border-white shadow-none form-control d-flex flex-row flex-grow-1 flex-shrink-1 flex-fill justify-content-center" type="search" id="search" style="width:700px;height: 50px;margin-right: 0px;margin-left: 0px;"
                            placeholder="search here" autocomplete="on"></div>
                </div>
            </div>
        </div>
        <div class="row flex-grow-1 flex-shrink-1 justify-content-center align-items-center align-content-center align-self-center" id="srow">
            <div class="col-auto align-self-end"><a class="btn btn-success btn-block text-uppercase text-white d-flex flex-grow-1 flex-shrink-1 justify-content-center align-items-center" role="button" id="btns">Search</a></div>
            <div class="col-auto align-self-end"><a class="btn btn-info text-uppercase text-white d-flex flex-grow-1 flex-shrink-1 align-items-center" role="button" id="btns2"><i class="fa fa-location-arrow"></i>&nbsp; View nearby</a></div>
        </div>
        </div>
    </section>
@endsection
