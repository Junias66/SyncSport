@extends('backend.dashboard')
@section('content')
<div class="d-flex justify-content-center">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header card-no-border pb-0">
        <h3>Ajouter une catégorie d'âge</h3>
        <p class="mt-1 mb-0"></p>
      </div>
      <div class="card-body basic-form">
        <form class="form theme-form flat-form" action="{{ route('categories.store') }}" method="POST">
          @csrf
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label class="form-label" for="category_name">Nom de la catégorie</label>
                <input class="form-control" id="category_name" type="text" name="category_name" placeholder="Veuillez saisir le nom" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label" for="age_min">Âge minimum</label>
                <input class="form-control" id="age_min" type="number" name="age_min" placeholder="Ex: 10" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label" for="age_max">Âge maximum</label>
                <input class="form-control" id="age_max" type="number" name="age_max" placeholder="Ex: 15" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col"></div>
            <div class="text-end">
              <button class="btn btn-primary me-2 btn-square" type="submit">Valider</button>
              <input class="btn btn-danger btn-square" type="reset" value="Annuler">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
