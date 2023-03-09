@extends('layouts.auth_front_master')

@section('title', 'sign-in')
@section('content')

<div class="auth-main">
    <div class="auth-wrapper v2">
        <div class="auth-form">

            <div class="logo" style="margin: -25px 0 0 -20px; width: 16%;">
                <img src="{{ asset('assets/Template style/logo_bf_1.png') }}" class="img-fluid"/>
            </div>
{{--   btn-sw-3  --}}
            <div class="card card-bubbles shadow" style="background: rgba('255, 255, 255, 0.2') !important;">
                <div class="card-body">
                    <div class="row">
                        <h2 class="text-dark text-start h5"><b>Salut, <br> bienvenue</b></h2>
                        <div class="d-flex justify-content-center">
                            <div class="auth-header">
                            </div>
                        </div>
                    </div>
                    <h2 class="btn mt-1 mb-3 py-1 btn-light text-dark" style="width: 100%">
                        <b class="h3">Inscriptions</b>
                    </h2>
                    <form action="" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control bloc-sw-1"
                                id="floatingInput" placeholder="nom
                            et prenoms" name="fullname" />
                            <label for="floatingInput">nom
                                et prenoms</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control bloc-sw-1"
                                id="floatingInput" placeholder="Poste / Fonction" name="acces" />
                            <label for="floatingInput">Poste / Fonction</label>
                        </div>
                        <div class="form-floating mb-3 input-sw">
                            <input type="email" class="form-control bloc-sw-1"
                                id="floatingInput" placeholder="email" />
                            <label for="floatingInput">email</label>
                        </div>
                        <div class="form-floating mb-3 input-sw">
                            <input type="password" class="form-control bloc-sw-1"
                                id="floatingInput" placeholder="password" />
                            <label for="floatingInput">password</label>
                        </div>

                        <div class="d-grid mt-4">
                            <button type="button" class="col-5 mx-auto btn btn-success btn-sw-1 fw-bold
                                p-2">S{{ __('\'inscrire') }}</button>
                        </div>
                    </form>
                    <hr />
                    <a href="{{ route('login') }}" class="d-flex justify-content-center text-dark">J{{ __('\'ai déjà un compte') }} ?</a>
                </div>
            </div>

            <div class="contain">
                <div class="bubbles">
                    <span style="--i:11;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:24;"></span>
                    <span style="--i:10;"></span>
                    <span style="--i:14;"></span>
                    <span style="--i:23;"></span>
                    <span style="--i:18;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:19;"></span>
                    <span style="--i:20;"></span>
                    <span style="--i:25;"></span>
                    <span style="--i:18;"></span>
                    <span style="--i:21;"></span>
                    <span style="--i:15;"></span>
                    <span style="--i:13;"></span>
                    <span style="--i:26;"></span>
                    <span style="--i:17;"></span>
                    <span style="--i:13;"></span>
                    <span style="--i:28;"></span>
                    <span style="--i:9;"></span>
                    <span style="--i:5;"></span>
                    <span style="--i:3;"></span>
                    <span style="--i:6;"></span>
                    <span style="--i:7;"></span>
                    <span style="--i:2;"></span>
                    <span style="--i:8;"></span>
                </div>
            </div>
        </div>
        <div class="auth-sidecontent">
            <div class="p-3 px-lg-5 text-center">
                <div id="carouselExampleIndicators" class="carousel
                    slide carousel-dark" data-bs-ride="carousel">
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
                        <button type="button"
                            data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button"
                            data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button"
                            data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                </div>
                <img src="{{ asset('assets/Template style/images/authentication/authentication/auth2-login.svg') }}"
                    alt="images" class="img-fluid mt-3 w-75" />
            </div>
        </div>
    </div>
</div>

@endsection
