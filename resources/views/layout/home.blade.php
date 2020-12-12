@extends('layout.master')
@section('head')
<link rel="stylesheet" href="<?php echo url('/assets/css/styles1.css') ?>">
@endsection

@section('content')
    <section id="hero">
        <div id="hero-div" style="width: 100%;height: 100%;">
        
        <div class="container justify-content-center align-items-center align-content-center " id="chero" style="margin-left: auto;margin-right: auto;">
        <form method="post" action = "{{ url('search')}}">
        @csrf   
        <div class="row">
                <div class="col">
                    <div class="d-flex" id="divc">
                        <input name="search_item" class="form-control form-control-lg bg-white border-white shadow-none form-control d-flex flex-row flex-grow-1 flex-shrink-1 flex-fill justify-content-center" type="text" id="search" style="width:700px;height: 50px;margin-right: 0px;margin-left: 0px;"
                            placeholder="search here" autocomplete="on">
                        </div>
                </div>
            </div>
        </div>
        <div class="row flex-grow-1 flex-shrink-1 justify-content-center align-items-center align-content-center align-self-center" id="srow">
            <div class="col-auto align-self-end"><button type="submit" class="btn btn-success btn-block text-uppercase text-white d-flex flex-grow-1 flex-shrink-1 justify-content-center align-items-center"  id="btns">Search</button></div>
            <div class="col-auto align-self-end"><a class="btn btn-info text-uppercase text-white d-flex flex-grow-1 flex-shrink-1 align-items-center" href="{{url ('/nearby')}}" id="btns2"><i class="fa fa-location-arrow"></i>&nbsp; View nearby</a></div>
</form>
        </div>

        </div>
    </section>
    @endsection
 
