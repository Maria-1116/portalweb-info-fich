<nav class="navbar nav-extended no-padding dark-primary-color" style="background-color: rgb(19, 8, 99)">


    @auth()
        <a href="#" data-target="slide-out" class="sidenav-trigger left show-on-medium-and-up"><i
                class="material-icons">menu</i></a>
    @endauth
    <div class="nav-wrapper">
        <a href="{{ route('raiz') }}" class="brand-logo hide-on-small-only">INGENIERIA INFORMATICA FICH</a>
        @auth()
            <ul id="nav-mobile" class="right">
                <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="waves-effect dark-primary-color-text" type="submit"><i
                            class="material-icons right">exit_to_app</i>Cerrar sesión</a></li>
                <form style="height: 0;" id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </ul>

            @yield('breadcrumb')
        @endauth

        @auth
        <ul id="nav-mobile" class="right">
            <li><a id="fuenteBtn" class="dropdown-trigger" href="#!" data-target="tema"><i class="material-icons right">border_color</i></a></li>
            <li><a id="darkModeBtn" class="dropdown-trigger" href="#!" data-target="tema"><i class="material-icons right">brightness_6</i></a></li>
            <li><a href="{{ route('buscador') }}"><i class="material-icons">search</i></a></li>
            <li>
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            </li>
        </ul>
        @else
        <ul id="nav-mobile" class="right">
            <li><a id="darkModeBtn" class="dropdown-trigger" href="#!" data-target="tema"><i class="material-icons right">brightness_6</i></a></li>
            <li>
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"style="background-color:rgb(146, 43, 33 ); border-color:blue; color:white">Login</a>

            {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif --}}
                    </li>
                </ul>
        @endauth
    </div>
</nav>


<style>
    .fondo {
        background-color: rgb(11, 5, 61);
        padding: 1px 5px;
    }
</style>
@auth()
    <ul id="slide-out" class="sidenav">
        <li>
            <div class="user-view">
                <div class="background">
                    <img
                        src="https://images.pexels.com/photos/768474/pexels-photo-768474.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="responsive-img">
                </div>
                <a href="#user"><img class="circle"
                        src="https://scontent.fvvi1-1.fna.fbcdn.net/v/t1.6435-9/31275713_923889421104893_2175724638519164928_n.jpg?stp=dst-jpg_p960x960&_nc_cat=110&ccb=1-7&_nc_sid=730e14&_nc_ohc=pmp29LRz914AX-j0o0P&_nc_ht=scontent.fvvi1-1.fna&oh=00_AfCdRbmmtdFwNdj2UtqF9VefsYrOKfm8NUuM3J5lS7tLCg&oe=63DAFA5B"></a>
                
                <a href="#name" class="fondo"><span class="white-text name fondo center">{{ auth()->user()->name }}</span></a>
                <a href="#email"><span class="white-text email fondo center">{{ auth()->user()->email }}</span></a>
            </div>
        </li>
        <li><a class="waves-effect" href="{{ route('home') }}"><i class="material-icons">home</i>Inicio</a></li>

        @foreach (auth()->user()->roles->modulo as $modulo)
            <li><a class="waves-effect" href="{{ route($modulo->ruta . '.index') }}"><i
                        class="material-icons">bookmark_border</i>Gestionar {{ $modulo->nombre }}</a></li>
        @endforeach
    </ul>
@endauth
