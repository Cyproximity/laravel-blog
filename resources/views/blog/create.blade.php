@extends('blog/master')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Create your post.</h2>
        <div class="container-fluid">
          <form name="BlogPost" method="POST" action="{{route('Post\Create\Store')}}">
            <div class="form-group">
              <label for="BlogTitle">Title</label>
              <input id="BlogTitle" type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
              <label for="BlogBody">Body</label>
              <textarea id="BlogBody" class="form-control" name="body" rows="4"></textarea>
            </div>
            <div class="form-group">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="btn btn-primary">Post</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@stop
