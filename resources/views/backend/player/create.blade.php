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
          <div class="form-one form-step active row g-3 needs-validation custom-input" novalidate="">
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
          </div>
          <div class="form-two form-step row g-3 needs-validation custom-input" novalidate="" style="display: flex;">
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
          </div>
          <div class="form-three form-step row g-3 needs-validation custom-input" novalidate="" style="display: none;">
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
          </div>
            <div class="form-four form-step row g-3 needs-validation custom-input" novalidate="" style="display: none;">
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
          </div>
          <div class="form-five form-step row g-3 needs-validation" novalidate="" style="display: none;">
                <div class="col-12 m-0">
                <div class="successful-form"><img class="img-fluid" src="{{ asset('storage/backend/assets2/images/gif/success/successful.gif') }}" alt="successful">
                    <h6>Félicitations </h6>
                    <p>Veuillez valider les informations saisies </p>
                </div>
                </div>
          </div>
        </div>

        <div class="wizard-footer d-flex gap-2 justify-content-end"> 
          <button class="btn-prev btn text-light btn-primary" type="button" disabled> Retour</button>
          <button class=" btn-next btn btn-primary" type="button">Suivant</button>
          <button class=" btn-submit btn btn-primary" type="submit">Valider</button>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let currentStep = 1;
        const steps = document.querySelectorAll(".form-step");
        const nextButtons = document.querySelectorAll(".next-step");
        const prevButtons = document.querySelectorAll(".prev-step");
    
        function showStep(step) {
            steps.forEach((s, index) => {
                s.style.display = index === step - 1 ? "block" : "none";
            });
        }
    
        nextButtons.forEach((btn) => {
            btn.addEventListener("click", function () {
                if (currentStep < steps.length) {
                    currentStep++;
                    showStep(currentStep);
                }
            });
        });
    
        prevButtons.forEach((btn) => {
            btn.addEventListener("click", function () {
                if (currentStep > 1) {
                    currentStep--;
                    showStep(currentStep);
                }
            });
        });
    
        showStep(currentStep);
    });
    </script>
    

@endsection