@extends('layouts.admin_master')

@section('content')
    <div class="pc-content">
        <div class="justify-content">
            <a href="{{ route('form_categorie') }}" class="btn btn-shadow btn-success m-20 text-dark">Ajouter categorie</a>
        </div>
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>GESTION DES categorie</h5>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr class="border-bottom-danger">
                                        <th>#</th>
                                        <th>Categorie</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-bottom-primary">
                                        <td>1</td>
                                        <td>Otto</td>
                                        <td>Otto</td>

                                    </tr>
                                    <tr class="border-bottom-warning">
                                        <td>2</td>
                                        <td>Jacob</td>
                                        <td>Jacob</td>

                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Larry</td>
                                        <td>Larry</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
