<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CRM - @yield('title')</title>
  </head>
  <body>
    @include('nav')
    <hr>

    @yield('content')

    <br>
    @if(session('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
    @endif
  </body>
</html>
