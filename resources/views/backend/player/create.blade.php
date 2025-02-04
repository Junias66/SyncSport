@extends('backend.dashboard')
@section('content')
<style>
    .custom-form-container {
        background-color: #1a1a1a; /* Couleur de fond noire légèrement atténuée */
        padding: 70px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 35px;
        width: 100%;
        color: #fff; /* Texte en blanc */
    }

    .custom-progress-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 40px; /* Espace entre la barre de progression et les champs */
        position: relative;
    }

    .custom-progress-line {
        position: absolute;
        top: 50%;
        left: 0;
        height: 3px;
        background-color: #ccc;
        z-index: 0;
        width: 100%;
        transition: width 0.3s ease;
    }

    .custom-progress-line.active {
        background-color: #28a745; /* Couleur verte pour la ligne active */
    }

    .custom-step {
        position: relative;
        text-align: center;
        padding: 10px;
        z-index: 1;
        flex: 1; /* Réduire l'espace entre les étapes */
    }

    .custom-step::before {
        content: attr(data-step); /* Afficher le numéro de l'étape */
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 60px; /* Agrandir le cercle */
        height: 60px; /* Agrandir le cercle */
        border: 2px solid #ccc;
        border-radius: 50%;
        background-color: #000; /* Fond noir */
        color: #fff; /* Texte blanc */
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
    }

    .custom-step.active::before {
        border-color: #00ff66;
        background-color: #000000;
        color: #fff;
    }

    .custom-step.active ~ .custom-step::before {
        background-color: #000000;
    }

    .custom-step span {
        position: absolute;
        top: 230%;
        left: 50%;
        transform: translateX(-50%);
        font-size: 15px;
        color: #888;
    }

    .custom-form-step {
        display: none;
        padding-top: 100px;
    }

    .custom-form-step.active {
        display: block;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #fff; /* Texte en blanc */
    }

    input, textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #1e1e1e; /* Fond des champs */
        color: #fff; /* Texte en blanc */
    }

    button {
        background-color: #007BFF;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }

    .prev-btn {
        background-color: #6c757d;
    }

    .prev-btn:hover {
        background-color: #5a6268;
    }

    .btn-container {
        text-align: right;
    }
</style>
<div class="col-12">
    <div class="custom-form-container">
        <div class="custom-progress-bar">
            <div class="custom-progress-line"></div>
            <div class="custom-step active" data-step="1"><span>Informations Personnelles</span></div>
            <div class="custom-step" data-step="2"><span>Informations basiques</span></div>
            <div class="custom-step" data-step="3"><span>Informations concernant le club</span></div>
            <div class="custom-step" data-step="4"><span>Terminé</span></div>
        </div>
        <form id="multiStepForm" class="needs-validation" novalidate="" action="{{ route('players.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="custom-form-step active">
                <div class="row">
                    <div class="col-6">
                        <label class="form-label" for="lastnamewizard">Nom<span class="text-danger">*</span></label>
                        <input class="form-control" id="lastnamewizard" type="text" required="" placeholder="M'BAPPE" name="last_name">
                        <div class="invalid-feedback">Please enter your valid name</div>
                        <div class="valid-feedback">Looks's Good!</div>
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="firstnamewizard">Prénom<span class="text-danger">*</span></label>
                        <input class="form-control" id="firstnamewizard" type="text" required="" placeholder="Kylian" name="first_name">
                        <div class="invalid-feedback">Please enter your valid name</div>
                        <div class="valid-feedback">Looks's Good!</div>
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="usernamewizard">Nom d'utilisateur<span class="text-danger">*</span></label>
                        <input class="form-control" id="usernamewizard" type="text" required="" placeholder="Choissisez un nom d'utilisateur" name="username">
                        <div class="invalid-feedback">Please enter your valid name</div>
                        <div class="valid-feedback">Looks's Good!</div>
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="sexwizard">Sexe<span class="text-danger">*</span></label>
                        <select class="form-control" id="sexwizard" name="sex" required>
                            <option value="" disabled selected>Sélectionner le sexe</option>
                            <option value="M">Masculin</option>
                            <option value="F">Féminin</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="emailwizard">Email de connexion<span class="text-danger">*</span></label>
                        <input class="form-control" id="emailwizard" type="email" placeholder="kylian@gmail.com" required="" name="email">
                        <div class="invalid-feedback">Please enter your valid email</div>
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="passwordwizard">Mot de passe<span class="text-danger">*</span></label>
                        <input class="form-control" id="passwordwizard" type="password" placeholder="Mot de passe" required="" name="password">
                        <div class="invalid-feedback">Please enter your valid password</div>
                    </div>
                </div>
                <div class="btn-container">
                    <button type="button" class="next-btn btn btn-primary">Suivant</button>
                </div>
            </div>
            <div class="custom-form-step">
                <div class="row">
                  <div class="col-md-12"> 
                    <label class="form-label" for="placeholdername">Adresse </label>
                    <input class="form-control" id="placeholdername" type="text" required="" placeholder="Adresse du joueur" name="adresse">
                  </div>
                  <div class="col-md-4">               
                    <label class="form-label" for="textCardNumber1">Date de naissance</label>
                    <input class="form-control" id="textCardNumber1" type="date" required="" placeholder="xx/xx/xx" name="birthday">
                    <div class="invalid-feedback">Please enter your valid number</div>
                    <div class="valid-feedback">
                       Looks's Good!</div>
                  </div>
                  <div class="col-md-4">
                    <label class="form-label" for="validationCustom-ddd">Taille(cm)</label>
                    <input class="form-control" id="validationCustom-ddd" type="number" required="" name="height">
                    <div class="invalid-feedback">Please enter your valid number</div>
                    <div class="valid-feedback">
                       Looks's Good!</div>
                  </div>
                  <div class="col-md-4">
                    <label class="form-label" for="cvvnumber3">Poids(kg)</label>
                    <input class="form-control" id="cvvnumber3" type="number" required="" name="weight">
                    <div class="invalid-feedback">Please enter your valid number</div>
                    <div class="valid-feedback">
                       Looks's Good!</div>
                  </div>
                  <div class="col-md-4">
                    <label class="form-label" for="validationCustom-ddd">Numéro de téléphone</label>
                    <input class="form-control" id="validationCustom-ddd" type="number" required="" name="tel">
                    <div class="invalid-feedback">Please enter your valid number</div>
                    <div class="valid-feedback">
                       Looks's Good!</div>
                  </div>
                  <div class="col-md-4">
                    <label class="form-label" for="cvvnumber3">Nationalité</label>
                    <select class="form-control" id="nationality" required name="nationality">
                      <option value="" disabled selected>Choisir la nationalité</option>
                    </select>
                    <div class="invalid-feedback">Please enter your valid number</div>
                    <div class="valid-feedback">
                       Looks's Good!</div>
                  </div>
                  <!--<div class="col-12"> 
                    <label class="form-label" for="formFile3">Photo du joueur</label>
                    <input class="form-control" id="image" type="file" aria-label="file example" required="" name="pics">
                    <div class="invalid-feedback">Invalid form file selected</div>
                  </div>
                  <div class="mb-3"> 
                    <label class="form-label" for="formFile3"></label>
                    <img class="wd-50" id="showimage" src="" style="max-width: 60%">
                  </div>-->
                </div>
                <div class="btn-container">
                    <button type="button" class="prev-btn btn btn-secondary">Précédent</button>
                    <button type="button" class="next-btn btn btn-primary">Suivant</button>
                </div>
            </div>
            <div class="custom-form-step">
                <div class="row">
                  <div class="col-6">
                    <label class="form-label" for="email-basic">Numéro à attribuer<span class="text-danger">*</span></label>
                    <select class="form-control" name="number" id="">
                      <option value="" disabled selected>Selectionner le numéro</option>
                      @foreach ($numeros as $numero)
                          <option value="{{ $numero->id }}">
                              {{ $numero->number }}
                          </option>
                      @endforeach
                    </select>
                    <div class="invalid-feedback">Please enter your valid link</div>
                    <div class="valid-feedback">
                          Looks's Good!
                    </div>
                  </div>
                  <div class="col-6">
                    <label class="form-label" for="validationCustom996">Position<span class="text-danger">*</span></label>
                    <select class="form-control" name="position" id="">
                      <option value="" disabled selected>Selectionner la position</option>
                      @foreach ($positions as $position)
                          <option value="{{ $position->id }}">
                              {{ $position->position_name }}
                          </option>
                      @endforeach
                    </select>
                    <div class="invalid-feedback">Please enter your valid link</div>
                    <div class="valid-feedback">
                       Looks's Good!
                    </div>
                  </div>
                  <div class="col-6">
                    <label class="form-label" for="email-basic">Catégorie d'âge<span class="text-danger">*</span></label>
                    <select class="form-control" name="age_category" id="">
                      <option value="" disabled selected>Selectionner la catégorie d'âge</option>
                      @foreach ($categ as $cate)
                                  @php
                                      $intervalle = json_decode($cate->intervalle, true);
                                  @endphp
                          <option value="{{ $cate->id }}">
                              [{{ $intervalle['min'] }} - {{ $intervalle['max'] }}](ans)
                          </option>
                      @endforeach
                    </select>
                    <div class="invalid-feedback">Please enter your valid link</div>
                    <div class="valid-feedback">
                          Looks's Good!
                    </div>
                  </div>
                  <div class="col-6">
                    <label class="form-label" for="validationCustom996">Equipe affecté<span class="text-danger">*</span></label>
                    <select class="form-control" name="team" id="">
                      <option value="" selected disabled >Selectionner l'équipe</option>
                      @foreach ($teams as $team)
                          <option value="{{ $team->id }}">
                              {{ $team->team_name }}
                          </option>
                      @endforeach
                    </select>
                    <div class="invalid-feedback">Please enter your valid link</div>
                    <div class="valid-feedback">
                       Looks's Good!
                    </div>
                  </div>
                  <div class="col-12"> 
                    <label class="form-label" for="givefeedback">Description</label>
                    <textarea class="form-control" id="givefeedback" name="description" required></textarea>
                    <div class="invalid-feedback">Please enter a message in the textarea.</div>
                  </div>
                </div>
                <div class="btn-container">
                    <button type="button" class="prev-btn btn btn-secondary">Précédent</button>
                    <button type="button" class="next-btn btn btn-primary">Suivant</button>
                </div>
            </div>
            <div class="custom-form-step">
                <div class="row">
                  <div class="col-12 m-0">
                    <div class="successful-form"><img class="img-fluid" src="{{ asset('storage/backend/assets2/images/gif/success/successful.gif') }}" alt="successful">
                      <h6>Félicitations </h6>
                      <p>Veuillez valider les informations saisies </p>
                    </div>
                  </div>
                </div>
                <div class="btn-container">
                    <button type="button" class="prev-btn btn btn-secondary">Précédent</button>
                    <button type="submit" class="btn btn-primary">Valider</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
  
    document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('multiStepForm');
    const steps = document.querySelectorAll('.custom-form-step');
    const progressSteps = document.querySelectorAll('.custom-step');
    const progressLine = document.querySelector('.custom-progress-line');
    let currentStep = 0;

    function showStep(stepIndex) {
        steps.forEach((step, index) => {
            step.classList.toggle('active', index === stepIndex);
        });
        progressSteps.forEach((step, index) => {
            step.classList.toggle('active', index <= stepIndex);
        });
        progressLine.style.width = `${(stepIndex / (progressSteps.length - 1)) * 100}%`;
        progressLine.classList.toggle('active', stepIndex > 0);
    }

    function validateStep(stepIndex) {
        const currentStepElement = steps[stepIndex];
        const inputs = currentStepElement.querySelectorAll('input, select, textarea');
        let isValid = true;

        inputs.forEach(input => {
            if (!input.checkValidity()) {
                isValid = false;
                input.classList.add('is-invalid'); // Ajoute une classe Bootstrap pour afficher l'erreur
            } else {
                input.classList.remove('is-invalid');
            }
        });

        return isValid;
    }

    document.querySelectorAll('.next-btn').forEach(button => {
        button.addEventListener('click', function() {
            if (validateStep(currentStep)) { // Vérifie la validation avant de passer à l'étape suivante
                if (currentStep < steps.length - 1) {
                    currentStep++;
                    showStep(currentStep);
                }
            }
        });
    });

    document.querySelectorAll('.prev-btn').forEach(button => {
        button.addEventListener('click', function() {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        });
    });

    /*$(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showimage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });*/
  

    showStep(currentStep);

        const nationalities = [
            "Afghan", "Albanais", "Algérien", "Allemand", "Américain", "Angolais", "Argentin", "Australien", "Autrichien",
            "Bangladais", "Belge", "Béninois", "Bolivien", "Brésilien", "Britannique", "Bulgares", "Burkinabé", "Burundais",
            "Cambodgien", "Camerounais", "Canadien", "Centrafricain", "Chilien", "Chinois", "Colombien", "Comorien",
            "Congolais", "Costaricien", "Cubain", "Danois", "Djiboutien", "Dominicain", "Égyptien", "Espagnol",
            "Estonien", "Éthiopien", "Finlandais", "Français", "Gabonais", "Gambien", "Géorgien", "Ghanéen", "Grec",
            "Guinéen", "Haïtien", "Hondurien", "Hongrois", "Indien", "Indonésien", "Irakien", "Irlandais", "Italien",
            "Ivoirien", "Jamaïcain", "Japonais", "Jordanien", "Kazakh", "Kényan", "Libanais", "Libérien", "Libyen",
            "Malaisien", "Malien", "Marocain", "Mauricien", "Mauritanien", "Mexicain", "Mozambicain", "Nigérian",
            "Norvégien", "Pakistanais", "Péruvien", "Philippin", "Polonais", "Portugais", "Roumain", "Russe",
            "Sénégalais", "Serbe", "Soudanais", "Sri-lankais", "Sud-africain", "Suisse", "Suédois", "Tchadien",
            "Thaïlandais", "Tunisien", "Turc", "Ukrainien", "Uruguayen", "Vénézuélien", "Vietnamien", "Yéménite", "Zimbabwéen"
        ];

        const nationalitySelect = document.getElementById("nationality");

        // Remplissage de la liste
        nationalities.forEach(nationality => {
            const option = document.createElement("option");
            option.value = nationality;
            option.textContent = nationality;
            nationalitySelect.appendChild(option);
        });
    });
</script>
@endsection
