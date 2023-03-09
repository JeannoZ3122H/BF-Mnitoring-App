@extends('layouts.admin_master')

@section('content')
<div class="pc-content">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h5>Faire une Assignation de média
                </h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <label class="form-label"> Media*</label>
                            <div class="col-lg-12 col-md-11 col-sm-12">
                                <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                                    <option value="">Sélectionner un Média</option>
                                    <option value="Choice 1">Choice 1</option>
                                    <option value="Choice 2">Choice 2</option>
                                    <option value="Choice 3">Choice 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label"> Utilisateur*</label>
                            <div class="col-lg-12 col-md-11 col-sm-12">
                                <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                                    <option value="">Sélectionner un Utilisateur</option>
                                    <option value="Choice 1">Choice 1</option>
                                    <option value="Choice 2">Choice 2</option>
                                    <option value="Choice 3">Choice 3</option>
                                </select>
                            </div>
                        </div>

                        <div class="card-footer text-end">
                                <button class="btn btn-primary me-2">ENREGISTRER</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection
