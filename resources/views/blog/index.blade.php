@extends('blog/master')

@section('content')
	<div class="container-fluid">
    <div class="row">
      <div class="col-md-offset-1 col-md-6">
        <h1>Y hello there!</h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      @foreach ($blogs as $blog)
        <article class="col-md-offset-1 col-md-6">
          <h3 class="h3">
            <a href="{{route('Post\Read',[$blog->id])}}">{{$blog->title}}</a>
            <small>{{Carbon\Carbon::parse($blog->created_at)->format('d-m-Y i')}}</small>
          </h3>
          <p>{{$blog->body}}</p>
          <hr />
        </article>
      @endforeach
    </div>
  </div>

@stop
