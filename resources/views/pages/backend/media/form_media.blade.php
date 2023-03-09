@extends('layouts.admin_master')

@section('content')
<div class="pc-content">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h5>Ajouter media
                </h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <label class="form-label"> Categorie*</label>
                            <div class="col-lg-12 col-md-11 col-sm-12">
                                <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                                    <option value="">Sélectionner une categorie</option>
                                    <option value="Choice 1">Choice 1</option>
                                    <option value="Choice 2">Choice 2</option>
                                    <option value="Choice 3">Choice 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label text-center">designation du Media</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label text-center">Contact Media</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label text-center">Url Media</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label text-center">Gerant media</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label text-center">Contact gerant Media</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label text-center">Situation géographique</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label text-center">email</label>
                            <input type="email" class="form-control">
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
