@extends('layouts.auth_front_master')

@section('title', 'login')
@section('content')

<div class="auth-main">
    <div class="auth-wrapper v1">
        <div class="auth-form">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h2 class="text-warning h4" style="text-shadow: .5px 1.1px gray"><b>Bienvenue</b></h2>
                            </div>
                            <div class="logo" style="margin: -19px 0 0 -20px; width: 26%;">
                                <img src="{{ asset('assets/Template style/logo_bf_1.png') }}" class="img-fluid w-100"/>
                            </div>
                        </div>
                    </div>
                    <h5 class="my-4 d-flex justify-content-center text-uppercase h4"
                        style="text-shadow: .5px 1.1px gray"><span class="text-warning" style="text-decoration: none">A</span>uthentification</h5>
                    <hr>
                    <h1 class="d-flex justify-content-end h1"></h1>
                    <div class="btn-page">
                        <div class="row justify-content-center">
                            <button type="button" class="btn btn-lg col-9 bg-light shadow btn-sw-1 my-3 text-dark f-w-500" style="text-shadow: .6px 1.2px gray; background-color: green;"
                             data-bs-toggle="modal" data-bs-target="#Phase1">Monitoring sans sanction</button>

                            <button type="button" class="btn btn-lg col-9 bg-light shadow btn-sw-1 mb-3 text-dark f-w-500" style="text-shadow: .6px 1.2px gray; background-color: green;"
                             data-bs-toggle="modal" data-bs-target="#Phase2">Instructions des fautes</button>

                            <button type="button" class="btn btn-lg col-9 bg-light shadow btn-sw-1 mb-3 text-dark f-w-500" style="text-shadow: .6px 1.2px gray; background-color: green;"
                            data-bs-toggle="modal" data-bs-target="#Phase3">sanctions (collège des conseillers)</button>
                        </div>
                    </div>
                    <div class="modal fade" id="Phase1" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
                        <div class="modal-dialog modalfullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header" style="border-bottom: none; letter-spacing: 1px">
                                    <h5 class="modal-title text-uppercase h5 text-dark" style="text-shadow: .6px 1.2px gray;" id="exampleModalFullscreenLabel"><span class="text-warning" style="text-decoration: none">M</span>onitoring sans sanction</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="get">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control bloc-sw-1" id="floatingInput" name="email" placeholder="Email address / Username" />
                                            <label for="floatingInput">Email address / Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control bloc-sw-1" name="password" id="floatingInput" placeholder="Password" />
                                            <label for="floatingInput">Password</label>
                                        </div>
                                        <div class="d-grid mt-4 d-flex justify-content-center">
                                            <button type="button" class="btn btn-warning shadow text-white fw-bold p-2">Se connecter</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="d-flex justify-content-end p-2">
                                    <button type="button" class="btn text-bg-dark" data-bs-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="Phase2" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
                        <div class="modal-dialog modalfullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-uppercase h5 text-warning" style="text-shadow: .6px 1.2px gray;" id="exampleModalFullscreenLabel"><span class="text-warning" style="text-decoration: none">I</span>nstructions des fautes</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="get">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control bloc-sw-1" id="floatingInput" name="email" placeholder="Email address / Username" />
                                            <label for="floatingInput">Email address / Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control bloc-sw-1" name="password" id="floatingInput" placeholder="Password" />
                                            <label for="floatingInput">Password</label>
                                        </div>
                                        <div class="d-grid mt-4 d-flex justify-content-center">
                                            <button type="button" class="btn btn-warning shadow text-white fw-bold p-2">Se connecter</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="d-flex justify-content-end p-2">
                                    <button type="button" class="btn text-bg-dark" data-bs-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="Phase3" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
                        <div class="modal-dialog modalfullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-uppercase h5 text-warning" style="text-shadow: .6px 1.2px gray;" id="exampleModalFullscreenLabel"><span class="text-warning" style="text-decoration: none">S</span>anctions (collège des conseillers)</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="get">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control bloc-sw-1" id="floatingInput" name="email" placeholder="Email address / Username" />
                                            <label for="floatingInput">Email address / Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control bloc-sw-1" name="password" id="floatingInput" placeholder="Password" />
                                            <label for="floatingInput">Password</label>
                                        </div>
                                        <div class="d-grid mt-4 d-flex justify-content-center">
                                            <button type="button" class="btn btn-warning shadow text-white fw-bold p-2">Se connecter</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="d-flex justify-content-end p-2">
                                    <button type="button" class="btn text-bg-dark" data-bs-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="auth-sidecontent">
            <div class="p-3 px-lg-5 text-center">
                <div class="animation-content">
                    <img src="{{ asset('assets/img/news-1.svg') }}" alt="images" class="img-fluid blue-card mt-3">
                    <img src="{{ asset('assets/img/news-2.svg') }}" alt="images" class="img-fluid purple-card mt-3">
                </div>
                <div id="carouselExampleIndicators" class="carousel slide carousel-dark" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h1><b><span class="text-warning">M</span>onitoring sans sanctions</b></h1>
                            <p class="f-12 mt-4">Phase 1</p>
                        </div>
                        <div class="carousel-item">
                            <h1><b><span class="text-warning">I</span>nstructions des fautes</b></h1>
                            <p class="f-12 mt-4">Phase 2</p>
                        </div>
                        <div class="carousel-item">
                            <h1><b><span class="text-warning">S</span>anctions collèges des conseillers</b></h1>
                            <p class="f-12 mt-4">Phase 3</p>
                        </div>
                    </div>
                    <div class="carousel-indicators position-relative">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
