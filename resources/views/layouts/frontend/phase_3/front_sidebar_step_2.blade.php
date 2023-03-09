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
                <li class="pc-item {{ Route::is('profile_vp')? 'active' : ' ' }}">
                    <a href="{{ route('profile_vp') }}" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-list"></i></span>
                        <span class="pc-mtext">Profile</span>
                    </a>
                </li>
                <li class="pc-item {{ Route::is('repertoire_rapports_an')? 'active' : ' ' }}">
                    <a href="{{ route('repertoire_rapports_an') }}" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-list"></i></span>
                        <span class="pc-mtext">Répertoire rapports</span>
                    </a>
                </li>
                <li class="pc-item {{ Route::is('rapports_an_validate')? 'active' : ' ' }}">
                    <a href="{{ route('rapports_an_validate') }}" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-plus"></i></span>
                        <span class="pc-mtext">Rapports validées</span>
                    </a>
                </li>
                <li class="pc-item p-2 mt-5">
                    <div class="card text-bg-success p-0 bloc-sw-1">
                        <div class="card-body">
                          <h5 class="card-title h1" style="text-shadow: -1.2px -1.8px #444 !important">Sanctions</h5>
                          <p class="card-text f-18">le Collèges des conseillers</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>