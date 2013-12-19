<!DOCTYPE html>
<!--[if IE 8]>               <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Laravel.IO - The Official Laravel Framework Community Portal</title>

  @section('styles')
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('stylesheets/app.css') }}">
  @show

  <script src="{{ asset('javascripts/vendor/custom.modernizr.js') }}"></script>
</head>
<body>

  @include('layouts._top_nav')


  <div class="holder">
      @include('layouts._flash')
     <div class="table">
        {{ $content }}
      </div>
  </div>

  @include('layouts._footer')

  @section('scripts')
  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  @show
</body>
</html>