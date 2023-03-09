@extends('layouts.front_master')

@section('title', '?')
@section('content')

@include('layouts.frontend.phase_2.front_sidebar_step_2')

<div class="pc-container bg-light">
    <div class="pc-content pb-2 rounded">

        <div class="tab-pane" id="request" role="tabpanel" aria-labelledby="request-tab">
            <div class="card">
                <div class="card-header p-2">
                    <div class="row align-items-center g-1">
                        <div class="col">
                            <h5>Liste des observations validées</h5>
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
                        <div class="col-xl-3 col-lg-4 col-md-6">
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
                                        <span class="badge bg-light-success rounded-pill f-14 badge-anime"><i class="material-icons-two-tone">done_all</i></span>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col-auto">
                                            <div class="d-grid">
                                                <button class="btn btn-light-success btn-sw-1" data-bs-toggle="modal" data-bs-target="#Phase2">Voir le rapport</button>
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
                                    <h1 class="m-b-10 h1 text-center fw-bold"><span class="color-green text-sw-1 fw-bolder">R</span>apport d{{('\'')}}<span class="color-green text-sw-1 fw-bolder">i</span>nstructions</h1>
                                    <div class="mail-content mt-2 rounded p-4">
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="d-sm-flex align-items-center">
                                                <ul class="list-inline me-auto mb-3">
                                                    <li class="list-inline-item align-bottom">
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ asset('assets/Template style/images/user/avatar-1.jpg') }}" alt="user-image" class="img-user rounded-circle">
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
                                                <div class="page-header col-12 bg-light">
                                                    le contenu du rapport
                                                </div>
                                                <div class="mail-details">
                                                    <hr class="mb-3 mt-2">
                                                    <h5 class="mb-3"><b><i class="ti ti-paperclip me-2"></i> 3 Fichiers rattachés</b></h5>
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                                            <div class="card text-bg-light p-1">
                                                                <img src="{{ asset('assets/Template style/images/widget/capture-ecran.png') }}" class="card-img img-fluid w-50" alt="Capture d'ecran">
                                                                <div class="card-img-overlay">
                                                                    <button class=" float-end btn friend-btn btn-link-warning btn-sw-1 px-2 py-1">
                                                                        Télecharger 
                                                                        <a href="#" class="avtar avtar-xs btn-link-secondary text-white">
                                                                            <i class="ti ti-download f-16"></i>
                                                                        </a>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                                            <div class="card text-bg-light p-1">
                                                                <img src="{{ asset('assets/Template style/images/widget/mp3.png') }}" class="card-img img-fluid w-md-50" alt="Mp3">
                                                                <div class="card-img-overlay">
                                                                    <button class=" float-end btn friend-btn btn-link-warning text-white btn-sw-1 px-2 py-1">
                                                                        Télecharger 
                                                                        <a href="#" class="avtar avtar-xs btn-link-secondary text-white">
                                                                            <i class="ti ti-download f-16"></i>
                                                                        </a>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                                            <div class="card text-bg-light p-1">
                                                                <img src="{{ asset('assets/Template style/images/widget/mp4.png') }}" class="card-img img-fluid w-md-50" alt="Mp4">
                                                                <div class="card-img-overlay">
                                                                    <button class=" float-end btn friend-btn btn-link-warning btn-sw-1 px-2 py-1">
                                                                        Télecharger 
                                                                        <a href="#" class="avtar avtar-xs btn-link-secondary text-white">
                                                                            <i class="ti ti-download f-16"></i>
                                                                        </a>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                                            <div class="card text-bg-light p-1">
                                                                <img src="{{ asset('assets/Template style/images/widget/URL.png') }}" class="card-img img-fluid w-50" alt="URL">
                                                                <div class="card-img-overlay">
                                                                    <button class=" float-end btn friend-btn btn-link-warning btn-sw-1 px-2 py-1">
                                                                        Copier 
                                                                        <a href="#" class="avtar avtar-xs btn-link-secondary text-white">
                                                                            <i class="ti ti-paperclip f-16"></i>
                                                                        </a>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                                            <div class="card text-bg-light p-1">
                                                                <img src="{{ asset('assets/Template style/images/widget/PDF.jpg') }}" class="card-img img-fluid w-50" alt="PDF">
                                                                <div class="card-img-overlay">
                                                                    <button class=" float-end btn friend-btn btn-link-warning btn-sw-1 px-2 py-1">
                                                                        Télecharger 
                                                                        <a href="#" class="avtar avtar-xs btn-link-secondary text-white">
                                                                            <i class="ti ti-download f-16"></i>
                                                                        </a>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end p-2">
                                        <button type="button" class="btn text-bg-success btn-sw-1" data-bs-dismiss="modal">Fermer</button>
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
