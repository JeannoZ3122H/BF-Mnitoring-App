<header class="pc-header">
    <div class="m-header">
        <a href="{{ route('index') }}" class="b-brand">
            <img src="{{ asset('assets/Template style/logo_bf.jpg') }}" alt="" class="w-75 logo logo-lg">
        </a>

        <div class="pc-h-item">
            <a href="#" class="pc-head-link head-link-secondary m-0" id="sidebar-hide">
                <i class="ti ti-menu-2 text-white"></i>
            </a>
        </div>
    </div>
    <div class="header-wrapper">
        <div class="me-auto pc-mob-drp">
            <ul class="list-unstyled">
                <li class="pc-h-item header-mobile-collapse">
                    <a href="#" class="pc-head-link head-link-secondary ms-0" id="mobile-collapse">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
                <li class="dropdown pc-h-item d-inline-flex d-md-none">
                    <a class="pc-head-link head-link-secondary dropdown-toggle arrow-none m-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="ti ti-search"></i>
                    </a>
                    <div class="dropdown-menu pc-h-dropdown drp-search">
                        <form class="px-3">
                            <div class="form-group mb-0 d-flex align-items-center">
                                <i data-feather="search"></i>
                                <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
                            </div>
                        </form>
                    </div>
                </li>
                <li class="pc-h-item d-none d-md-inline-flex">
                    <form class="header-search">
                        <i data-feather="search" class="icon-search"></i>
                        <input type="search" class="form-control input-sw" placeholder="Search here. . .">
                    </form>
                </li>
            </ul>
        </div>

        <div class="ms-auto">
            <ul class="list-unstyled">

                <li class="dropdown pc-h-item">
                    <a class="pc-head-link head-link-secondary dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="ti ti-bell"></i>
                    </a>
                    <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
                        <div class="dropdown-header">
                            <a href="#!" class="link-primary float-end text-decoration-underline">Mark as all read</a>
                            <h5>All Notification <span class="badge bg-warning rounded-pill ms-1">01</span></h5>
                        </div>
                        <div class="dropdown-header px-0 text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">
                            <div class="list-group list-group-flush w-100">
                                <div class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar">
                                        </div>
                                        <div class="flex-grow-1 ms-1">
                                            <span class="float-end text-muted">2 min ago</span>
                                            <h5>John Doe</h5>
                                            <p class="text-body fs-6">It is a long established fact that a reader will be distracted </p>
                                            <div class="badge rounded-pill bg-light-danger">Unread</div>
                                            <div class="badge rounded-pill bg-light-warning">New</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown pc-h-item header-user-profile">
                    <a class="pc-head-link head-link-primary dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{ asset('assets/Template style/images/user/avatar-2.jpg') }}" alt="user-image" class="user-avtar">
                        <span>
                            <i class="ti ti-settings"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                        <div class="dropdown-header">
                            <h4>Good Morning, <span class="small text-muted"> John Doe</span></h4>
                            <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 280px)">
                                <div class="upgradeplan-block bg-light-warning rounded">
                                    <h4>Explore full code</h4>
                                    <p class="text-muted">Buy now to get full access of code files</p>
                                    <a href="https://codedthemes.com/item/berry-bootstrap-5-admin-template/" target="_blank" class="btn btn-warning">Buy Now</a>
                                </div>
                                <hr>
                                <a href="https://berrydashboard.io/bootstrap/default/pages/login-v1.html" class="dropdown-item">
                                    <i class="ti ti-logout"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>