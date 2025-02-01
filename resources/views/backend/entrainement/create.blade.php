@extends('backend.dashboard')
@section('content')
<div class="container">
    <h1 class="my-4">Ajouter un Entraînement</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('entrainement.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nom_entrainement" class="form-label">Nom de l'Entraînement</label>
            <input type="text" name="nom_entrainement" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="date_ent" class="form-label">Date</label>
            <input type="date" name="date_ent" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="heure_ent" class="form-label">Heure</label>
            <input type="time" name="heure_ent" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label for="statut" class="form-label">Statut</label>
            <select name="statut" class="form-control" required>
                <option value="prévu">Prévu</option>
                <option value="terminé">Terminé</option>
                <option value="annulé">Annulé</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="lieu_id" class="form-label">Lieu</label>
            <input type="text" name="lieu_id" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('entrainement.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
