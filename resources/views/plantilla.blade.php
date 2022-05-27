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
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        table, tr, td{
            border: 1px solid black;
        }
        .header-col{
      background: #E3E9E5;
      color:#536170;
      text-align: center;
      font-size: 20px;
      font-weight: bold;
    }
    .header-calendar{
      background: #44E22F;color:white;
    }
    .box-day{
      border:1px solid #E3E9E5;
      height:150px;
    }
    .box-dayoff{
      border:1px solid #E3E9E5;
      height:150px;
      background-color: #ccd1ce;
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
                            <a href="{{route('crearjunta')}}" class="dashboard-nav-item">Crear Miembros</a>
                            <a href="{{route('crearjunta')}}" class="dashboard-nav-item">Calendario</a>
                            <a href="{{route('correointerno')}}" class="dashboard-nav-item">Foro Junta</a>
                        @endif

                        @if (Auth::user()->rol=="Secretario" || Auth::user()->rol=="Tesorero")
                            <a href="{{route('crearjunta')}}" class="dashboard-nav-item">Calendario</a>
                            <a href="{{route('gestion_eco')}}" class="dashboard-nav-item">Gestón Economica</a>
                            <a href="{{route('correointerno')}}" class="dashboard-nav-item">Foro Junta</a>
                        @endif

                        @if (Auth::user()->rol=="Vocal")
                            <a href="{{route('crearjunta')}}" class="dashboard-nav-item">Calendario</a>
                            <a href="{{route('correointerno')}}" class="dashboard-nav-item">Foro Junta</a>
                        @endif

                        @if (Auth::user()->rol=="Director Deportivo")
                            <a href="{{route('crearjunta')}}" class="dashboard-nav-item">Control Assistencia</a>
                            <a href="{{route('crearcoordinador')}}" class="dashboard-nav-item">Crear Coordinadores</a>
                            <a href="{{route('crearjunta')}}" class="dashboard-nav-item">Calendario de Partidos</a>
                            <a href="{{route('crearjunta')}}" class="dashboard-nav-item">Calendario de Reuniones</a>
                            <a href="{{route('estadisticadejugadoresclub')}}" class="dashboard-nav-item">Estadisticas Jugadores</a>
                            <a href="{{route('blogentrenador')}}" class="dashboard-nav-item">Foro Entrenadores</a>
                            <a href="{{route('correointerno')}}" class="dashboard-nav-item">Foro Junta</a>
                            <a href="{{route('verplantilla')}}" class="dashboard-nav-item">Ver Plantillas</a>
                            
                            
                        @endif 

                        @if (Auth::user()->rol=="Coordinador")
                            <a href="{{route('crearjunta')}}" class="dashboard-nav-item">Control Asistencia</a>
                            <a href="{{route('crearjunta')}}" class="dashboard-nav-item">Calendario de Partidos</a>
                            <a href="{{route('equipos')}}" class="dashboard-nav-item">Equipos</a>
                            <a href="{{route('estadisticadejugadoresclub')}}" class="dashboard-nav-item">Estadisticas Jugadores</a>
                            <a href="{{route('blogentrenador')}}" class="dashboard-nav-item">Foro Entrenadores</a>
                            <a href="{{route('crearentrenador')}}" class="dashboard-nav-item">Crear Entrenadores</a>
                            <a href="{{route('crearhorario')}}" class="dashboard-nav-item">Crear horarios</a>
                        @endif 

                        @if (Auth::user()->rol=="Entrenador")
                            <a href="{{route('crearjunta')}}" class="dashboard-nav-item">Calendario de Partidos</a>
                            <a href="{{route('crearjunta')}}" class="dashboard-nav-item">Control Asistencia</a>
                            <a href="{{route('crearjugadores')}}" class="dashboard-nav-item">Crear Jugadores</a>
                            <a href="{{route('estadisticadejugadores')}}" class="dashboard-nav-item">Estadisticas Jugadores</a>
                            <a href="{{route('blogentrenador')}}" class="dashboard-nav-item">Foro Entrenadores</a>
                            <a href="{{route('horarios')}}" class="dashboard-nav-item">Visualizar Horarios</a>
                        @endif 
                        
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