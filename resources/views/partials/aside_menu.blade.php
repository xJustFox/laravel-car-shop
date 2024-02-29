<aside class="asideMenu">
    <ul class=" list-unstyled ">
        <li>
            <a class="asideMenuLink" href="{{ route('admin.dashboard') }}">
                <i class="fa-solid fa-gauge {{ Route::currentRouteName() == 'admin.dashboard' ? 'activeRoute' : '' }}"></i>
                <span class="{{ Route::currentRouteName() == 'admin.dashboard' ? 'activeRoute' : '' }}">{{ __('Dashboard') }}</span>
            </a>
        </li>
        <li>
            <a class="asideMenuLink" href="{{ route('admin.cars.index')}}">
                <i class="fa-solid fa-car {{ Route::currentRouteName() == 'admin.cars.index' ? 'activeRoute' : '' }}"></i>
                <span class="{{ Route::currentRouteName() == 'admin.cars.index' ? 'activeRoute' : '' }}">{{ __('Cars') }}</span>
            </a>
        </li>
    </ul>
</aside>