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

  <!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
        <br>
        <div class="row slideanim">
          <div class="col-sm-4">
            <span class="glyphicon glyphicon-off logo-small"></span>
            <h4>POWER</h4>
            <p>Lorem ipsum dolor sit amet..</p>
          </div>
          <div class="col-sm-4">
            <span class="glyphicon glyphicon-heart logo-small"></span>
            <h4>LOVE</h4>
            <p>Lorem ipsum dolor sit amet..</p>
          </div>
          <div class="col-sm-4">
            <span class="glyphicon glyphicon-lock logo-small"></span>
            <h4>JOB DONE</h4>
            <p>Lorem ipsum dolor sit amet..</p>
          </div>
        </div>
        <br><br>
        <div class="row slideanim">
          <div class="col-sm-4">
            <span class="glyphicon glyphicon-leaf logo-small"></span>
            <h4>GREEN</h4>
            <p>Lorem ipsum dolor sit amet..</p>
          </div>
          <div class="col-sm-4">
            <span class="glyphicon glyphicon-certificate logo-small"></span>
            <h4>CERTIFIED</h4>
            <p>Lorem ipsum dolor sit amet..</p>
          </div>
          <div class="col-sm-4">
            <span class="glyphicon glyphicon-wrench logo-small"></span>
            <h4 style="color:#303030;">HARD WORK</h4>
            <p>Lorem ipsum dolor sit amet..</p>
          </div>
        </div>
      </div>
@endsection