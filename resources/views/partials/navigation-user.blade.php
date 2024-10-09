
<div class="sticky-md-top">
    <div class="nav-container">
        <div class="card text-center">
        <div class="card-header">
            <div class="nav-content">
                <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('user.dashboard') ? 'active' : '' }}" aria-current="{{ request()->routeIs('user.dashboard') ? 'true' : 'false' }}" href="{{ route('user.dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">

                @csrf

                <a href="route('logout')" onclick="event.preventDefault();
                                this.closest('form').submit();" class="  ring-transparent">
                    {{ __('Log Out') }}
                </a>
                </form>
                </li>
                </ul>
            </div>
            
            </div>
        </div>
    </div>  
</div>