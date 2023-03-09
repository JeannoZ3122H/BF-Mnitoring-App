@extends('layouts.front_master')

@section('title', 'Liste des rapports')
@section('content')

@include('layouts.frontend.phase_2.front_sidebar_step_2')

<div class="pc-container bg-light bloc-sw-1">
    <div class="pc-content">
        <div class="page-header bloc-sw">
            <h1 class="h3" style="text-align: center">Liste des rapports</h1>
        </div>
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
                        <div class="d-sm-flex align-items-center ">
                            <ul class="list-inline me-auto mb-3">
                                <li class="list-inline-item align-bottom">
                                    <a href="#" class="d-xxl-none avtar avtar-s btn-link-secondary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_mail">
                                        <i class="ti ti-menu-2 f-18"></i>
                                    </a>
                                    <a href="#" class="d-none d-xxl-inline-flex avtar avtar-s btn-link-secondary" data-bs-toggle="collapse" data-bs-target="#mail-menulist">
                                        <i class="ti ti-menu-2 f-18"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item align-bottom">
                                    <a href="#" class="avtar avtar-s btn-link-secondary" id="toggle-mail-list-height">
                                        <i class="ti ti-arrows-vertical f-18"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <div class="dropdown">
                                        <a class="avtar avtar-s btn-link-primary dropdown-toggle arrow-none" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti ti-dots f-18"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Name</a>
                                            <a class="dropdown-item" href="#">Date</a>
                                            <a class="dropdown-item" href="#">Ratting</a>
                                            <a class="dropdown-item" href="#">Unread</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-inline ms-auto mb-3">
                                <li class="list-inline-item">
                                    <div class="form-search">
                                        <i class="ti ti-search"></i>
                                        <input type="search" class="form-control input-sw" placeholder="Search Followers">
                                    </div>
                                </li>
                                <li class="list-inline-item">1–10 of 12</li>
                                <li class="list-inline-item">
                                    <a href="#" class="avtar avtar-s btn-link-secondary">
                                        <i class="ti ti-chevron-left f-18"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="avtar avtar-s btn-link-secondary">
                                        <i class="ti ti-chevron-right f-18"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-mail-1" role="tabpanel" aria-labelledby="list-mailtab-1">
                                <div class="card table-card bloc-sw">
                                    <div class="card-body scroll-block px-0 py-2">
                                        <table class="table table-borderless mb-0 mail-table">
                                            <tbody>
                                                <tr class="hover-list">
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                                                <input class="form-check-input" type="checkbox">
                                                                <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                                                <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                                            </div>
                                                            <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                                                <input class="form-check-input" type="checkbox">
                                                                <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                                                <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                                            </div>
                                                            <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                                                <input class="form-check-input" type="checkbox" checked>
                                                                <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                                                <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{('assets/Template style/images/user/avatar-1.jpg')}}" alt="user-image" class="img-user rounded-circle">
                                                            <h5 class="mb-0 ms-2 text-truncate">Barney Thea</h5>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex w-100 align-items-center">
                                                            <div class="flex-grow-1 position-relative">
                                                                <p class="mb-0 mail-text text-truncate">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.been the industrys standard dummy
                                                                    text ever since the 1500s.</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td> </td>
                                                    <td class="mail-option">12 Jul 22 08:23 AM
                                                        <div class="mail-buttons">
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="#" class="avtar avtar-s btn-link-success"><i class="material-icons-two-tone f-18">done_all</i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#" class="avtar avtar-s btn-link-danger"><i class="ti ti-trash f-18"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div id="modal-edit">
                                    <div class="modal fade" id="Phase2" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content p-2">
                                                <h1 class="m-b-10 h1 text-center fw-bold"><span class="color-green text-sw-1 fw-bolder">R</span>apport d{{('\'')}}<span class="color-green text-sw-1 fw-bolder">i</span>nstructions</h1>
                                                <div class="mail-content mt-2 rounded bg-light p-4">
                                                    <div class="tab-content" id="nav-tabContent">
                                                        <div class="form-group">
                                                            <form class="form">
                                                                <div class="col-12">
                                                                    <textarea id="summernote" name="editordata"></textarea>
                                                                    <center>
                                                                        <div class="mt-3 mb-2">
                                                                            <button class="btn text-bg-success btn-sw-1 fw-bold" type="submit">Valider le rapport</button>
                                                                        </div>
                                                                    </center>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end p-2">
                                                    <button type="button" class="btn text-bg-success btn-sw-1" data-bs-dismiss="modal">Fermer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
    
                            <!-- views-1 -->
                            <div class="tab-pane fade" id="list-mail-9" role="tabpanel" aria-labelledby="list-mailtab-details">
                                <div class="card">
                                    <div class="card-body scroll-block">
                                        <div class="d-sm-flex align-items-center">
                                            <ul class="list-inline me-auto mb-3">
                                                <li class="list-inline-item align-bottom">
                                                    <a href="#" class="avtar avtar-s btn-link-secondary" id="mail-back_inbox">
                                                    <i class="ti ti-chevron-left f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('assets/Template style/images/user/avatar-1.jpg') }}" alt="user-image" class="img-user rounded-circle">
                                                        <div class="flex-grow-1 ms-2">
                                                            <h5 class="mb-0 text-truncate">Matthew Hawkins</h5>
                                                            <p class="mb-0 text-muted text-sm"> From: &lt;<a href="https://berrydashboard.io/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1e6a7f647b7f706b5e7d71736e7f7067307d7173">[email&#160;protected]</a>&gt;</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="list-inline ms-auto mb-3">
                                                <li class="list-inline-item text-muted">12 Jul 22 08:23 AM</li>
                                                <li class="list-inline-item">
                                                    <div class="d-flex align-items-center">
                                                        <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                                            <input class="form-check-input" type="checkbox">
                                                            <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                                            <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                                        </div>
                                                        <div class="form-check form-check-inline m-0 mx-3 pc-icon-checkbox">
                                                            <input class="form-check-input" type="checkbox" checked>
                                                            <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                                            <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                                        </div>
                                                        <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                                            <input class="form-check-input" type="checkbox">
                                                            <i class="material-icons-two-tone pc-icon-uncheck">new_releases</i>
                                                            <i class="material-icons-two-tone text-danger pc-icon-check">new_releases</i>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mail-details">
                                            <hr class="mb-3 mt-2">
                                            <h5 class="mb-3"><b><i class="material-icons-two-tone me-2">sticky_note_2</i> Rapport</b></h5>
                                            <div class="contenu_rapport">
                                                voici le contenu
                                            </div>
                                            <div class="mail-details">
                                                <hr class="mb-3 mt-2">
                                                <h5 class="mb-3"><b><i class="ti ti-paperclip me-2"></i> 3 Attachments</b></h5>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="card text-bg-light p-1">
                                                            <img src="{{ asset('assets/Template style/images/widget/capture-ecran.png') }}" class="card-img img-fluid w-50" alt="Capture d'ecran">
                                                            <div class="card-img-overlay">
                                                                <button class=" float-end btn friend-btn btn-link-warning btn-sw-1 px-2 py-1">
                                                                    Télecharger 
                                                                    <a href="#" class="avtar avtar-xs btn-link-secondary text-white">
                                                                        <i class="ti ti-download f-16"></i>
                                                                    </a>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="card text-bg-light p-1">
                                                            <img src="{{ asset('assets/Template style/images/widget/mp3.png') }}" class="card-img img-fluid w-md-50" alt="Mp3">
                                                            <div class="card-img-overlay">
                                                                <button class=" float-end btn friend-btn btn-link-warning text-white btn-sw-1 px-2 py-1">
                                                                    Télecharger 
                                                                    <a href="#" class="avtar avtar-xs btn-link-secondary text-white">
                                                                        <i class="ti ti-download f-16"></i>
                                                                    </a>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="card text-bg-light p-1">
                                                            <img src="{{ asset('assets/Template style/images/widget/mp4.png') }}" class="card-img img-fluid w-md-50" alt="Mp4">
                                                            <div class="card-img-overlay">
                                                                <button class=" float-end btn friend-btn btn-link-warning btn-sw-1 px-2 py-1">
                                                                    Télecharger 
                                                                    <a href="#" class="avtar avtar-xs btn-link-secondary text-white">
                                                                        <i class="ti ti-download f-16"></i>
                                                                    </a>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="card text-bg-light p-1">
                                                            <img src="{{ asset('assets/Template style/images/widget/URL.png') }}" class="card-img img-fluid w-50" alt="URL">
                                                            <div class="card-img-overlay">
                                                                <button class=" float-end btn friend-btn btn-link-warning btn-sw-1 px-2 py-1">
                                                                    Copier 
                                                                    <a href="#" class="avtar avtar-xs btn-link-secondary text-white">
                                                                        <i class="ti ti-paperclip f-16"></i>
                                                                    </a>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="card text-bg-light p-1">
                                                            <img src="{{ asset('assets/Template style/images/widget/PDF.jpg') }}" class="card-img img-fluid w-50" alt="PDF">
                                                            <div class="card-img-overlay">
                                                                <button class=" float-end btn friend-btn btn-link-warning btn-sw-1 px-2 py-1">
                                                                    Télecharger 
                                                                    <a href="#" class="avtar avtar-xs btn-link-secondary text-white">
                                                                        <i class="ti ti-download f-16"></i>
                                                                    </a>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="compose_mail_modal" class="modal fade compose_mail_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="flex-grow-1">
                        <h5 class="modal-title">New Message</h5>
                    </div>
                    <ul class="list-inline me-auto mb-0">
                        <li class="list-inline-item align-bottom">
                            <a href="#" class="avtar avtar-s btn-link-secondary" id="toggle_mail_dialog">
                                <i class="ti ti-arrows-diagonal-2 f-18"></i>
                            </a>
                        </li>
                        <li class="list-inline-item align-bottom">
                            <a href="#" class="avtar avtar-s btn-link-danger" data-bs-dismiss="modal">
                                <i class="ti ti-circle-x f-18"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modal-body">
                    <div class="text-end">
                        <a data-bs-toggle="collapse" href="#collapseccbcc" role="button" aria-expanded="false">Cc & Bcc</a>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">To</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Recipients">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="exampleInputEmail4">Subject</label>
                        <input type="email" class="form-control" id="exampleInputEmail4" placeholder="Subject">
                    </div>
                    <div class="collapse" id="collapseccbcc">
                        <div class="form-group">
                            <label class="form-label">Cc</label>
                            <input type="email" class="form-control mb-3" placeholder="Enter Cc email">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Bcc</label>
                            <input type="email" class="form-control mb-3" placeholder="Enter Bcc email">
                        </div>
                    </div>
                    <div id="pc-quil-1" style="height: 125px">
                        <p>Put your things hear...</p>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <ul class="list-inline me-auto mb-0">
                        <li class="list-inline-item align-bottom">
                            <a href="#" class="avtar avtar-s btn-link-secondary">
                                <i class="ti ti-file-upload f-18"></i>
                            </a>
                        </li>
                        <li class="list-inline-item align-bottom">
                            <a href="#" class="avtar avtar-s btn-link-primary">
                                <i class="ti ti-paperclip f-18"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="flex-grow-1 text-end">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Reply</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

@endsection
@section('scripts')
