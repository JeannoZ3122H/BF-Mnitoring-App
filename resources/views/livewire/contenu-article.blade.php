    <div class="mb-2 col-md-6 col-12">

        <!-- si choix_type_media = radio ou television -->
        <div class="mb-2">
            <label for="formFileLg" class="form-label">Date et heure de diffusion</label>
            <input class="form-control input-sw" id="formFileLg" name="date_diffusions" type="text" placeholder="le jeudi 01 janvier 2023 à 15h">
        </div>
        <div class="mb-2 ">
            <label for="formFileLg" class="form-label">Ajouter un MP4 <span class="fw-bolder">(Vidéo)</span></label>
            <input class="form-control input-sw" id="formFileLg" type="file" name="video">
        </div>
        <div class="mb-2 ">
            <label for="formFileLg" class="form-label">Ajouter un MP3 <span class="fw-bolder">(Audio)</span></label>
            <input class="form-control input-sw" id="formFileLg" type="file" name="audio">
        </div>
    </div>
    <div class="mb-2">
        <label for="exampleFormControlTextarea1" class="form-label">Saisir le texte de la faute</label>
        <textarea class="form-control input-sw" id="exampleFormControlTextarea1" name="text_faute" rows="4" placeholder="Entrer ici"></textarea>
    </div>

    <div class="mb-2 col-md-6 col-12">
        <!-- si choix_type_media = web -->
        <div class="mb-2 ">
            <label for="formFileLg" class="form-label">Ajouter une <span class="fw-bolder">capture d{{ __('\'') }}ecran</span> de l{{ __('\'') }}article</label>
            <input class="form-control input-sw" id="formFileLg" name="screenshot" type="file">
        </div>
        <div class="mb-2">
            <label for="formFileLg" class="form-label">Ajouter le <span class="fw-bolder">url</span> de l{{ __('\'') }}article</label>
            <input class="form-control input-sw" id="formFileLg" name="url_article" type="text">
        </div>
    </div>
