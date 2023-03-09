@extends('layouts.front_master')

@section('title', '?')
@section('content')

@include('layouts.frontend.phase_1.front_sidebar_step_3')

<div class="pc-container bg-light ">
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
                                <input type="search" class="form-control input-sw" placeholder="Search Followers">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="card follower-card shadow">
                                <div class="card-body p-3">
                                    <div class="media align-items-center mb-3">
                                        <img class="img-radius img-fluid wid-40" src="{{ asset('assets/Template style/images/user/avatar-1.jpg') }}" alt="User image">
                                        <div class="media-body mx-2">
                                            <h5 class="mb-1 text-truncate">JeannoZ3122H</h5>
                                            <h6 class="text-truncate text-muted d-flex align-items-center mb-0">10 mutual friends</h6>
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
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="d-grid">
                                                <button class="btn friend-btn bg-success text-white fw-bold">
                                                    <i class="material-icons-two-tone f-18">done_all</i>
                                                    Approuvée
                                                </button>
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
</div>
</div>

@endsection
@section('scripts')
