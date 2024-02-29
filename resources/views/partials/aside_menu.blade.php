<aside class="asideMenu">
    <ul class=" list-unstyled ">
        {{-- Dashboard --}}
        <li>
            <a class="asideMenuLink {{ Route::currentRouteName() == 'admin.dashboard' ? 'activeRoute' : '' }}" href="{{ route('admin.dashboard') }}">
                <i class="fa-solid fa-gauge "></i>
                <span>{{ __('Dashboard') }}</span>
            </a>
        </li>
        {{-- Cars --}}
        <li>
            <a class="asideMenuLink {{ (Route::currentRouteName() == 'admin.cars.index' || Route::currentRouteName() == 'admin.cars.create' || Route::currentRouteName() == 'admin.cars.show')  ? 'activeRoute' : '' }}" href="{{ route('admin.cars.index')}}">
                <i class="fa-solid fa-car"></i>
                <span>{{ __('Cars') }}</span>
            </a>
        </li>
        {{-- Optionals --}}
        <li>
            <a class="asideMenuLink {{ (Route::currentRouteName() == 'admin.optionals.index' || Route::currentRouteName() == 'admin.optionals.create' || Route::currentRouteName() == 'admin.optionals.show')  ? 'activeRoute' : '' }}" href="{{ route('admin.optionals.index')}}">
                <i class="fa-solid fa-car-on"></i>
                <span>{{ __('Optionals') }}</span>
            </a>
        </li>
        {{-- Brands --}}
        <li>
            <a class="asideMenuLink {{ (Route::currentRouteName() == 'admin.brands.index' || Route::currentRouteName() == 'admin.brands.create' || Route::currentRouteName() == 'admin.brands.show')  ? 'activeRoute' : '' }}" href="{{ route('admin.brands.index')}}">
                <i class="fa-solid fa-briefcase"></i>
                <span>{{ __('Brands') }}</span>
            </a>
        </li>
    </ul>
</aside>