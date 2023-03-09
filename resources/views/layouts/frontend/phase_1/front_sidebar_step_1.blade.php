<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{ route('index') }}" class="b-brand">
                <img src="{{ asset('assets/Template style/logo_bf.jpg') }}" alt="" class="w-75 logo logo-lg">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>Dashboard</label>
                    <i class="ti ti-dashboard"></i>
                </li>
                <li class="pc-item {{ Route::is('list_observation')? 'active' : ' ' }}">
                    <a href="{{ route('list_observation') }}" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-list"></i></span>
                        <span class="pc-mtext">Liste observations</span>
                    </a>
                </li>
                <li class="pc-item {{ Route::is('add_observation')? 'active' : ' ' }}">
                    <a href="{{ route('add_observation') }}" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-plus"></i></span>
                        <span class="pc-mtext">Ajouter observation</span>
                    </a>
                </li>
                <li class="pc-item p-2 mt-5">
                    <div class="card text-bg-success p-0 bloc-sw-1">
                        <div class="card-body">
                          <h5 class="card-title h1" style="text-shadow: -1.2px -1.8px #444 !important"> @yield('step_one_ftitle') </h5>
                          <p class="card-text f-18">@yield('step_one_ltitle')</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>