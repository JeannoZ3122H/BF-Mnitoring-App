@extends('layouts.front_master')

@section('title', 'ajout des observations')

@section('step_one_ftitle', 'Monitoring')
@section('step_one_ltitle', 'sans Sanctions')

@section('content')

@include('layouts.frontend.phase_1.front_sidebar_step_1')

<div class="pc-container bloc-sw-1">
    <div class="pc-content bg-light rounded">

        <h1 class="m-b-10 h2 border-line text-center fw-bold"><span class="color-green text-sw-1 fw-bolder">F</span>ormulaire <span class="color-green text-sw-1 fw-bolder">O</span>bservation</h1>
        <div class="row">
            <div class="col-sm-12">
                <div class="mail-wrapper">
                    <div class="offcanvas-xxl offcanvas-start mail-offcanvas" tabindex="-1" id="offcanvas_mail">
                        <div class="offcanvas-header">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvas_mail" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body p-0">
                            <div id="mail-menulist" class="show collapse collapse-horizontal">
                                <div class="mail-menulist">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-grid">
                                                <button class="btn btn-primary d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#compose_mail_modal">
                                                    <i class="ti ti-circle-plus me-2"></i> Compose
                                                </button>
                                            </div>
                                        </div>
                                        <div class="scroll-block">
                                            <div class="card-body pt-0">
                                                <div class="list-group list-group-flush" id="list-tab" role="tablist">
                                                    <a class="list-group-item list-group-item-action active" id="list-mailtab-1" data-bs-toggle="list" href="#list-mail-1" role="tab">
                                                        <span> <i class="material-icons-two-tone">move_to_inbox</i> All Mail </span>
                                                        <span class="avtar avtar-xs">4</span>
                                                    </a>
                                                    <a class="list-group-item list-group-item-action" id="list-mailtab-2" data-bs-toggle="list" href="#list-mail-2" role="tab">
                                                        <span>
                                                            <i class="material-icons-two-tone">inbox</i>
                                                            Inbox
                                                        </span>
                                                        <span class="avtar avtar-xs">4</span>
                                                    </a>
                                                    <a class="list-group-item list-group-item-action" id="list-mailtab-3" data-bs-toggle="list" href="#list-mail-3" role="tab">
                                                        <span>
                                                            <i class="material-icons-two-tone">send</i>
                                                            Sent
                                                        </span>
                                                    </a>
                                                    <a class="list-group-item list-group-item-action" id="list-mailtab-4" data-bs-toggle="list" href="#list-mail-4" role="tab">
                                                        <span>
                                                            <i class="material-icons-two-tone">history_edu</i>
                                                            Draft
                                                        </span>
                                                    </a>
                                                    <a class="list-group-item list-group-item-action" id="list-mailtab-5" data-bs-toggle="list" href="#list-mail-5" role="tab">
                                                        <span>
                                                            <i class="material-icons-two-tone">new_releases</i>
                                                            Spam
                                                        </span>
                                                    </a>
                                                    <a class="list-group-item list-group-item-action" id="list-mailtab-6" data-bs-toggle="list" href="#list-mail-6" role="tab">
                                                        <span>
                                                        <i class="material-icons-two-tone">delete</i>
                                                        Trash
                                                        </span>
                                                        <span class="avtar avtar-xs">2</span>
                                                    </a>
                                                    <hr class="my-3">
                                                    <p class="text-muted ps-3">Filters</p>
                                                    <a class="list-group-item list-group-item-action" id="list-mailtab-7" data-bs-toggle="list" href="#list-mail-7" role="tab">
                                                        <span> <i class="material-icons-two-tone">star</i> Starred </span>
                                                    </a>
                                                    <a class="list-group-item list-group-item-action" id="list-mailtab-8" data-bs-toggle="list" href="#list-mail-8" role="tab">
                                                        <span>
                                                        <i class="material-icons-two-tone">label_important</i>
                                                        Important
                                                        </span>
                                                        <span class="avtar avtar-xs">2</span>
                                                    </a>
                                                    <hr class="my-3">
                                                    <p class="text-muted ps-3">Label</p>
                                                    <a class="list-group-item list-group-item-action" id="list-mailtab-71" data-bs-toggle="list" href="#list-mail-7" role="tab">
                                                        <span>
                                                        <i class="material-icons-two-tone text-primary">label</i>
                                                        Promotions
                                                        </span>
                                                        <span class="avtar avtar-xs">3</span>
                                                    </a>
                                                    <a class="list-group-item list-group-item-action" id="list-mailtab-81" data-bs-toggle="list" href="#list-mail-8" role="tab">
                                                        <span>
                                                        <i class="material-icons-two-tone text-warning">label</i>
                                                        Forums
                                                        </span>
                                                        <span class="avtar avtar-xs">1</span>
                                                    </a>
                                                    <a class="list-group-item list-group-item-action d-none" id="list-mailtab-details" data-bs-toggle="list" href="#list-mail-9" role="tab">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mail-content">
                        <div class="tab-content" id="nav-tabContent">

                            <form methode="post" action="{{ route('add_observation') }}" class="">

                                @csrf
                                <div class="form-group">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="mb-2 col-md-6 col-12">
                                                <div class="mb-2">
                                                    <label for="formFileLg" class="form-label">Selection du média</label>
                                                    <select class="form-select input-sw" name="type_media" wire:click="active">
                                                        <option selected wire:model="type_media">Choississez un média</option>

                                                        <option value="{{ __('id') }}" class="fw-bolder">{{ __('type_media') }}</option>

                                                        {{--  <option value="AGENCE DE PRESSE" class="fw-bolder">AGENCE DE PRESSE</option>
                                                        <option value="TELEVISION" class="fw-bolder">TELEVISION</option>
                                                        <option value="RADIO" class="fw-bolder">RADIO</option>
                                                        <option value="PRESSE ECRITE" class="fw-bolder">PRESSE ECRITE</option>
                                                        <option value="PRESSE EN LIGNE" class="fw-bolder">PRESSE EN LIGNE</option>  --}}
                                                    </select>
                                                </div>

                                                <div class="mb-2">
                                                    <label for="formFileLg" class="form-label">Nom du médias</label>
                                                    <input class="form-control input-sw" id="formFileLg" name="name_media" type="text">
                                                </div>

                                                <div class="mb-2">
                                                    <label for="formFileLg" class="form-label">Nom de l{{ __('\'') }}émission</label>
                                                    <input class="form-control input-sw" id="formFileLg" name="emission" type="text">
                                                </div>
                                            </div>
                                            {{--  @livewire('component', ['user' => $user], key($user->id))  --}}
                                            @livewire('contenu-article')
                                            
                                            <div class="mb-2 col-md-6 col-12">
                                                <!-- si choix_type_media = ecrite -->
                                                <div class="mb-2 ">
                                                    <label for="formFileLg" class="form-label">Ajouter un Texte <span class="fw-bolder">(PDF, Excel, PowerPoint)</span></label>
                                                    <input class="form-control input-sw" id="formFileLg" name="docs_pdf" type="file">
                                                </div>
                                            </div>  
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        <label for="exampleFormControlTextarea1" class="form-label">Commentaire </label>
                                        <textarea class="form-control input-sw" name="comments" id="exampleFormControlTextarea1" rows="4" placeholder="Commentaire"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <button type="submit" class="btn text-white bg-success btn-sw-1 fw-bold">Envoyer</button>
                                <div>
                            <form/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
