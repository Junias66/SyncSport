@extends('backend.dashboard')
@section('content')
<div class="d-flex justify-content-center">
<div class="col-md-6">
  <div class="card">
    <div class="card-header card-no-border pb-0">
      <h3>Ajouter une position </h3>
      <p class="mt-1 mb-0">
        </p>
    </div>
    <div class="card-body basic-form">
      <form class="form theme-form flat-form" action="{{ route('positions.store') }}" method="POST">
        @csrf
        <div class="row">
          <div class="col">
            <div class="mb-3">
              <label class="form-label" for="team">Nom de la position</label>
              <input class="form-control" id="position" type="text" name="position_name" placeholder="Veuillez saisir le nom" required>
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