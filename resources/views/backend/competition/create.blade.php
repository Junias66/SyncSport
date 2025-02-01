@extends('backend.dashboard')
@section('content')
<div class="container">
    <h1 class="my-4">Ajouter une Compétition</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('competition.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="competition_name" class="form-label">Nom de la Compétition</label>
            <input type="text" name="competition_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="statut_compet" class="form-label">Statut</label>
            <select name="statut_compet" class="form-control" required>
                <option value="à venir">À venir</option>
                <option value="en cours">En cours</option>
                <option value="terminée">Terminée</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('competition.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
