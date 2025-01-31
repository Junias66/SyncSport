@extends('backend.dashboard')
@section('content')
<div class="d-flex justify-content-center">
<div class="col-md-6">
  <div class="card">
    <div class="card-header card-no-border pb-0">
      <h3>Ajouter une équipe </h3>
      <p class="mt-1 mb-0">
        </p>
    </div>
    <div class="card-body basic-form">
      <form class="form theme-form flat-form" action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col">
            <div class="mb-3">
              <label class="form-label" for="team">Nom</label>
              <input class="form-control" id="email" type="text" name="team_name" placeholder="Veuillez saisir le nom" required>
            </div>
            <div class="input-group">
                <label class="form-label" for="">Photo de l'équipe</label>
                <input class="form-control" id="inputGroupFile03" type="file" name="team_pics" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
            </div><br>
            <div class="mb-3">
                <label class="form-label" for="existing_teams">Type d'équipes existants</label>
                <select class="form-control" id="existing_teams" name="existing_team_id" required>
                  <option value="" disabled selected>Veuillez sélectionner un type d'équipe</option>
                  @foreach($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->type_team_name }}</option>
                  @endforeach
                </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col"></div>
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