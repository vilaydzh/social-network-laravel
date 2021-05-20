<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale() ) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>{{ config('app.name') }}</title>

  </head>
<body>

  @include('layouts.parts.nav')

  <div class="container content">

    @include('layouts.parts.alerts')

    @yield('content')

    <hr class="row">
  </div>

  <footer class="container my-3 d-flex justify-content-between">
    <div>
      <a href="{{ route('home') }}"> {{ config('app.name') }}</a>
      © {{ date('Y') }}
    </div>
    <div>
      <a href="#">О {{ config('app.name') }}</a>
      <a href="#">Правила</a>
    </div>
  </footer>

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://cdn.socket.io/4.0.2/socket.io.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>
  <script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
    $('[data-toggle="popover"]').popover()
  })
  </script>

  @stack('scripts')

  </body>
</html>
