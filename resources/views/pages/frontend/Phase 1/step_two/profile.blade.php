@extends('layouts.front_master')

@section('title', 'Mon profil')
@section('content')

@include('layouts.frontend.phase_1.front_sidebar_step_2')

<div class="pc-container bg-light rounded">
    <div class="pc-content pb-2">

        <div class="row">

            <div class="col-sm-12">
                <div class="card social-profile">
                    <div class="card-body p-3">
                        <img src="{{ asset('assets/Template style/images/pages/img-profile-cover.png')}}" alt="" class="w-100 rounded">
                    </div>
                    <div class="card-body pt-2">
                        <div class="row align-items-end">
                            <div class="col-md-3 text-md-end">
                                <img class="img-fluid wid-140 img-profile-avtar" src="{{ asset('assets/Template style/images/pages/img-profile-avtar.jpg')}}" alt="User image">
                            </div>
                            <div class="col-md-9">
                                <div class="row justify-content-between align-items-end">
                                    <div class="col-md-auto soc-profile-data">
                                        <h5 class="mb-0">John Doe</h5>
                                        <p class="mb-0">Android Developer</p>
                                    </div>
                                    <div class="col-md-auto">
                                        <button class="btn btn-outline-primary btn-sw-1">Modifier profil</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        
        <div class="tab-pane" id="request" role="tabpanel" aria-labelledby="request-tab">
            <div class="card">
                <div class="card-header">
                    <h5>Statistiques observations</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        
                        <div class="col-xl-3 col-md-6">
                            <div class="card text-bg-success card-sw-1">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <i class="material-icons-two-tone text-primary mb-1 f-26">account_circle</i>
                                            <h5 class="mb-0 text-white">Validés</h5>
                                        </div>
                                        <div class="col text-end">
                                            <h3 class="mb-0 text-white">6035</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card text-bg-success card-sw-1">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <i class="material-icons-two-tone text-danger mb-1 f-26">description</i>
                                            <h5 class="mb-0 text-white">Rejetés</h5>
                                        </div>
                                        <div class="col text-end">
                                            <h3 class="mb-0 text-white">19</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card text-bg-warning card-sw-1">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <i class="material-icons-two-tone text-warning mb-1 f-26">bug_report</i>
                                            <h5 class="mb-0">Supprimés</h5>
                                        </div>
                                        <div class="col text-end">
                                            <h3 class="mb-0">63</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card text-bg-warning card-sw-1">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <i class="material-icons-two-tone text-success mb-1 f-26">folder_open</i>
                                            <h5 class="mb-0">Modifiés</h5>
                                        </div>
                                        <div class="col text-end">
                                            <h3 class="mb-0">95%</h3>
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
