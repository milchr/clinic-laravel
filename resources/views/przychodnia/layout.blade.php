<!DOCTYPE html>
<html>
<head>
    <title>@yield('tytul')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/przychodnia/main.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>
<body>
  <nav class="navbar navbar-dark bg-dark navbar-expand-md">
    <a class="navbar-brand" href="/">Przychodnia</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainmenu">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/lekarze"> Lekarze </a>
        </li>
        @if(isset(Auth::user()->name))
          @if(Auth::user()->name == 'admin')
        <li class="nav-item">
          <a class="nav-link" href="/pacjenci"> Pacjenci </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/wizyty"> Wizyty </a>
        </li>
          @endif
          @if(Auth::user()->name != 'admin')
          <li>
            <a class="nav-link" href="{{url('/patient_visits')}}"> Twoje wizyty </a>
          </li>
          <li>
            <a class="nav-link" href="{{url('/create_application')}}"> Zaplanuj wizytę </a>
          </li>
            @endif
        @endif
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >

            @if(isset(Auth::user()->name))
            {{Auth::user()->name}}
            @else
            Konto
            @endif
            <i class='fas fa-user-circle' style='font-size:20px'></i>

          </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          @if(isset(Auth::user()->name))
          <a class="dropdown-item" href="{{url('/logout')}}"> Wyloguj się </a>
          @else
          <a class="dropdown-item" href="{{url('/login')}}"> Zaloguj się </a>
          <a class="dropdown-item" href="{{url('/register')}}"> Zarejestruj się </a>
          @endif
        </div>
      </li>
      </ul>
    </div>
   </nav>
   @yield('lista')
   @yield('addForm')
   @yield('login')
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 </body>
</html>
