@extends('layouts.admin_master')

@section('content')
<div class="pc-content">
    <div class="justify-content">
        <button type="button" class="btn btn-shadow btn-success m-20 text-dark">Assignation média</button>
        <div class="dropdown-menu pc-h-dropdown drp-search">
            <form class="px-3">
                <div class="form-group mb-0 d-flex
                    align-items-center">
                    <i data-feather="search"></i>
                    <input type="search" class="form-control
                        border-0 shadow-none"
                        placeholder="Search here. . ." />
                </div>
            </form>
        </div>
    </div>
<div class="row">

<div class="col-xl-12 col-md-12">
    <div class="card">
        <div class="card-header">
            <h5>Gestion Utlisateur
            </h5>
        </div>
        <div class="card-body table-border-style">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr class="border-bottom-danger">
                            <th>#</th>
                            <th>Date</th>
                            <th>Titre</th>
                            <th>Autre</th>
                            <th>Media</th>
                            <th>Faute</th>
                            <th>Url de la page</th>
                            <th>Sanction proposée</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-bottom-primary">
                            <td>1</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr class="border-bottom-warning">
                            <td>2</td>
                            <td>Jacob</td>
                            <td>@fat</td>
                            <td>@fat</td>
                            <td>@fat</td>
                            <td>@fat</td>
                            <td>@fat</td>
                            <td>@fat</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Larry</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
