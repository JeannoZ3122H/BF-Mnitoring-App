    <div class="mb-2 col-md-6 col-12">

        <div class="mb-2">
            <label for="formFileLg" class="form-label">Nom de l{{ ('\'') }}auteur</label>
            <input class="form-control input-sw" id="formFileLg" name="name_author" type="text">
        </div>

        <div class="mb-2">
            <label for="formFileLg" class="form-label">Selection du média</label>
            <select class="form-select input-sw" name="type_media">
                <option selected>Choississez un média</option>

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
    <div class="mb-2 col-md-6 col-12">
        <!-- si choix_type_media = radio ou television -->
        <div class="mb-2">
            <label for="formFileLg" class="form-label">Date et heure de diffusion</label>
            <input class="form-control input-sw" id="formFileLg" name="date_diffusions" ype="text" placeholder="le jeudi 01 janvier 2023 à 15h">
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
