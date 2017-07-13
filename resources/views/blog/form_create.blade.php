@extends('layouts.master')
@section('content')
        <h1>Publish a post</h1>
        <hr>
 <div class="col-md-8 ">
        <form method="POST" action="/blog/store">
           {{ csrf_field() }}
          <div class="form-group">
            <label for="title">Title </label>
            <input type="text" class="form-control" id="titel" placeholder="Blog Title" name="title" >
          </div>

          <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body"  id="body" class="form-control" ></textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>
          </div>

          @include('layouts.errors')
        </form>
</div>


@endsection
