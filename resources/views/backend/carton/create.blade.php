@extends('backend.dashboard')
@section('content')
<div class="container">
    <h1 class="my-4">Ajouter un Carton</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('carton.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="type_carton" class="form-label">Type de Carton</label>
            <select name="type_carton" class="form-control" required>
                <option value="jaune">Jaune</option>
                <option value="rouge">Rouge</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="minute" class="form-label">Minute</label>
            <input type="number" name="minute" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="motif" class="form-label">Motif</label>
            <input type="text" name="motif" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="joueurconc_id" class="form-label">Joueur Concerné</label>
            <input type="number" name="joueurconc_id" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('carton.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
