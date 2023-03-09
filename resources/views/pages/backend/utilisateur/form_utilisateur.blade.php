@extends('layouts.admin_master')

@section('content')
<div class="pc-content">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h5>Ajouter Utilisateur

                </h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label class="form-label"> Nom</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="form-label text-center">Prenoms</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label text-center">Contact</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label text-center">email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label text-center">Mot de passe	</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label text-center">Fonction</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group row">
                            <label class="form-label"> Privilege*</label>
                            <div class="col-lg-12 col-md-11 col-sm-12">
                                <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                                    <option value="">Sélectionner une fonction</option>
                                    <option value="Choice 1">Choice 1</option>
                                    <option value="Choice 2">Choice 2</option>
                                    <option value="Choice 3">Choice 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label text-center">Photo</label>
                            <input type="file" class="form-control">
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
