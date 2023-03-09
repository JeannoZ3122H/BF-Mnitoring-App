@extends('layouts.admin_master')

@section('content')
<div class="pc-content">
    <div class="justify-content">
        <a href="{{ route('form_groupe') }}" class="btn btn-shadow btn-success m-20 text-dark">Ajouter un groupe</a>
    </div>
<div class="row">

<div class="col-xl-12 col-md-12">
    <div class="card">
        <div class="card-header">
            <h5>Gestion Groupe
            </h5>
        </div>
        <div class="card-body table-border-style">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr class="border-bottom-danger">
                            <th>#</th>
                            <th>Groupe	</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-bottom-primary">
                            <td>1</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr class="border-bottom-warning">
                            <td>2</td>
                            <td>Jacob</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Larry</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
