<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SyncSport</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('storage/frontend/assets/front/css/style.css') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/regular.min.css" rel="stylesheet">
        <!-- Styles -->
       
    </head>
    <body>
        <nav>
            <a href="" class="nav-icon" aria-label="visit homepage" aria-current="page">
                <img src="{{ asset('storage/frontend/assets/front/images/logo.png') }}" alt="logo">
                <span>SyncSport</span>
            </a>

            <div class="main-navlinks">
                <button class="hamburger" type="button" aria-label="toggle navigation" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="navlinks-container">
                    <a href="#" aria-current="page">Accueil</a>
                    <a href="#">Fonctionnalités</a>
                    <a href="#">A propos</a>
                    <a href="#">Contact</a>
                </div>
            </div>

            <div class="nav-auth">
                <a href="#" class="sign-user" aria-label="Sign in page">
                    <img src="{{ asset('storage/frontend/assets/front/images/user.jpeg') }}" alt="user-icon">
                </a>
                <div class="sign-btn">
                    <button type="button"><a href="{{ route('log-in') }}" target="_blank">Se connecter</a></button>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="part1">
                <div class="txt">
                    <h1>L'outil sportif ultime</h1>
                    <h3>INNOVER &#9679; ORGANISER &#9679; REUSSIR</h3>  
                    <button type="button"><a href="{{ route('sign-in') }}">Inscrire mon club</a></button>
                </div>  
                <div class="img1">
                    <img src="{{ asset('storage/frontend/assets/front/images/img1.png') }}" alt="Image Dashboard">
                </div>   
            </div>
            <div class="fonctionnalites">
                <div class="part2">
                    <h2>Fonctionnalités</h2>
                    <p>
                        Concentrez-vous sur le terrain, notre logiciel de gestion de club s’occupe du reste ! <br>
                            Toutes ces fonctionnalités visent à ameliorer la productivité de votre club.
                    </p>
                </div>
                <div class="colonne">
                    <div class="row">
                        <li>
                            <i class="fa fa-users"></i>
                            <span>Gestion des équipes</span>
                            <p>Optimisez la coordination et la performance de vos équipes grâce 
                                à des outils simples et efficaces pour une gestion sans faille.</p>
                        </li>
                    </div>
                    <div class="row">
                        <li>
                            <i class="fa fa-running"></i>
                            <span>Gestion des joueurs</span>
                            <p>
                                Suivez et analysez les performances de vos joueurs pour maximiser 
                                leur potentiel et renforcer la cohésion de votre équipe.
                            </p>
                        </li>
                    </div>
                    <div class="row">
                        <li>
                            <i class="fa fa-chalkboard-teacher"></i>
                            <span>Gestion des entraînements et matchs</span>
                            <p>
                                Planifiez vos entraînements et organisez vos matches avec précision pour 
                                maximiser la performance de votre équipe et garantir des résultats optimaux.
                            </p>
                        </li>
                    </div>
                    <div class="row">
                        <li>
                            <i class="fa fa-trophy"></i>
                            <span>Gestion des compétitions</span>
                            <p>
                                Coordonnez vos compétitions avec efficacité, suivez les classements en temps 
                                réel et assurez une expérience sportive mémorable pour tous.
                            </p>
                        </li>
                    </div>
                    <div class="row">
                        <li>
                            <i class="fa fa-bar-chart"></i>
                            <span>Gestion des statistiques</span>
                            <p>
                                Collectez, analysez et visualisez les données pour mieux 
                                comprendre les performances et guider vos stratégies.
                            </p>
                        </li>
                    </div>
                    <div class="row">
                        <li>
                            <i class="fa fa-line-chart "></i>
                            <span>Indicateurs de performance</span>
                            <p>
                                Suivez et améliorez les performances grâce à des 
                                indicateurs précis et des analyses détaillées.
                            </p>
                        </li>
                    </div>
                    <div class="row">
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <span>Gestion des lieux d'entraînement</span>
                            <p>
                                Organisez et gérez efficacement vos lieux d'entraînement pour 
                                garantir une disponibilité optimale et des séances sans encombre.
                            </p>
                        </li>
                    </div>
                    <div class="row">
                        <li>
                            <i class="fa fa-comment"></i>
                            <span>Communication interne</span>
                            <p>
                                Facilitez la communication au sein de votre équipe avec des outils 
                                simples et efficaces pour une coordination fluide et rapide.
                            </p>
                        </li>
                    </div>
                </div>
            </div>
            <div class="part3">
                <div class="part3_child1">
                    <li>
                        <h5>1</h5>
                        <p>année <br>
                            d'expérience</p>
                    </li>
                    <li>
                        <h5>30+</h5>
                        <p>outils pour <br> gérer votre club</p>
                    </li>
                    <li>
                        <h5>1</h5>
                        <p>sport <br> disponible</p>
                    </li>
                    <li>
                        <h5>3000+</h5>
                        <p>associations et clubs <br> utilisateurs</p>
                    </li>
                </div>
                <div class="part3_child2">
                    <span>Pour qui?</span>
                    <h3>Un logiciel pour toutes les associations sportives</h3><br><br>
                    <p>Notre logiciel de gestion s'adapte aux spécificités de votre structure sportive</p>

                    <div class="grid-container">
                        <ul>
                            <li>Association sportive</li>
                            <li>Groupement de club</li>
                            <li>Club omnisports</li>
                        </ul>
                        <ul>
                            <li>Sports scolaires</li>
                            <li>Comité départemental</li>
                            <li>Ligue régionale</li>
                            <li>Fédération</li>
                        </ul>
                        <img src="{{ asset('storage/frontend/assets/front/images/terrain.jpg') }}" alt="">      
                    </div>
                </div>
            </div>
            <div class="part4">
                <div class="mission">
                    <span>Notre mission</span>
                    <p>Vous accompagner au quotidien</p>
                </div>
                <div class="second_container">
                    <div class="row1">
                        <i class="fas fa-compress"></i>
                        <span style="color: #41b9ff">Centraliser </span><span>vos outils </span> 
                        <p>
                            Nous souhaitons vous aider à pérenniser votre structure et faciliter les passations. 
                            Pour cela, nous avons réuni les outils de gestion et les informations de votre association sportive dans un lieu unique.
                        </p>
                    </div>
                    <div class="row1">
                        <i class="fas fa-user-friends"></i>
                        <span style="color: #41b9ff">Collaborer </span><span>avec vos membres </span>
                        <p>
                            Notre ambition est de vous offrir les conditions propices au travail en collaboration. 
                            Kalisport vous permet de mobiliser vos membres simplement grâce à la gestion des droits d'accès.
                        </p>
                    </div>
                    <div class="row1">
                        <i class="fas fa-hourglass-start"></i>
                        <span style="color: #41b9ff">Accélérer </span><span>vos tâches </span>
                        <p>
                            Nous avons à cœur de mettre en place les solutions pour faire gagner du temps à vos bénévoles. 
                            Des outils simples et efficaces sont à leur disposition pour qu'ils se concentrent sur l'essentiel.
                        </p>
                    </div>
                    <div class="row1">
                        <i class="fas fa-user-shield"></i>
                        <span style="color: #41b9ff">Sécuriser </span><span>vos données </span>
                        <p>
                            La sécurité du logiciel et de vos données est une préoccupation majeure. 
                            Nous hébergeons vos données en France, sur des serveurs qui nous appartiennent et que nous infogérons.
                        </p>
                    </div>
                </div>
            </div>
            <div class="part_5">
                <div class="logo2">
                   <img src="{{ asset('storage/frontend/assets/front/images/logo.png') }}" alt="">
                </div>
                <div class="begin">
                    <h2>Créez votre plateforme gratuitement</h2>
                    <h6>
                        Prêt à vous lancer avec SyncSport ? <br>
                        N'attendez plus et commencez à prendre en main le nouveau logiciel pour votre association sportive.
                    </h6>
                    <button type="button"><a href="{{ route('sign-in') }}">Commencez dès maintenant</a></button>
                </div>
            </div>
            <div class="fin">
                <img src="{{ asset('storage/frontend/assets/front/images/logo.png') }}" alt="logo">
                <span>SyncSport</span>
            </div>           
        </div>
        <footer class="main-footer">
            <div class="lien_droit">
                <ul>
                    <li><a href="">Accueil</a></li>
                    <li><a href="">Fonctionnalités</a></li>
                    <li><a href="">A propos</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            <div class="form-contact">
                <form action="">
                    <label for="email">Email<span style="color: red">*</span></label>
                    <input type="text" name="email" placeholder="Entrez votre email" required>

                    <label for="message">Message</label>
                    <textarea name="message" id=""  placeholder="Saisir le message" required></textarea>
                    <div class="buttons">
                        <button type="submit">Envoyer</button>
                        <button type="reset">Annuler</button>
                    </div>
                    
                </form>
            </div>
            <div class="links-app">
                <div class="img-app">
                    <img src="{{ asset('storage/frontend/assets/front/images/lien-app.png') }}" alt="">
                </div>
                <div class="links-r">
                    <li>
                        <i class="fab fa-instagram"></i>
                    </li>
                    <li>
                        <i class="fab fa-facebook"></i>
                    </li>
                    <li>
                        <i class="fab fa-twitter  "></i>
                    </li>
                </div>   
            </div>
            <hr>
        </footer>
        <script src="{{ asset('storage/frontend/assets/front/js/script.js') }}"></script>
    </body>
</html>
