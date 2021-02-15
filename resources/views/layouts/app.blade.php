<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
    <div id="app">
  
                <nav class="navbar navbar-dark bg-dark ">
                    <ul class="nav ">
                            <li class="nav-item justify-content-end">
                            <a class="navbar-brand" href="{{ url('/opinion') }}">
                                Lista de quejas
                            </a>
                            </li>
                        
                            <li class="nav-item justify-content-end">
                            <a class="navbar-brand" href="{{ url('/opinion/create') }}">
                                Ingresar quejas
                            </a>
                            </li>
                        
                    </ul>
                </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<footer class="bg-light text-center text-lg-start">


     
      
      <!-- Copyright  Vista del footer -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright:
        <a class="text-dark" href="https://mdbootstrap.com/">Freddy Gonzalez Morales</a>
      </div>
      <!-- Copyright -->
</footer>

</html>
