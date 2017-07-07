<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Sample App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css?'.time()) }}
>
  </head>
  <body>
    @include('layouts._header')

    <div class="container">
      <div class="col-md-offset-1 col-md-10">
        @include('shared.messages')
        @yield('content')
        @include('layouts._footer')
      </div>
    </div>
  </body>
</html>
