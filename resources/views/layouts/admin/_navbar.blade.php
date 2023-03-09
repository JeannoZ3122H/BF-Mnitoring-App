    <div class="m-header">
        <a href="{{ route('admin') }}" class="b-brand">
            <img src="../assets/images/logo-dark.svg" alt="" class="logo
                logo-lg" />
        </a>
        <div class="pc-h-item">
            <a href="#" class="pc-head-link head-link-secondary m-0"
                id="sidebar-hide">
                <i class="ti ti-menu-2"></i>
            </a>
        </div>
    </div>
    <div class="header-wrapper">
        <div class="me-auto pc-mob-drp">
            <ul class="list-unstyled">
                <li class="pc-h-item header-mobile-collapse">
                    <a href="#" class="pc-head-link head-link-secondary
                        ms-0" id="mobile-collapse">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
                <li class="dropdown pc-h-item d-inline-flex d-md-none">
                    <a class="pc-head-link head-link-secondary
                        dropdown-toggle arrow-none m-0"
                        data-bs-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <i class="ti ti-search"></i>
                    </a>
                    <div class="dropdown-menu pc-h-dropdown drp-search">
                        <button type="button" class="btn btn-shadow btn-warning text-dark">Retour sur le site</button>
                    </div>
                </li>
                <li class="pc-h-item d-none d-md-inline-flex">
                    <a href="{{ route('admin') }}" class="btn btn-shadow btn-warning text-dark">Retour sur le site</a>
                </li>
            </ul>
        </div>
     </div>
