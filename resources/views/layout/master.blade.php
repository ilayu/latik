<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}">
</head>
<body>

@yield('header')

<div class="container">
  @yield('container')
</div>

@yield('footer')

<script src="//code.jquery.com/jquery.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script src="{{  asset('/js/ckeditor/ckeditor.js') }}"
  type="text/javascript" charset="utf-8" ></script>

</body>
</html>

@yield('script')