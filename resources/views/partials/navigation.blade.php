
<div class="sticky-md-top">
    <div class="nav-container">
        <div class="card text-center">
        <div class="card-header">
            <div class="nav-content">
                <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" aria-current="{{ request()->routeIs('home') ? 'true' : 'false' }}" href="{{ route('home') }}">Inicio</a>
                </li>
                @if (Route::has('login'))
                @auth

                <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">

                @csrf

                <a href="route('logout')" onclick="event.preventDefault();
                                this.closest('form').submit();" class="text-black  ring-transparent">
                    {{ __('Log Out') }}
                </a>
                </form>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" aria-current="{{ request()->routeIs('login') ? 'true' : 'false' }}" href="{{ route('login') }}">Iniciar Sesion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('register') ? 'active' : '' }}" aria-current="{{ request()->routeIs('register') ? 'true' : 'false' }}" href="{{ route('register') }}">Registrar</a>
                </li>
                @endauth
                @endif
                </ul>
            </div>
            
            </div>
        </div>
    </div>  
</div>