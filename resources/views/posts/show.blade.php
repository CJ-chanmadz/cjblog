@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="/posts">Go Back</a>
        <h1>{!!$post->title!!}</h1>
        <img style="width:100%;" src="/storage/cover_images/{{$post->cover_image}}" alt="image"><br><br>
        <div>
            {!!$post->body!!}
        </div><hr>
        <small>Written on {{$post->created_at}} By {{$post->user->name}}</small><hr>
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
                <a class="btn btn-success" href="/posts/{{$post->id}}/edit">Edit</a>
                {!!Form::open(['action'=> ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                {!!Form::close()!!}
            @endif
        @endif
    </div>
@endsection