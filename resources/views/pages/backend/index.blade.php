@extends('layouts.admin_master')

@section('content')
    <div class="row p-4">

        <div class="col-xl-3 col-md-6">
            <div class="card bg-secondary-dark dashnum-card
                text-white overflow-hidden">
                <span class="round small"></span>
                <span class="round big"></span>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="avtar avtar-lg">
                                <i class="text-white ti
                                    ti-credit-card"></i>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="btn-group">
                                <a type="button" class="avtar
                                    bg-secondary dropdown-toggle
                                    arrow-none"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="ti ti-dots"></i>
                                </a>
                                <ul class="dropdown-menu
                                    dropdown-menu-end">

                                    <li>
                                        <a href="{{ route('gestion_categorie') }}" class="dropdown-item" type="a">Catégories</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <span class="text-white d-block f-20 f-w-500
                        my-2">Catégories <i class="ti
                            ti-arrow-up-right-circle opacity-50"></i>
                        </span>

                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-secondary-dark dashnum-card
                text-white overflow-hidden">
                <span class="round small"></span>
                <span class="round big"></span>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="avtar avtar-lg">
                                <i class="text-white ti
                                    ti-credit-card"></i>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="btn-group">
                                <a type="button" class="avtar
                                    bg-secondary dropdown-toggle
                                    arrow-none"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="ti ti-dots"></i>
                                </a>
                                <ul class="dropdown-menu
                                    dropdown-menu-end">

                                    <li>
                                        <a href="{{ route('gestion_media') }}" class="dropdown-item" type="a">  Médias</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <span class="text-white d-block f-20 f-w-500
                        my-2">Médias <i class="ti
                            ti-arrow-up-right-circle opacity-50"></i></span>

                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-secondary-dark dashnum-card
                text-white overflow-hidden">
                <span class="round small"></span>
                <span class="round big"></span>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="avtar avtar-lg">
                                <i class="text-white ti
                                    ti-credit-card"></i>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="btn-group">
                                <a type="button" class="avtar
                                    bg-secondary dropdown-toggle
                                    arrow-none"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="ti ti-dots"></i>
                                </a>
                                <ul class="dropdown-menu
                                    dropdown-menu-end">

                                    <li>
                                        <a href="{{ route('gestion_faute') }}" class="dropdown-item"  type="a">Fautes</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <span class="text-white d-block f-20 f-w-500
                        my-2">Fautes <i class="ti
                            ti-arrow-up-right-circle opacity-50"></i></span>

                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-secondary-dark dashnum-card
                text-white overflow-hidden">
                <span class="round small"></span>
                <span class="round big"></span>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="avtar avtar-lg">
                                <i class="text-white ti
                                    ti-credit-card"></i>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="btn-group">
                                <a type="button" class="avtar
                                    bg-secondary dropdown-toggle
                                    arrow-none"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="ti ti-dots"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a href="{{ route('gestion_utilisateur') }}" class="dropdown-item" type="a">Utilisateurs</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <span class="text-white d-block f-20 f-w-500
                        my-2">Utilisateurs <i class="ti
                            ti-arrow-up-right-circle opacity-50"></i>
                    </span>
                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="card card-body">
                <div class="card-header">
                    <h5>Statistiques par faute</h5>
                </div>
                <div class=" table-border-style">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Type de faute</th>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>7</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>6</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="card card-body">
                <div class="card-header">
                        <h5>Statistiques par média</h5>
                </div>
                <div class=" table-border-style">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Média</th>
                                    <th>Nombre de fautes
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>2</td>
                                </tr>
                                    <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>5</td>
                                    </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>5</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h6>Statistiques des fautes par média
                </h6>
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col">
                    <div id="satisfaction-chart">

                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
