@extends('backend.dashboard')

@section('content')
<div class="container">
    <h1 class="my-4">Ajouter un Numéro</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('numero.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="number" class="form-label">Numéro</label>
            <input type="text" name="number" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="number_status" class="form-label">Statut</label>
            <select name="number_status" class="form-control" required>
                <option value="actif">Actif</option>
                <option value="inactif">Inactif</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('numero.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
