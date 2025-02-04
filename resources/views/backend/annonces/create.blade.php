@extends('backend.dashboard')
@section('content')

<div class="container">
    <h1 class="my-4">Ajouter une Annonce</h1>
    
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('annonces.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Type d'Annonce</label>
            <input type="text" name="type_annonce" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Message</label>
            <textarea name="message" class="form-control" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Statut</label>
            <select name="statut_annonce" class="form-control" required>
                <option value="Actif">Actif</option>
                <option value="Inactif">Inactif</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Utilisateur</label>
            <select name="user_id" class="form-control" required>
                <option value="">Sélectionner un utilisateur</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>        
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>

@endsection


