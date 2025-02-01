@extends('backend.dashboard')
@section('content')
<div class="container">
    <h1 class="my-4">Ajouter un Terrain</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('terrain.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nom_terrain" class="form-label">Nom du Terrain</label>
            <input type="text" name="nom_terrain" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" name="photo" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="latitude" class="form-label">Latitude</label>
            <input type="text" name="latitude" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="longitude" class="form-label">Longitude</label>
            <input type="text" name="longitude" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="statut" class="form-label">Statut</label>
            <select name="statut" class="form-control" required>
                <option value="disponible">Disponible</option>
                <option value="indisponible">Indisponible</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('terrain.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
