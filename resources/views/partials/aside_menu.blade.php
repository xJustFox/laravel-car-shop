<aside class="asideMenu">
    <ul class=" list-unstyled ">
        {{-- Dashboard --}}
        <li>
            <a class="asideMenuLink" href="{{ route('admin.dashboard') }}">
                <i class="fa-solid fa-gauge {{ Route::currentRouteName() == 'admin.dashboard' ? 'activeRoute' : '' }}"></i>
                <span class="{{ Route::currentRouteName() == 'admin.dashboard' ? 'activeRoute' : '' }}">{{ __('Dashboard') }}</span>
            </a>
        </li>
        {{-- Cars --}}
        <li>
            <a class="asideMenuLink" href="{{ route('admin.cars.index')}}">
                <i class="fa-solid fa-car {{ Route::currentRouteName() == 'admin.cars.index' ? 'activeRoute' : '' }}"></i>
                <span class="{{ Route::currentRouteName() == 'admin.cars.index' ? 'activeRoute' : '' }}">{{ __('Cars') }}</span>
            </a>
        </li>
        {{-- Optionals --}}
        <li>
            <a class="asideMenuLink" href="{{ route('admin.optionals.index')}}">
                <i class="fa-solid fa-car-on {{ Route::currentRouteName() == 'admin.optionals.index' ? 'activeRoute' : '' }}"></i>
                <span class="{{ Route::currentRouteName() == 'admin.optionals.index' ? 'activeRoute' : '' }}">{{ __('Optionals') }}</span>
            </a>
        </li>
        {{-- Brands --}}
        <li>
            <a class="asideMenuLink" href="{{ route('admin.brands.index')}}">
                <i class="fa-solid fa-briefcase {{ Route::currentRouteName() == 'admin.brands.index' ? 'activeRoute' : '' }}"></i>
                <span class="{{ Route::currentRouteName() == 'admin.brands.index' ? 'activeRoute' : '' }}">{{ __('Brands') }}</span>
            </a>
        </li>
    </ul>
</aside>