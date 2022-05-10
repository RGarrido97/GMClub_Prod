<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GMClub - Escritorio</title>
    <link href="{{ asset('styles/dashboard.css')}}" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/aab59f2cd6.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
        table, tr, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class='dashboard'>
        <div class="dashboard-nav">
            <header>
                <a href="{{route('home')}}" style="text-decoration: none; text-align:left" class="dashboard-nav-item"> {{ Auth::user()->name }} - {{ Auth::user()->rol }}</a>
            </header>
            <nav class="dashboard-nav-list">
                        <a href="{{route('editarperfil')}}" class="dashboard-nav-item">Perfil</a>
                        @if (Auth::user()->rol=="Presidente")
                            <a href="{{route('crearjunta')}}" class="dashboard-nav-item">Crear Junta</a>
                        @endif 
                        @if (Auth::user()->rol=="Secretario" || Auth::user()->rol=="Tesorero")
                            <a href="{{route('crearjunta')}}" class="dashboard-nav-item">Gestón Economica</a>
                        @endif 
                        @if (Auth::user()->rol=="Director Deportivo" || Auth::user()->rol=="Coordinador")
                            <a href="{{route('crearjunta')}}" class="dashboard-nav-item">Control Assistencia</a>
                            <a href="{{route('crearjunta')}}" class="dashboard-nav-item">Crear coordinadores</a>
                            <a href="{{route('crearjunta')}}" class="dashboard-nav-item">Calendario de partidos</a>
                            <a href="{{route('crearjunta')}}" class="dashboard-nav-item">Ver plantillas</a>
                            <a href="{{route('crearjunta')}}" class="dashboard-nav-item">Estadisticas Jugadores</a>
                            <a href="{{route('crearjunta')}}" class="dashboard-nav-item">Blog Entrenadores</a>
                        @endif 
                        @if (Auth::user()->rol=="Coordinador")
                            <a href="{{route('crearjunta')}}" class="dashboard-nav-item">Crear Entrenadores</a>
                            <a href="{{route('crearjunta')}}" class="dashboard-nav-item">Generar plantillas</a>
                            <a href="{{route('crearjunta')}}" class="dashboard-nav-item">Crear horarios</a>
                        @endif 
                        @if (Auth::user()->rol=="Entrenador")
                            <a href="{{route('crearjunta')}}" class="dashboard-nav-item">Crear Entrenadores</a>
                            <a href="{{route('crearjunta')}}" class="dashboard-nav-item">Generar plantillas</a>
                            <a href="{{route('crearjunta')}}" class="dashboard-nav-item">Crear horarios</a>
                        @endif 
                        <a href="{{route('correointerno')}}" class="dashboard-nav-item">Correo Interno</a>
                        <a href="{{route('editarperfil')}}" class="dashboard-nav-item">Calendario</a>
              
              
                                    <a class="dashboard-nav-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
            </nav>
        </div>
        <div class='dashboard-app'>
            <header class='dashboard-toolbar'>@yield('header')</header>
            <div class='dashboard-content'>
                @yield('content')
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('js/dahsboard.js') }}"></script>
</html>