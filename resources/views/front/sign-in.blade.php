<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
    <link rel="stylesheet" href="{{ asset('storage/frontend/assets/front/css/sign.css') }}">
</head>
<body>

    <div id="page" class="site">
        <div class="container">
            <div class="form-box">
                <div class="progress">
                    <div class="logo"><a href=""><span>Sync</span></a><span>Sport</span></div>
                    <ul class="progress-steps">
                        <li class="step active">
                            <span>1</span>
                            <p>Informations générale <br> <span>Informations sur l'administrateur</span></p>
                        </li>
                        <li class="step">
                            <span>2</span>
                            <p>Informations sur le club <br> <span>Informations générale sur le club</span></p>
                        </li>
                        <li class="step">
                            <span>3</span>
                            <p>Mot de Passe <br> <span>Créez un mot de passe robuste</span></p>
                        </li>
                    </ul>
                </div>
                        @if ($errors->any())
                            <div>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                <form action="{{ route('store.club') }}" method="POST">
                    @csrf
                    <div class="form-one form-step active">
                        <div class="bg-svg">

                        </div>
                        <h1>Créez votre plateforme SyncSport</h1>
                        <p>Aucune carte de crédit ne vous sera demandée.
                            Inscription 100% gratuite.</p>
                        <div>
                            <label for="nom_admin">Votre nom <span style="color: red"> *</span></label>
                            <input type="text" name="nom_admin" class="form-control @error('nom_admin') is-invalid @enderror" id="nom_admin" value="{{ old('nom_admin') }}" required>
                            @error('nom_admin')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>     
                        <div>
                            <label>Votre prénom <span style="color: red"> *</span></label>
                            <input type="text" name="prenom_admin" class="form-control @error('prenom_admin') is-invalid @enderror" id="prenom_admin" value="{{ old('prenom_admin') }}" required>
                            @error('prenom_admin')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div> 
                    </div>
                    <div class="form-two form-step">
                        <div class="bg-svg"></div>
                        <h2>Votre Club</h2>
                        <div>
                            <label>Nom du club <span style="color: red"> *</span></label>
                            <input type="text" name="nom_club" class="form-control @error('nom_club') is-invalid @enderror" id="nom_club" value="{{ old('nom_club') }}" required>
                            @error('nom_club')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label>Adresse</label>
                            <input type="text" name="adresse" required>
                        </div>
                        <div>
                            <label>Email ou contact du club <span style="color: red"> *</span></label>
                            <input type="email" name="email_club" required>
                        </div>
                        <div>
                            <label>Pays <span style="color: red"> *</span></label>
                            <select name="pays" id="pays" required>
                                <option value="" disabled>Sélectionner un pays</option>
                                <option value="AF">Afghanistan</option>
                                <option value="ZA">Afrique du Sud</option>
                                <option value="AL">Albanie</option>
                                <option value="DZ">Algérie</option>
                                <option value="DE">Allemagne</option>
                                <option value="AD">Andorre</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctique</option>
                                <option value="AG">Antigua-et-Barbuda</option>
                                <option value="SA">Arabie Saoudite</option>
                                <option value="AR">Argentine</option>
                                <option value="AM">Arménie</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australie</option>
                                <option value="AT">Autriche</option>
                                <option value="AZ">Azerbaïdjan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahreïn</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbade</option>
                                <option value="BY">Bélarus</option>
                                <option value="BE">Belgique</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Bénin</option>
                                <option value="BM">Bermudes</option>
                                <option value="BT">Bhoutan</option>
                                <option value="BO">Bolivie</option>
                                <option value="BA">Bosnie-Herzégovine</option>
                                <option value="BW">Botswana</option>
                                <option value="BR">Brésil</option>
                                <option value="BN">Brunei</option>
                                <option value="BG">Bulgarie</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodge</option>
                                <option value="CM">Cameroun</option>
                                <option value="CA">Canada</option>
                                <option value="CV">Cap-Vert</option>
                                <option value="CF">Centrafrique</option>
                                <option value="TD">Tchad</option>
                                <option value="CL">Chili</option>
                                <option value="CN">Chine</option>
                                <option value="CY">Chypre</option>
                                <option value="CO">Colombie</option>
                                <option value="KM">Comores</option>
                                <option value="CG">Congo</option>
                                <option value="CD">République Démocratique du Congo</option>
                                <option value="CK">Îles Cook</option>
                                <option value="CR">Costa Rica</option>
                                <option value="HR">Croatie</option>
                                <option value="CU">Cuba</option>
                                <option value="KW">Koweït</option>
                                <option value="CY">Chypre</option>
                                <option value="CZ">République tchèque</option>
                                <option value="DK">Danemark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominique</option>
                                <option value="DO">République dominicaine</option>
                                <option value="EC">Équateur</option>
                                <option value="EG">Égypte</option>
                                <option value="SV">Salvador</option>
                                <option value="GQ">Guinée équatoriale</option>
                                <option value="ER">Érythrée</option>
                                <option value="EE">Estonie</option>
                                <option value="SZ">Eswatini</option>
                                <option value="ET">Éthiopie</option>
                                <option value="FJ">Fidji</option>
                                <option value="FI">Finlande</option>
                                <option value="FR">France</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambie</option>
                                <option value="GE">Géorgie</option>
                                <option value="DE">Allemagne</option>
                                <option value="GH">Ghana</option>
                                <option value="GR">Grèce</option>
                                <option value="GD">Grenade</option>
                                <option value="GT">Guatemala</option>
                                <option value="GN">Guinée</option>
                                <option value="GW">Guinée-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haïti</option>
                                <option value="HN">Honduras</option>
                                <option value="HU">Hongrie</option>
                                <option value="IS">Islande</option>
                                <option value="IN">Inde</option>
                                <option value="ID">Indonésie</option>
                                <option value="IR">Iran</option>
                                <option value="IQ">Irak</option>
                                <option value="IE">Irlande</option>
                                <option value="IL">Israël</option>
                                <option value="IT">Italie</option>
                                <option value="JM">Jamaïque</option>
                                <option value="JP">Japon</option>
                                <option value="JO">Jordanie</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KW">Koweït</option>
                                <option value="KG">Kirghizistan</option>
                                <option value="LA">Laos</option>
                                <option value="LV">Lettonie</option>
                                <option value="LB">Liban</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Libéria</option>
                                <option value="LY">Libye</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lituanie</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macao</option>
                                <option value="MK">Macédoine du Nord</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaisie</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malte</option>
                                <option value="MH">Îles
                                <option value="MH">Îles Marshall</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritanie</option>
                                <option value="MU">Maurice</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexique</option>
                                <option value="FM">Micronésie</option>
                                <option value="MD">Moldavie</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolie</option>
                                <option value="ME">Monténégro</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Maroc</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar</option>
                                <option value="NA">Namibie</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Népal</option>
                                <option value="NL">Pays-Bas</option>
                                <option value="NC">Nouvelle-Calédonie</option>
                                <option value="NZ">Nouvelle-Zélande</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigéria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Île Norfolk</option>
                                <option value="NO">Norvège</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palaos</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papouasie-Nouvelle-Guinée</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Pérou</option>
                                <option value="PH">Philippines</option>
                                <option value="PL">Pologne</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Porto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="RE">La Réunion</option>
                                <option value="RO">Roumanie</option>
                                <option value="RU">Russie</option>
                                <option value="RW">Rwanda</option>
                                <option value="BL">Saint-Barthélemy</option>
                                <option value="SH">Saint-Hélène</option>
                                <option value="KN">Saint-Kitts-et-Nevis</option>
                                <option value="LC">Sainte-Lucie</option>
                                <option value="MF">Saint-Martin (partie française)</option>
                                <option value="PM">Saint-Pierre-et-Miquelon</option>
                                <option value="VC">Saint-Vincent-et-les-Grenadines</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">Saint-Marin</option>
                                <option value="ST">Sao Tomé-et-Principe</option>
                                <option value="SA">Arabie Saoudite</option>
                                <option value="SN">Sénégal</option>
                                <option value="RS">Serbie</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapour</option>
                                <option value="SX">Sint Maarten (partie néerlandaise)</option>
                                <option value="SK">Slovaquie</option>
                                <option value="SI">Slovénie</option>
                                <option value="SB">Îles Salomon</option>
                                <option value="SO">Somalie</option>
                                <option value="ZA">Afrique du Sud</option>
                                <option value="GS">Géorgie du Sud-et-les Îles Sandwich du Sud</option>
                                <option value="SS">Soudan du Sud</option>
                                <option value="ES">Espagne</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SD">Soudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard et Île Jan Mayen</option>
                                <option value="SE">Suède</option>
                                <option value="CH">Suisse</option>
                                <option value="SY">Syrie</option>
                                <option value="TW">Taïwan</option>
                                <option value="TJ">Tadjikistan</option>
                                <option value="TZ">Tanzanie</option>
                                <option value="TH">Thaïlande</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinité-et-Tobago</option>
                                <option value="TN">Tunisie</option>
                                <option value="TR">Turquie</option>
                                <option value="TM">Turkménistan</option>
                                <option value="TC">Îles Turques-et-Caïques</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Ouganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">Émirats arabes unis</option>
                                <option value="GB">Royaume-Uni</option>
                                <option value="US">États-Unis</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Ouzbékistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VA">Vatican</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Vietnam</option>
                                <option value="WF">Wallis-et-Futuna</option>
                                <option value="EH">Sahara occidental</option>
                                <option value="YE">Yémen</option>
                                <option value="ZM">Zambie</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>    
                        </div>
                    </div>
                    <div class="form-three form-step">
                        <div class="bg-svg"></div>
                        <h2>Sécurité</h2>
                        <div>
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Votre email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label>Nom d'utilisateur</label>
                            <input type="text" name="username" placeholder="Nom d'utilisateur" required>
                        </div>
                        <div>
                            <label>Mot de passe</label>
                            <input type="password" name="password" id="password" placeholder="Mot de passe" class="form-control @error('password') is-invalid @enderror" id="password" value="{{ old('password') }}" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label>Confirmer le mot de passe</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" required>
                        </div>
                        
                        <!--<div class="checkbox">
                            <input type="checkbox">
                            <label>Recevez les nouvelles offres</label>
                        </div>-->
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn-prev" disabled>Retour</button>
                        <button type="button" class="btn-next">Suivant</button>
                        <button type="submit" class="btn-submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
       
    <script src="{{ asset('storage/frontend/assets/front/js/sign.js') }}"></script>
    <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            const password = document.querySelector('#password').value;
            const passwordConfirmation = document.querySelector('#password_confirmation').value;
    
            if (password !== passwordConfirmation) {
                e.preventDefault(); // Empêche la soumission du formulaire
                alert('Les mots de passe ne correspondent pas.');
            }
        });
    </script>
    
</body>
</html>