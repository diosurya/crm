<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel {{ $title }}</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
  </head>
  <body>
    @include('partials.navbar');
    <div class="container mt-4">
      @yield('container')
    </div>
  </body>
</html>