<!doctype html>
<html lang="en">
@include('partials._head')
<body>
    <!-- Default Boostrap Navbar -->
@include('partials._nav')
<div class="container">
@yield('content')
@include('partials._footer')
</div><!-- end of container -->

@include('partials._javascript')

  </body>
</html>