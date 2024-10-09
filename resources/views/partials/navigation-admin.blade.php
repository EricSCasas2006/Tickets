
<div class="sticky-md-top">
    <div class="nav-container">
        <div class="card text-center">
        <div class="card-header">
            <div class="nav-content">
                <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" aria-current="{{ request()->routeIs('dashboard') ? 'true' : 'false' }}" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('profile.edit') ? 'active' : '' }}" aria-current="{{ request()->routeIs('profile.edit') ? 'true' : 'false' }}" href="{{ route('profile.edit') }}">Perfil</a>
                </li>
                <li class="nav-item"><form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </li>
                </ul>
            </div>
            
            </div>
        </div>
    </div>  
</div>