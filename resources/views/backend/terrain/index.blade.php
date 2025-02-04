@extends('backend.dashboard')
@section('content')
<div class="container">
    <h1 class="my-4">Liste des Terrains</h1>
    <a href="{{ route('terrain.create') }}" class="btn btn-primary mb-3">Ajouter un terrain</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Photo</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($terrain as $t)
                <tr>
                    <td>{{ $t->id }}</td>
                    <td>{{ $t->nom_terrain }}</td>
                    <td>
                        @if($t->photo)
                            <img src="{{ asset('storage/' . $t->photo) }}" alt="Terrain" class="img-thumbnail" width="100">
                        @else
                            <span>Aucune image</span>
                        @endif
                    </td>
                    <td>{{ $t->latitude }}</td>
                    <td>{{ $t->longitude }}</td>
                    <td>{{ $t->statut }}</td>
                    <td>
                        <ul class="action">
                        <!-- Modifier Button -->
                        <li class="edit">
                            <button style="background: none; border: none; color: inherit;" data-bs-toggle="modal" data-bs-target="#editTerrainModal{{ $t->id }}"><i class="fas fa-pencil-alt"></i></button>
                        </li>
                        <!-- Delete Button -->
                        <li class="delete">
                            <form action="{{ route('terrain.destroy', $t->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background: none; border: none; color: inherit;">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </li>
                        </ul>  
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal for Update -->
@foreach($terrain as $t)
    <div class="modal fade" id="editTerrainModal{{ $t->id }}" tabindex="-1" aria-labelledby="editTerrainModalLabel{{ $t->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editTerrainModalLabel{{ $t->id }}">Modifier le Terrain</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('terrain.update', $t->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nom_terrain" class="form-label">Nom du Terrain</label>
                            <input type="text" class="form-control" id="nom_terrain" name="nom_terrain" value="{{ $t->nom_terrain }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="photo" class="form-label">Photo du Terrain</label>
                            <input type="file" class="form-control" id="photo" name="photo">
                            <small class="text-muted">Laissez vide pour conserver l'ancienne photo.</small>
                        </div>

                        <div class="mb-3">
                            <label for="latitude" class="form-label">Latitude</label>
                            <input type="text" class="form-control" id="latitude" name="latitude" value="{{ $t->latitude }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="longitude" class="form-label">Longitude</label>
                            <input type="text" class="form-control" id="longitude" name="longitude" value="{{ $t->longitude }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="statut" class="form-label">Statut</label>
                            <select class="form-select" id="statut" name="statut" required>
                                <option value="active" {{ $t->statut == 'active' ? 'selected' : '' }}>Actif</option>
                                <option value="inactive" {{ $t->statut == 'inactive' ? 'selected' : '' }}>Inactif</option>
                            </select>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach

@endsection
