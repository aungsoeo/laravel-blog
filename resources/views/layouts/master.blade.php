<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{!! asset('css/bootstrap.min.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{!! asset('css/ie10-viewport-bug-workaround.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <!-- Custom styles for this template -->
    <link href="{!! asset('css/blog.css') !!}" media="all" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="{!! asset('js/ie-emulation-modes-warning.js') !!}"></script>
  </head>

  <body>

    @include('layouts.nav')

    <div class="container">
      @if($flash = session('message'))
        <div class="alert alert-success " role="alert">
          {{$flash}}
        </div>
      @endif

        <div class="blog-header">
          <h1 class="blog-title">The Bootstrap Blog</h1>
          <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
        </div>

      <div class="row">
          @yield('content')
          @include('layouts.sidebar')
      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>Blog template built for <a href="#">Bootstrap</a> by <a href="#">aso@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
      <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
