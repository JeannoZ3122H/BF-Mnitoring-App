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
                            <label class="form-label text-center">Description</label>
                            <input type="text" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label class="form-label text-center">Lien</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label text-center">Contenu</label>
                            <input type="file" class="form-control" >
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
