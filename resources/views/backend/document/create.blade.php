@extends('backend.dashboard')
@section('content')
<div class="container">
    <h1 class="my-4">Ajouter un Document</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('document.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nom_document" class="form-label">Nom du Document</label>
            <input type="text" name="nom_document" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="statut_doc" class="form-label">Statut</label>
            <select name="statut_doc" class="form-control" required>
                <option value="validé">Validé</option>
                <option value="en attente">En attente</option>
                <option value="rejeté">Rejeté</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">Utilisateur</label>
            <input type="text" name="user_id" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('document.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
