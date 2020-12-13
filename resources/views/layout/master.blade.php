<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="<?php echo url('/assets/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="<?php echo url('/assets/fonts/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?php echo url('/assets/fonts/ionicons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo url('/assets/css/Navigation-with-Search.css'); ?>">
    <script src="<?php echo url('/assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo url('/assets/bootstrap/js/bootstrap.min.js') ?>"></script>
    @yield('head')
</head>

<body class="bg-light">
@if(Auth::check())
<script>
        console.log('alert');
        /* $('body').on('click', 'button', function(){ */

        
            (function($){
                $(document).ready(function(){
                    var current_longitude = '';
                    var current_latitude = '';
                    if( navigator.geolocation ) {
                        navigator.geolocation.getCurrentPosition( success, fail );
                    } else {
                        console.log('Sorry, your Browser does not support geolocation services');
                    }
                
                    function success(position)
                    {
                        /* document.getElementById('long').value = position.coords.longitude;
                        document.getElementById('lat').value = position.coords.latitude; */
                
                        if(position.coords.longitude != "" && position.coords.latitude != ""){
                            current_longitude = position.coords.longitude;
                            current_latitude = position.coords.latitude;
                        }
                        console.log('current_longitude');
                        console.log(current_longitude);
                        console.log(current_latitude);
                        $.ajax({
                            type:'POST',
                            url:'<?php echo url('/update-my-location')?>',
                            data:'_token=<?php echo csrf_token() ?>&lat='+current_latitude+'&lang='+current_longitude+'',
                            success:function(data) {
                                if(data.success == true) {
                                    $('.hire_me_alert').html(data.message).slideDown();
                                }
                                
                                
                            }, 
                            error: function(){
                                $('.overlay_wrapper').hide();
                            }
                        });
                    }
                
                    function fail()
                    {
                        // Could not obtain location
                        console.log('unable to get your location');
                        
                    }
                });
            })(jQuery);
        /* }); */
        
</script>
<nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand" href="{{ url ('/')}}" style="color: #5cb85c ;font-family: Poppins, sans-serif;font-size: 36px;font-weight: bold;font-style: normal;">Tutor Town</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" id="togle"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto" style="font-size: 18px;">
                @if(Auth::User()->type=='tutor')

                 
                 <li class="nav-item" role="presentation" style="font-size: 16px;"><a class="nav-link active" href="{{url('/requests')}}" style="color: rgb(0,,0,0);font-size: 20px;">Requests&nbsp; &nbsp; &nbsp;</a></li>
                   @else
                   <li class="nav-item" role="presentation" style="font-size: 16px;"><a class="nav-link active" href="{{url('/postr')}}" style="color: rgb(0,,0,0);font-size: 20px;">Post Requests&nbsp; &nbsp; &nbsp;</a></li>
                   <li class="nav-item" role="presentation" style="font-size: 16px;"><a class="nav-link active" href="{{url('/')}}" style="color: rgb(0,,0,0);font-size: 20px;">Search&nbsp; &nbsp; &nbsp;</a></li>
                   <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('/notifications')}}" style="color: rgb(0,0,0);">Notifications&nbsp; &nbsp; &nbsp;</a></li>  
                   
                   
                    @endif
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('/profile')}}" style="color: rgb(0,0,0);">Profile&nbsp; &nbsp; &nbsp;</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('/chat')}}" style="color: rgb(0,0,0);">Messages&nbsp; &nbsp; &nbsp;</a></li>
                   
                    
                    @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                <li class="nav-item dropdown">
                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a> 

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                            </ul>
</div>
</nav>
@else
<nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand" href="#" style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 36px;font-weight: bold;font-style: normal;">Tutor Town</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" id="togle"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav nav-pills nav-fill navbar-nav ml-auto" style="font-size: 18px;">
                    @guest
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                <li class="nav-item dropdown">
                <button class="btn btn-outline-success"> <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a> 

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></button>  

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                            </ul>
</div>
</nav>
@endif
@yield('content')

</body>

</html>
