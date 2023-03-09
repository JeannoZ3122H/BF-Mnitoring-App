@extends('layouts.admin_master')

@section('content')
    <div class="pc-content">
        <div class="justify-content">
        </div>
    <div class="row">

    <div class="col-xl-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>
                    Journal
                </h5>
            </div>
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="border-bottom-danger">
                                <th>Id</th>
                                <th>Utilisateur	</th>
                                <th>Date ajout	</th>
                                <th>Operations  </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-bottom-primary">
                                <td>1</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>

                            </tr>
                            <tr class="border-bottom-warning">
                                <td>2</td>
                                <td>Jacob</td>
                                <td>@fat</td>
                                <td>@fat</td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
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
