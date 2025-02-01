@extends('backend.dashboard')
@section('content')
<div class="container">
    <h1 class="my-4">Ajouter un Match</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('matche.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="match_date" class="form-label">Date du match</label>
            <input type="date" name="match_date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="match_time" class="form-label">Heure du match</label>
            <input type="time" name="match_time" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="terrain" class="form-label">Terrain</label>
            <input type="text" name="terrain" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="arbitre_name" class="form-label">Nom de l'arbitre</label>
            <input type="text" name="arbitre_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="team_name" class="form-label">Nom de l'équipe</label>
            <input type="text" name="team_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="team_adverse" class="form-label">Nom de l'équipe adverse</label>
            <input type="text" name="team_adverse" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="match_status" class="form-label">Statut du match</label>
            <select name="match_status" class="form-control" required>
                <option value="à venir">À venir</option>
                <option value="en cours">En cours</option>
                <option value="terminé">Terminé</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="match_pics" class="form-label">Photo du match</label>
            <input type="file" name="match_pics" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('matche.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection

