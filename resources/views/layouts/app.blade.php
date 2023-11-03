<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>pr
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('MiFarm', 'MiFarm') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <style>
                        .custom-select {
                            position: relative;
                            display: inline-block;
                            width: 200px; /* Ajusta el ancho según tus necesidades */
                        }

                        select {
                            width: 100%;
                            padding: 10px;
                            border: 1px solid #ccc;
                            border-radius: 4px;
                            background-color: #f4f7f8;
                            color: #384047;
                            font-family: 'Nunito', sans-serif;
                            cursor: pointer; /* Cambia el cursor al pasar sobre el select */
                        }

                        select:hover {
                            cursor: pointer; /* Cambia el cursor al pasar sobre el select */
                        }

                        /* Estilo para el menú desplegable */
                        select:hover::after {
                            content: '\25BC'; /* Flecha hacia abajo */
                            position: absolute;
                            top: 50%;
                            right: 10px;
                            transform: translateY(-50%);
                            pointer-events: none;
                        }
                    </style>
                    @role('admin')
                    <div class="custom-select">
                        <select class="custom-select" name="redireccion" id="redireccion" onchange="window.location.href = this.value;">
                            <option selected="selected">Selecciones Una Opcion</option>
                            <option value="{{ route('cargos.index') }}"> <a href="{{ route('cargos.index') }}">Cargos</a> </option>
                            <option value="{{ route('empleados.index') }}"> <a href="{{ route('empleados.index') }}">Empleados</a> </option>
                            <option value="{{ route('clientes.index') }}"> <a href="{{ route('clientes.index') }}">Clientes</a> </option>
                            <option value="{{ route('productos.index') }}"> <a href="{{ route('productos.index') }}">Productos</a> </option>
                            <option value="{{ route('provedores.index') }}"> <a href="{{ route('provedores.index') }}">Proveedores</a> </option>
                            <option value="{{ route('farmacias.index') }}"> <a href="{{ route('farmacias.index') }}">Farmacias</a> </option>
                            <option value="{{ route('ventas.index') }}"> <a href="{{ route('ventas.index') }}">Ventas</a> </option>
                        </select>
                        @endrole
                        @role('empleado')
                        <div class="custom-select">
                            <select class="custom-select" name="redireccion" id="redireccion" onchange="window.location.href = this.value;">
                                <option selected="selected">Selecciones Una Opcion</option>
                                <option value="{{ route('cargos.index') }}"> <a href="{{ route('cargos.index') }}">Cargos</a> </option>
                                <option value="{{ route('empleados.index') }}"> <a href="{{ route('empleados.index') }}">Empleados</a> </option>
                                <option value="{{ route('clientes.index') }}"> <a href="{{ route('clientes.index') }}">Clientes</a> </option>
                                <option value="{{ route('productos.index') }}"> <a href="{{ route('productos.index') }}">Productos</a> </option>
                                <option value="{{ route('provedores.index') }}"> <a href="{{ route('provedores.index') }}">Proveedores</a> </option>
                                <option value="{{ route('farmacias.index') }}"> <a href="{{ route('farmacias.index') }}">Farmacias</a> </option>
                                <option value="{{ route('ventas.index') }}"> <a href="{{ route('ventas.index') }}">Ventas</a> </option>
                            </select>
                            @endrole
                            @role('cliente')
                            <div class="custom-select">
                                <select class="custom-select" name="redireccion" id="redireccion" onchange="window.location.href = this.value;">
                                    <option selected="selected">Selecciones Una Opcion</option>
                                    <option value="{{ route('cargos.index') }}"> <a href="{{ route('cargos.index') }}">Cargos</a> </option>
                                    <option value="{{ route('empleados.index') }}"> <a href="{{ route('empleados.index') }}">Empleados</a> </option>
                                    <option value="{{ route('clientes.index') }}"> <a href="{{ route('clientes.index') }}">Clientes</a> </option>
                                    <option value="{{ route('productos.index') }}"> <a href="{{ route('productos.index') }}">Productos</a> </option>
                                    <option value="{{ route('provedores.index') }}"> <a href="{{ route('provedores.index') }}">Proveedores</a> </option>
                                    <option value="{{ route('farmacias.index') }}"> <a href="{{ route('farmacias.index') }}">Farmacias</a> </option>
                                    <option value="{{ route('ventas.index') }}"> <a href="{{ route('ventas.index') }}">Ventas</a> </option>
                                </select>
                                @endrole
                    </div><!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
