<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('ckeditor/ckeditor.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Always expand</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExample02">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/statistik">STATISTIK <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/rumahsakit">RUMAH SAKIT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Daftar Vaksin</a>
              </li>
          </ul>
          <form class="form-inline my-2 my-md-0">
            <input class="form-control" type="text" placeholder="Search">
          </form>
        </div>
      </nav>
    </head>
    
    <body>
       @yield('content')
    </body>
</html>
