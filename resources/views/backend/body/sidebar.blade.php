
<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
          <div class="main-sidebar" id="main-sidebar">
            <ul class="sidebar-menu" id="simple-bar">
              <li class="pin-title sidebar-main-title">  
                <div> 
                  <h5 class="sidebar-title f-w-700">Pinned</h5>
                </div>
              </li>
              <li class="sidebar-main-title">
                <div>
                  <h5 class="lan-1 f-w-700 sidebar-title">General</h5>
                </div>
              </li>
              <li class="sidebar-list"><a class="sidebar-link" href="javascript:void(0)"> 
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="64" height="64">
                    <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <!-- Personne 1 -->
                      <circle cx="20" cy="20" r="6" /> <!-- Taille réduite de la tête -->
                      <path d="M10 38c0-6 6-8 10-8s10 2 10 8v6H10v-6z" />
                      
                      <!-- Personne 2 -->
                      <circle cx="44" cy="20" r="6" /> <!-- Taille réduite de la tête -->
                      <path d="M34 38c0-6 6-8 10-8s10 2 10 8v6H34v-6z" />
                  
                      <!-- Personne centrale -->
                      <circle cx="32" cy="32" r="8" /> <!-- Taille légèrement réduite pour le centre -->
                      <path d="M22 50c0-8 10-10 10-10s10 2 10 10v8H22v-8z" />
                    </g>
                  </svg>
                  
                <h6>Equipes</h6><span class="badge"></span><i class="iconly-Arrow-Right-2 icli"></i></a>
                <ul class="sidebar-submenu">
                  <li> <a href="{{ route('team_type.create') }}">Ajouter un type d'équipe</a></li>
                  <li><a href="{{ route('team_type.index') }}">Liste des types d'équipes </a></li>
                  <li> <a href="{{ route('teams.create') }}">Ajouter une équipe</a></li>
                  <li> <a href="{{ route('teams.index') }}">Liste des équipes</a></li>
                </ul>
              </li>
              <li class="sidebar-list"> <a class="sidebar-link" href="javascript:void(0)">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="64" height="64">
                    <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <!-- Tête -->
                      <circle cx="32" cy="12" r="6" /> 
                      
                      <!-- Corps -->
                      <path d="M32 18v14l-10 10" /> 
                      
                      <!-- Bras -->
                      <path d="M32 18l12 8" /> 
                      
                      <!-- Jambe gauche -->
                      <path d="M22 38l-4 10" /> 
                      
                      <!-- Jambe droite -->
                      <path d="M32 32l8 12" />
                    </g>
                  </svg>
                  
                  <h6>Joueurs </h6><i class="iconly-Arrow-Right-2 icli"></i></a>
                <ul class="sidebar-submenu">
                  <li> <a href="general-widget.html">Ajouter un joueur</a></li>
                  <li><a href="chart-widget.html">Liste des joueurs</a></li>
                </ul>
              </li>
              <li class="sidebar-list"><a class="sidebar-link" href="javascript:void(0)"> 
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="64" height="64">
                    <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <!-- Tête -->
                      <circle cx="32" cy="12" r="6" />
                      
                      <!-- Corps -->
                      <path d="M32 18v16l-10 10" />
                      
                      <!-- Bras gauche -->
                      <path d="M32 18l-8 6" />
                      
                      <!-- Bras droit -->
                      <path d="M32 18l8 6" />
                      
                      <!-- Jambes -->
                      <path d="M22 34l-4 10" />
                      <path d="M32 34l4 10" />
                      
                      <!-- Chapeau de l'entraîneur -->
                      <path d="M26 8h12v4h-12z" />
                    </g>
                  </svg>
                  
                  
                <h6>Entraîneur</h6><span class="badge"></span><i class="iconly-Arrow-Right-2 icli"></i></a>
              <ul class="sidebar-submenu">
                <li> <a href="{{route('coach.create')}}">Ajouter un type d'entraîneur</a></li>
                <li><a href="{{route('coach.index')}}">Liste des types d'entraîneurs </a></li>
                <li> <a href="#">Ajouter un entraîneur</a></li>
                <li> <a href="#">Liste des entraîneurs</a></li>
              </ul>
             </li>
              <li class="sidebar-list"><a class="sidebar-link" href="javascript:void(0)">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="64" height="64">
                    <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <!-- Haltère (barre) -->
                      <line x1="12" y1="32" x2="52" y2="32" />
                      
                      <!-- Poids gauche -->
                      <rect x="6" y="26" width="6" height="12" rx="2" />
                      <rect x="52" y="26" width="6" height="12" rx="2" />
                      
                      <!-- Poids intérieurs gauche -->
                      <rect x="14" y="28" width="4" height="8" rx="1" />
                      <rect x="46" y="28" width="4" height="8" rx="1" />
                    </g>
                  </svg>
                  
                  <h6>Entraînements</h6><i class="iconly-Arrow-Right-2 icli"> </i></a>
                <ul class="sidebar-submenu">
                  <li> <a href="{{route('entrainement.create')}}">Ajouter un type d'entraînement</a></li>
                  <li><a href="{{route('entrainement.create')}}">Planifier un entraînement</a></li>
                  <li> <a href="{{route('entrainement.index')}}">Liste des types d'entraînements</a></li>
                  <li> <a href="{{route('entrainement.index')}}">Historique des entraînements</a></li>
                </ul>
              </li>
              <li class="sidebar-list"> <a class="sidebar-link" href="javascript:void(0)">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="64" height="64">
                    <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <!-- Joueur gauche (cercle et corps) -->
                      <circle cx="18" cy="18" r="6" />
                      <path d="M18 24v8l-4 6" />
                      <path d="M18 24v8l4 6" />
                      
                      <!-- Joueur droit (cercle et corps) -->
                      <circle cx="46" cy="18" r="6" />
                      <path d="M46 24v8l-4 6" />
                      <path d="M46 24v8l4 6" />
                      
                      <!-- Terrain ou séparation centrale -->
                      <line x1="32" y1="12" x2="32" y2="52" />
                      <rect x="10" y="40" width="44" height="8" rx="2" />
                    </g>
                  </svg>
                  
                <h6>Matchs </h6><i class="iconly-Arrow-Right-2 icli"></i></a>
                <ul class="sidebar-submenu">
                    <li> <a href="{{route('matche.create')}}">Planifier un match</a></li>
                    <li><a href="{{route('matche.index')}}">Historique des matchs</a></li>
                </ul>
              </li>
              <li class="sidebar-list"> <a class="sidebar-link" href="javascript:void(0)">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="64" height="64">
                    <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <!-- Base du trophée -->
                      <rect x="20" y="48" width="24" height="6" rx="2" />
                      <path d="M28 48v-4h8v4" />
                      
                      <!-- Corps principal -->
                      <path d="M24 44c-4 0-8-6-8-14V18h32v12c0 8-4 14-8 14H24z" />
                      
                      <!-- Poignées -->
                      <path d="M16 20c-4 0-6 2-6 6s2 6 6 6" />
                      <path d="M48 20c4 0 6 2 6 6s-2 6-6 6" />
                    </g>
                  </svg>
                  
                <h6>Compétitions </h6><i class="iconly-Arrow-Right-2 icli"></i></a>
              <ul class="sidebar-submenu">
                <li> <a href="{{route('competition.create')}}">Ajouter une compétition</a></li>
                <li><a href="{{route('competition.index')}}">Liste des compétitions</a></li>
              </ul>
             </li>
              <li class="sidebar-main-title">
                <div>
                  <h5 class="f-w-700 sidebar-title pt-3">Menu</h5>
                </div>
              </li>
              <li class="sidebar-list"> <a class="sidebar-link" href="javascript:void(0)">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="64" height="64">
                    <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <!-- Terrain de football -->
                      <rect x="4" y="4" width="56" height="56" rx="4" />
                      <line x1="32" y1="4" x2="32" y2="60" />
                      <circle cx="32" cy="32" r="8" />
                      <circle cx="16" cy="32" r="2" />
                      <circle cx="48" cy="32" r="2" />
                      <circle cx="32" cy="16" r="2" />
                      <circle cx="32" cy="48" r="2" />
                    </g>
                  </svg>
                  
                  
                  <h6 class="f-w-600">Position</h6><i class="iconly-Arrow-Right-2 icli"></i></a>
                <ul class="sidebar-submenu">
                  <li> <a href="{{ route('positions.create') }}">Ajouter une position </a></li>
                  <li> <a href="{{ route('positions.index') }}">Liste des positions </a></li>
                </ul>
              </li>
              <li class="sidebar-list"> <a class="sidebar-link" href="javascript:void(0)">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="64" height="64">
                    <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <!-- Enfant -->
                      <circle cx="16" cy="20" r="4" /> <!-- Tête -->
                      <line x1="16" y1="24" x2="16" y2="32" /> <!-- Corps -->
                      <line x1="12" y1="28" x2="20" y2="28" /> <!-- Bras -->
                      <line x1="14" y1="32" x2="16" y2="38" /> <!-- Jambe gauche -->
                      <line x1="18" y1="32" x2="16" y2="38" /> <!-- Jambe droite -->
                  
                      <!-- Adolescent -->
                      <circle cx="32" cy="16" r="5" /> <!-- Tête -->
                      <line x1="32" y1="21" x2="32" y2="34" /> <!-- Corps -->
                      <line x1="26" y1="26" x2="38" y2="26" /> <!-- Bras -->
                      <line x1="30" y1="34" x2="32" y2="44" /> <!-- Jambe gauche -->
                      <line x1="34" y1="34" x2="32" y2="44" /> <!-- Jambe droite -->
                  
                      <!-- Adulte -->
                      <circle cx="48" cy="12" r="6" /> <!-- Tête -->
                      <line x1="48" y1="18" x2="48" y2="34" /> <!-- Corps -->
                      <line x1="40" y1="24" x2="56" y2="24" /> <!-- Bras -->
                      <line x1="46" y1="34" x2="48" y2="48" /> <!-- Jambe gauche -->
                      <line x1="50" y1="34" x2="48" y2="48" /> <!-- Jambe droite -->
                    </g>
                  </svg>
                  
                  <h6 class="f-w-600">Catégorie d'âge</h6><i class="iconly-Arrow-Right-2 icli"> </i></a>
                <ul class="sidebar-submenu">
                  <li> <a href="{{ route('categories.create') }}">Ajouter une catégorie d'âge</a></li>
                  <li> <a href="{{ route('categories.index') }}">Liste des catégories d'âge</a></li>
                </ul>
              </li>
              <li class="sidebar-list"> <a class="sidebar-link" href="javascript:void(0)">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="64" height="64">
                    <g fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                      <!-- Première barre verticale -->
                      <line x1="20" y1="10" x2="20" y2="54" />
                      <!-- Deuxième barre verticale -->
                      <line x1="44" y1="10" x2="44" y2="54" />
                      <!-- Première barre horizontale -->
                      <line x1="10" y1="26" x2="54" y2="26" />
                      <!-- Deuxième barre horizontale -->
                      <line x1="10" y1="38" x2="54" y2="38" />
                    </g>
                  </svg>
                  
                  <h6 class="f-w-600">Numéro</h6><i class="iconly-Arrow-Right-2 icli"> </i></a>
                <ul class="sidebar-submenu">
                  <li> <a href="{{route('numero.create')}}">Ajouter un numéro</a></li>
                  <li> <a href="{{route('numero.index')}}">Liste des numéros</a></li>
                </ul>
              </li>
              <li class="sidebar-list"> <a class="sidebar-link" href="javascript:void(0)">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="64" height="64">
                    <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <!-- Bordure extérieure du terrain -->
                      <rect x="4" y="4" width="56" height="56" rx="4" ry="4" />
                      
                      <!-- Ligne centrale -->
                      <line x1="32" y1="4" x2="32" y2="60" />
                      
                      <!-- Cercle central -->
                      <circle cx="32" cy="32" r="8" />
                      
                      <!-- Points centraux -->
                      <circle cx="32" cy="32" r="1.5" fill="currentColor" />
                      
                      <!-- Zone de but gauche -->
                      <rect x="4" y="20" width="8" height="24" />
                      
                      <!-- Zone de but droite -->
                      <rect x="52" y="20" width="8" height="24" />
                    </g>
                  </svg>
                  
                  <h6 class="f-w-600">Terrain</h6><i class="iconly-Arrow-Right-2 icli"> </i></a>
                <ul class="sidebar-submenu">
                  <li> <a href="{{route('terrain.create')}}">Ajouter un terrain d'entraînement</a></li>
                  <li> <a href="{{route('terrain.index')}}">Liste des terrains d'entraînements</a></li>
                  <li> <a href="user-cards.html">Terrains déja utilisé</a></li>
                </ul>
              </li>
                <li class="sidebar-list"> <a class="sidebar-link" href="javascript:void(0)">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="64" height="64">
                        <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <!-- Contour du carton -->
                          <rect x="16" y="8" width="32" height="48" rx="4" ry="4" fill="currentColor" />
                        </g>
                      </svg>
                      
                    <h6 class="f-w-600">Carton</h6><i class="iconly-Arrow-Right-2 icli"> </i></a>
                    <ul class="sidebar-submenu">
                        <li> <a href="{{route('carton.create')}}">Ajouter un type de carton</a></li>
                        <li> <a href="{{route('carton.index')}}">Liste des types cartons</a></li>
                    </ul>
                </li>
                <li class="sidebar-list"> <a class="sidebar-link" href="javascript:void(0)">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="64" height="64">
                        <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <!-- Contour du but -->
                          <rect x="8" y="20" width="48" height="24" rx="4" ry="4" />
                          <!-- Barres de but -->
                          <line x1="8" y1="32" x2="56" y2="32" />
                          <line x1="8" y1="20" x2="8" y2="44" />
                          <line x1="56" y1="20" x2="56" y2="44" />
                        </g>
                      </svg>                      
                    <h6 class="f-w-600">But</h6><i class="iconly-Arrow-Right-2 icli"> </i></a>
                    <ul class="sidebar-submenu">
                        <li> <a href="{{route('but.create')}}">Ajouter un type de but</a></li>
                        <li> <a href="{{route('but.index')}}">Liste des types de but</a></li>
                    </ul>
                </li>
              <li class="sidebar-main-title">
                <div>
                  <h5 class="f-w-700 sidebar-title pt-3">Utilisateurs</h5>
                </div>
              </li>
                <li class="sidebar-list"> <a class="sidebar-link" href="buttons.html">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="64" height="64">
                        <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <!-- Engrenage -->
                          <circle cx="32" cy="32" r="12" />
                          <line x1="32" y1="12" x2="32" y2="6" />
                          <line x1="32" y1="52" x2="32" y2="58" />
                          <line x1="12" y1="32" x2="6" y2="32" />
                          <line x1="52" y1="32" x2="58" y2="32" />
                        </g>
                      </svg>
                      
                  <h6 class="f-w-600">Paramètres </h6></a>
                </li>
                <li class="sidebar-list"> <a class="sidebar-link" href="buttons.html">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="64" height="64">
                        <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <!-- Enveloppe -->
                          <rect x="8" y="16" width="48" height="32" rx="4" ry="4" />
                          <line x1="8" y1="16" x2="32" y2="32" />
                          <line x1="32" y1="32" x2="56" y2="16" />
                        </g>
                      </svg>
                      
                  <h6 class="f-w-600">Email </h6></a>
                </li>
                <li class="sidebar-list"> <a class="sidebar-link" href="buttons.html">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="64" height="64">
                        <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <!-- Bulle de message -->
                          <path d="M8 16h48c4 0 4 4 4 4v24c0 4-4 4-4 4H8c-4 0-4-4-4-4V20c0-4 4-4 4-4z" />
                          <polygon points="20,48 24,44 28,48" />
                        </g>
                      </svg>
                      
                  <h6 class="f-w-600">Messages </h6></a>
                </li>
                
              <li class="sidebar-list"> <a class="sidebar-link" href="javascript:void(0)">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="64" height="64">
                    <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <!-- Tableau d'Annonce -->
                      <rect x="8" y="12" width="48" height="40" rx="4" ry="4" />
                      <line x1="8" y1="24" x2="56" y2="24" />
                      <line x1="8" y1="36" x2="56" y2="36" />
                      <line x1="8" y1="48" x2="56" y2="48" />
                    </g>
                  </svg>
                  
                  <h6 class="f-w-600">Annonces</h6><i class="iconly-Arrow-Right-2 icli"> </i></a>
                <ul class="sidebar-submenu">
                  <li> <a href="{{route('annonces.create')}}">Publier une annonce</a></li>
                  <li><a href="{{route('annonces.index')}}">Liste des annonces</a></li>
                </ul>
              </li>
              <li class="sidebar-list"><a class="sidebar-link" href="javascript:void(0)">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="64" height="64">
                    <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <!-- Contour du document -->
                      <rect x="12" y="8" width="40" height="48" rx="4" ry="4" />
                      <line x1="12" y1="16" x2="52" y2="16" />
                      <line x1="12" y1="24" x2="52" y2="24" />
                      <line x1="12" y1="32" x2="52" y2="32" />
                    </g>
                  </svg>
                  
                  <h6 class="f-w-600">Document</h6><i class="iconly-Arrow-Right-2 icli"></i></a>
                <ul class="sidebar-submenu"> 
                  <li><a href="{{route('document.create')}}">Ajouter un document</a></li>
                  <li> <a href="{{route('document.index')}}">Historique </a></li>
                </ul>
              </li>
            </ul>
          </div>
<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>