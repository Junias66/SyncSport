@extends('backend.dashboard')
@section('content')
<div class="row">
<div class="col-xl-12">
    <div class="card">
      <div class="card-header card-no-border pb-0">
        <h3>Ajouter un joueur </h3>
        <p class="mt-1 mb-0">Veuillez suivre les étapes ci dessous</p>
      </div>
      <div class="card-body basic-wizard important-validation">
        <div class="stepper-horizontal" id="stepper1">
          <div class="stepper-one stepper step active done">
            <div class="step-circle"><span>1</span></div>
            <div class="step-title">Informations Personnelles </div>
            <div class="step-bar-left"></div>
            <div class="step-bar-right"></div>
          </div>
          <div class="stepper-two step">
            <div class="step-circle"><span>2</span></div>
            <div class="step-title">Informations basiques</div>
            <div class="step-bar-left"></div>
            <div class="step-bar-right"></div>
          </div>
          <div class="stepper-three step">
            <div class="step-circle"><span>3</span></div>
            <div class="step-title">Informations concernant le club</div>
            <div class="step-bar-left"></div>
            <div class="step-bar-right"></div>
          </div>
          <div class="stepper-four step">
            <div class="step-circle"><span>4</span></div>
            <div class="step-title">Terminé</div>
            <div class="step-bar-left"></div>
            <div class="step-bar-right"> </div>
          </div>
        </div>
        <div id="msform">
          <form class="stepper-one row g-3 needs-validation custom-input" novalidate="" style="display: none;">
            <div class="col-6">       
              <label class="form-label" for="email-basic-wizard">Nom<span class="text-danger">*</span></label>
              <input class="form-control" id="email-basic-wizard" type="text" required="" placeholder="M'BAPPE" name="last_name">
              <div class="invalid-feedback">Please enter your valid email</div>
              <div class="valid-feedback">
                 Looks's Good!</div>
            </div>
            <div class="col-6">
              <label class="form-label" for="firstnamewizard">Prénom<span class="text-danger">*</span></label>
              <input class="form-control" id="firstnamewizard" type="text" required="" placeholder="Kylian" name="first_name">
              <div class="invalid-feedback">Please enter your valid name</div>
              <div class="valid-feedback">
                 Looks's Good!</div>
            </div>
            <div class="col-6">
                <label class="form-label" for="firstnamewizard">Nom d'utilisateur<span class="text-danger">*</span></label>
                <input class="form-control" id="firstnamewizard" type="text" required="" placeholder="Choissisez un nom d'utilisateur" name="username">
                <div class="invalid-feedback">Please enter your valid name</div>
                <div class="valid-feedback">
                   Looks's Good!</div>
            </div>
            <div class="col-6">
              <label class="form-label" for="firstnamewizard">Sexe<span class="text-danger">*</span></label>
                <select class="form-control" id="firstnamewizard" name="sex" required>
                    <option value="" disabled selected>Sélectionner le sexe</option>
                    <option value="M">Masculin</option>
                    <option value="F">Féminin</option>
                </select>
            </div>
            <div class="col-12">
              <label class="col-sm-12 form-label" for="passwordwizard888">Email de connexion<span class="text-danger">*</span></label>
              <input class="form-control" id="passwordwizard888" type="email" placeholder="kylian@gmail.com" required="" name="email">
              <div class="invalid-feedback">Please enter your valid password</div>
            </div>
            <div class="col-12">
              <label class="col-sm-12 form-label" for="confirmpasswordwizard">Mot de passe<span class="text-danger">*</span></label>
              <input class="form-control" id="confirmpasswordwizard" type="password" placeholder="Mot de passe" required="" name="password">
              <div class="invalid-feedback">Please enter your valid password</div>
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" id="inputcheckwizard" type="checkbox" value="" required="">
                <label class="form-check-label mb-0" for="inputcheckwizard">Agree to terms and conditions</label>
              </div>
            </div>
          </form>
          <form class="stepper-two row g-3 needs-validation custom-input" novalidate="" style="display: flex;">
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
              <input class="form-control" id="validationCustom-ddd" type="number" required="" name="numero">
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
            <div class="col-12"> 
              <label class="form-label" for="formFile3">Photo du joueur</label>
              <input class="form-control" id="formFile3" type="file" aria-label="file example" required="" name="pics">
              <div class="invalid-feedback">Invalid form file selected</div>
            </div>
            <div class="col-12">
              <div class="form-check validation-vertical-wizard">
                <input class="form-check-input" id="invalidCheck-b" type="checkbox" value="" required="">
                <label class="form-check-label" for="invalidCheck-b">All the above information is correct</label>
                <div class="invalid-feedback">You must agree before submitting.</div>
              </div>
            </div>
          </form>
          <form class="stepper-three row g-3 needs-validation custom-input" novalidate="" style="display: none;">
            <div class="col-6">
              <label class="form-label" for="email-basic">Numéro à attribuer<span class="text-danger">*</span></label>
              <select class="form-control" name="number" id="">
                <option value="" disabled selected>Selectionner le numéro</option>
                @foreach ($numeros as $numero)
                    <option value="">
                        {{ $numero->number }}
                    </option>
                @endforeach
              </select>
              <div class="invalid-feedback">Please enter your valid link</div>
              <div class="valid-feedback">
                    Looks's Good!</div>
            </div>
            <div class="col-6">
              <label class="form-label" for="validationCustom996">Position<span class="text-danger">*</span></label>
              <select class="form-control" name="number" id="">
                <option value="" disabled selected>Selectionner la position</option>
                @foreach ($positions as $position)
                    <option value="">
                        {{ $position->position_name }}
                    </option>
                @endforeach
              </select>
              <div class="invalid-feedback">Please enter your valid link</div>
              <div class="valid-feedback">
                 Looks's Good!</div>
            </div>
             <form class="stepper-three row g-3 needs-validation custom-input" novalidate="" style="display: none;">
            <div class="col-6">
              <label class="form-label" for="email-basic">Catégorie d'âge<span class="text-danger">*</span></label>
              <select class="form-control" name="number" id="">
                <option value="" disabled selected>Selectionner la catégorie d'âge</option>
                @foreach ($categ as $cate)
                            @php
                                $intervalle = json_decode($cate->intervalle, true);
                            @endphp
                    <option value="{{ $intervalle['min'] . ',' . $intervalle['max'] }}">
                        [{{ $intervalle['min'] }} - {{ $intervalle['max'] }}](ans)
                    </option>
                @endforeach
              </select>
              <div class="invalid-feedback">Please enter your valid link</div>
              <div class="valid-feedback">
                    Looks's Good!</div>
            </div>
            <div class="col-6">
              <label class="form-label" for="validationCustom996">Equipe affecté<span class="text-danger">*</span></label>
              <select class="form-control" name="number" id="">
                <option value="" selected disabled >Selectionner la position</option>
                @foreach ($teams as $team)
                    <option value="">
                        {{ $team->team_name }}
                    </option>
                @endforeach
              </select>
              <div class="invalid-feedback">Please enter your valid link</div>
              <div class="valid-feedback">
                 Looks's Good!</div>
            </div>
            <div class="col-12"> 
              <label class="form-label" for="givefeedback">Description</label>
              <textarea class="form-control" id="givefeedback" required=""></textarea>
              <div class="invalid-feedback">Please enter a message in the textarea.</div>
            </div>
            <div class="col-12">
              <div class="form-check mb-3">
                <input class="form-check-input" id="invalidCheck46" type="checkbox" value="" required="">
                <label class="form-check-label mb-0" for="invalidCheck46">Agree to terms and conditions</label>
                <div class="invalid-feedback">You must agree before submitting.</div>
              </div>
            </div>
          </form>
          <form class="stepper-four row g-3 needs-validation" novalidate="" style="display: none;">
            <div class="col-12 m-0">
              <div class="successful-form"><img class="img-fluid" src="{{ asset('storage/backend/assets2/images/gif/success/successful.gif') }}" alt="successful">
                <h6>Félicitations </h6>
                <p>Veuillez valider les informations saisies </p>
              </div>
            </div>
          </form>
        </div>

        <div class="wizard-footer d-flex gap-2 justify-content-end"> 
          <button class="btn text-light btn-primary" id="backbtn" onclick="prevStep()"> Retour</button>
          <button class="btn btn-primary" id="nextbtn" onclick="nextStep()">Suivant       </button>
        </div>
      </div>
    </div>
  </div>
</div>
  <script>
    "use strict";

let currentStep = 0;
const numSteps = 4; // Change this based on the actual number of steps

const fieldsets = document.querySelectorAll("#msform form");
const stepper = document.getElementById("stepper1");
const steps = stepper.getElementsByClassName("step");

for (let i = 1; i < fieldsets.length; i++) {
  fieldsets[i].style.display = "none"; // Hide all steps except the first
}

function showStep(stepIndex) {
  // Hide all steps
  for (let i = 0; i < fieldsets.length; i++) {
    fieldsets[i].style.display = "none";
  }

  // Show the current step
  fieldsets[stepIndex].style.display = "flex";
  
  // Update stepper UI
  updateStepper(stepIndex);
}

function updateStepper(stepIndex) {
  for (let i = 0; i < steps.length; i++) {
    steps[i].classList.remove("active", "done", "editing");
    if (i < stepIndex) {
      steps[i].classList.add("done");
    } else if (i === stepIndex) {
      steps[i].classList.add("active");
    }
  }

  // Update next button text
  const nextButton = document.getElementById("nextbtn");
  nextButton.textContent = (stepIndex === numSteps - 1) ? "Valider" : "Suivant";

  // Disable back button on first step
  document.getElementById("backbtn").disabled = stepIndex === 0;
}

function nextStep() {
  currentStep++;
  if (currentStep >= numSteps) {
    // Si on est à la dernière étape, soumettre le formulaire
   submitForm();
  } else {
    showStep(currentStep); // Afficher l'étape suivante
  }
}

function prevStep() {
  currentStep--;
  if (currentStep < 0) {
    currentStep = numSteps - 1; // Loop back to the last step
  }
  showStep(currentStep);
}

// Initialize with the first step
showStep(currentStep);

//Nationalité
const nationalities = [
  "Afghan", "Albanian", "Algerian", "American", "Andorran", "Angolan", "Argentine", "Armenian", "Australian", "Austrian",
  "Azerbaijani", "Bahamian", "Bahraini", "Bangladeshi", "Barbadian", "Belarusian", "Belgian", "Belizean", "Beninese", "Bhutanese",
  "Bolivian", "Bosnian", "Brazilian", "British", "Bruneian", "Bulgarian", "Burkinese", "Burmese", "Burundian", "Cambodian"
  // Ajoute plus de nationalités ici si besoin
];

// Fonction pour remplir les options
function populateNationalities() {
  const selectElement = document.getElementById("nationality");

  nationalities.forEach(nat => {
    const option = document.createElement("option");
    option.value = nat.toLowerCase();  // Par exemple, "american"
    option.textContent = nat;  // Affiche "American"
    selectElement.appendChild(option);
  });
}

// Appeler la fonction pour remplir le select
populateNationalities();

const formOne = document.querySelector('.stepper-one');
const formTwo = document.querySelector('.stepper-two');
const formThree = document.querySelector('.stepper-three');
const formFour = document.querySelector('.stepper-four');

// Ajouter un écouteur d'événement pour la soumission des formulaires
/*formOne.addEventListener('submit', handleFormSubmit);
formTwo.addEventListener('submit', handleFormSubmit);
formThree.addEventListener('submit', handleFormSubmit);
formFour.addEventListener('submit', handleFormSubmit);

function handleFormSubmit(event) {
    event.preventDefault(); // Empêcher le comportement de soumission par défaut

    const formData = new FormData(event.target); // Récupérer les données du formulaire
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const imageInput = document.querySelector('input[type="file"]');

    // Convertir FormData en un objet
    const formObject = {};
    formData.forEach((value, key) => {
        formObject[key] = value;
    });
    formData.append('pics', imageInput.files[0]);

    // Envoyer les données du formulaire avec fetch
    fetch('/players/store', { // Remplace '/submit-form' par l'URL appropriée
        method: 'POST',
        headers: {
            'Content-Type': 'application/json', // Définir le type de contenu
            'X-CSRF-TOKEN': csrfToken,
        },
        body: JSON.stringify(formObject), // Convertir l'objet en JSON
    })
    .then(response => response.json())
    .then(data => {
        // Traiter la réponse
        console.log('Réponse:', data);
        if (data.success) {
            // Si le formulaire est soumis avec succès, afficher un message
            alert('Formulaire soumis avec succès!');
        } else {
            alert('Une erreur est survenue.');
        }
    })
    .catch(error => {
        console.error('Erreur:', error);
    });
}*/

  </script>

@endsection