@extends('layouts.app')

@section('content')
<div id="myCarousel" class="bgimage carousel slide" data-ride="carousel">
    <div id="overlay">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="container text-center welcome">
                    <h1 style="font-size: 60px;font-weight: 600;">{{$title}}</h1>
                    <p style="font-size:20px;">This is the laravel application from the laravel from scratch Youtube Serries.</p>
                    @if(Auth::guest())
                        <p>
                            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
                            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
                        </p>
                    @endif
                </div>  
            </div>
  
            <div class="item">
                <div class="container text-center welcome">
                    <h1 style="font-size: 60px;font-weight: 600;">{{$title}}</h1>
                    <p style="font-size:20px;">This is the laravel application from the laravel from scratch Youtube Serries.</p>
                    @if(Auth::guest())
                        <p>
                            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
                            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
                        </p>
                    @endif
                </div>  
            </div>
        </div>
    
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
  </div>

  <!-- Container (About Section) -->

<div id="about" class="container-fluid bg-grey">
    <div class="row">
      <div class="col-sm-3">
        <span class="glyphicon glyphicon-globe logo slideanim"></span>
      </div>
      <div class="col-sm-9">
        <h2>About Company Page</h2><br>
        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
  </div>
@endsection