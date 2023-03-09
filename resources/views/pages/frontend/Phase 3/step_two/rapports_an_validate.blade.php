@extends('layouts.front_master')

@section('title', 'Liste des rapports validées')

@section('content')

@include('layouts.frontend.phase_3.front_sidebar_step_2')

<div class="pc-container bg-light">
    <div class="pc-content pb-2 rounded">

        <div class="tab-pane" id="request" role="tabpanel" aria-labelledby="request-tab">
            <div class="card">
                <div class="card-header p-2">
                    <div class="row align-items-center g-1">
                        <div class="col">
                            <h5>Liste des rapports validées</h5>
                        </div>
                        <div class="col-auto">
                            <div class="form-search">
                                <i class="ti ti-search"></i>
                                <input type="search" class="form-control  input-sw" placeholder="Search Followers">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- liste rapport -->
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="card follower-card">
                                <div class="card-body p-2">
                                    <div class="media align-items-start mb-3">
                                        <div class="media-body mx-2">
                                            <img class="img-radius img-fluid wid-70" src="{{ asset('assets/Template style/images/user/avatar-2.jpg') }}" alt="User image">
                                        </div>
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-primary opacity-50 arrow-none" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ti ti-dots f-16"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end py-1">
                                                <a class="dropdown-item" href="#"><i class="material-icons-two-tone">delete</i> Supprimer</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <h4 class="mb-0 text-truncate">Montana</h4>
                                        <span class="badge bg-light-success rounded-pill f-14 badge-anime"><i class="material-icons-two-tone">done_all</i><span class="text-white" style="text-shadow: .5px 1.1px gray"> approuvée</span></span>
                                    </div>
                                    <div class="row g-2"> 
                                        <div class="col-3 mt-3">
                                            <div class="d-grid">
                                                <button class="btn text-bg-warning rounded f-14 py-1 px-2 btn-sw-1 me-4" OnClick="impression()"><i class="material-icons-two-tone">local_printshop</i>imprimer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="modal-edit">
                        <div class="modal fade" id="Phase2" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content p-2">
                                    <h1 class="m-b-10 h1 text-center fw-bold"><span class="color-green text-sw-1 fw-bolder">R</span>apport d'<span class="color-green text-sw-1 fw-bolder">i</span>nstructions</h1>
                                    <div class="mail-content mt-2 rounded p-4">
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="d-sm-flex align-items-center">
                                                <ul class="list-inline me-auto mb-3">
                                                    <li class="list-inline-item align-bottom">
                                                        <div class="d-flex align-items-center">
                                                            <img src="../assets/images/user/avatar-1.jpg" alt="user-image" class="img-user rounded-circle">
                                                            <div class="flex-grow-1 ms-2">
                                                                <h5 class="mb-0 text-truncate">Matthew Hawkins</h5>
                                                                <p class="mb-0 text-muted text-sm"> From: &lt;<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4b3f2a312e2a253e0b2824263b2a253265282426">[email&#160;protected]</a>&gt;</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="list-inline ms-auto mb-3">
                                                <li class="list-inline-item text-muted">12 Jul 22 08:23 AM</li>
                                                <li class="list-inline-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                                            <input class="form-check-input" type="checkbox">
                                                            <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                                            <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                                        </div>
                                                        <div class="form-check form-check-inline m-0 mx-3 pc-icon-checkbox">
                                                            <input class="form-check-input" type="checkbox" checked>
                                                            <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                                            <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                                        </div>
                                                        <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                                            <input class="form-check-input" type="checkbox">
                                                            <i class="material-icons-two-tone pc-icon-uncheck">new_releases</i>
                                                            <i class="material-icons-two-tone text-danger pc-icon-check">new_releases</i>
                                                        </div>
                                                    </div>
                                                </li>
                                                </ul>
                                                </div>
                                            </div>
                                            <!-- contenu du rapport -->
                                            <div class="container mt-3">
                                                <div class="page-header col-12 bg-light imprimer">
                                                    le contenu du rapport
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end p-2">
                                        <button type="button" class="btn text-bg-success btn-sw-1" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

</div>
</div>

@endsection
@section('scripts')
