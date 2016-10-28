@extends('blog/master')

@section('content')
<article class="row">
  <div class="col-md-offset-1 col-md-8">
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
  </div>
</article>
@stop
