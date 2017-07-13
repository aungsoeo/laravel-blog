@extends('layouts.master')
@section('content')

<div class="col-sm-8 blog-main">
    @foreach ($blogs as $blog)
      @include('blog.post')
    @endforeach

</div>
{{$blogs->render()}}


@endsection
