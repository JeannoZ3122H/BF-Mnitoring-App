
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{ route('admin') }}" class="b-brand">
                <img src="../assets/images/logo-dark.svg" alt="" class="logo logo-lg" />
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>Tableau de bord</label>
                    <i class="ti ti-dashboard"></i>
                </li>
                <li class="pc-item">
                    <a href="{{ route('gestion_categorie') }}" class="pc-link"><span
                            class="pc-micon"><i class="ti ti-dashboard"></i></span><span
                            class="pc-mtext">GESTION DES CATEGORIES</span></a>
                </li>
                <li class="pc-item">
                    <a href="{{ route('gestion_media') }}" class="pc-link"><span
                            class="pc-micon"><i class="ti
                                ti-device-analytics"></i></span><span
                            class="pc-mtext"> GESTIONS DES MEDIA</span></a>
                </li>
                <li class="pc-item">
                    <a
                        href="{{ route('gestion_faute') }}"
                        class="pc-link"><span class="pc-micon"><i
                                class="ti ti-chart-arcs"></i></span><span
                            class="pc-mtext">GESTION DES FAUTES</span></a>
                </li>
                <li class="pc-item">
                    <a
                        href="{{ route('sanction') }}"
                        class="pc-link"><span class="pc-micon"><i
                                class="ti ti-clipboard-list"></i></span><span
                            class="pc-mtext">SANCTION</span></a>
                </li>
                <li class="pc-item">
                    <a href="{{ route('gestion_utilisateur') }}"
                        class="pc-link"><span class="pc-micon"><i
                                class="ti ti-chart-infographic"></i></span><span
                            class="pc-mtext">GESTION DES UTILISATEURS</span>
                    </a>

                </li>
                <li class="pc-item">
                    <a href="{{ route('gestion_groupe') }}"
                        class="pc-link"><span class="pc-micon"><i
                                class="ti ti-chart-infographic"></i></span><span
                            class="pc-mtext">GESTION DES GROUPES</span>
                    </a>

                </li>



                <li class="pc-item">
                    <a
                        href="{{ route('rapport') }}"
                        class="pc-link"><span class="pc-micon"><i
                                class="ti ti-chart-infographic"></i></span><span
                            class="pc-mtext">RAPPORTS ET STATISTIQUES JOURNALISTES</span></a>
                </li>
                <li class="pc-item">
                    <a
                        href="{{ route('outil_regulation') }}"
                        class="pc-link"><span class="pc-micon"><i
                                class="ti ti-chart-infographic"></i></span><span
                            class="pc-mtext">OUTILS DE REGULATION</span></a>
                </li>
                <li class="pc-item">
                    <a href="{{ route('projet_courrier') }}"

                        class="pc-link"><span class="pc-micon"><i
                                class="ti ti-chart-infographic"></i></span><span
                            class="pc-mtext">PROJETS COURRIERS</span></a>
                </li>
                <li class="pc-item">
                    <a href="{{ route('courrier_envoye') }}"

                        class="pc-link"><span class="pc-micon"><i
                                class="ti ti-chart-infographic"></i></span><span
                            class="pc-mtext">COURRIERS ENVOYÉ</span></a>
                </li>
                <li class="pc-item">
                    <a
                        href="{{ route('regulateur') }}"
                        class="pc-link"><span class="pc-micon"><i
                                class="ti ti-chart-infographic"></i></span><span
                            class="pc-mtext">REGULATEUR</span></a>
                </li>

                <li class="pc-item">
                    <a href="{{ route('journal') }}"
                       
                        class="pc-link"><span class="pc-micon"><i
                                class="ti ti-chart-infographic"></i></span><span
                            class="pc-mtext">JOURNAL</span></a>
                </li>

            </ul>
        </div>
    </div>

