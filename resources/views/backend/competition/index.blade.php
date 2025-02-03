@extends('backend.dashboard')

@section('content')

<div class="container">
    <h1 class="my-4">Liste des Compétitions</h1>
    <a href="{{ route('competition.create') }}" class="btn btn-primary mb-3">Ajouter une Compétition</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom de la Compétition</th>
                <th>Description</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($competition as $comp)
                <tr>
                    <td>{{ $comp->id }}</td>
                    <td>{{ $comp->competition_name }}</td>
                    <td>{{ $comp->description }}</td>
                    <td>{{ $comp->statut_compet }}</td>
                    <td>
                        <ul class="action">
                        <!-- Modifier Icon Button -->
                        <li class="edit">
                        <button style="background: none; border: none; color: inherit;" data-bs-toggle="modal" data-bs-target="#editCompetitionModal{{ $comp->id }}">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                        </li>

                        <!-- Delete Form -->
                        <li class="delete">
                            <form action="{{ route('competition.destroy', $comp->id) }}" method="POST" style="display:inline;">
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

                <!-- Modal for Editing Competition -->
                <div class="modal fade" id="editCompetitionModal{{ $comp->id }}" tabindex="-1" aria-labelledby="editCompetitionModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editCompetitionModalLabel">Modifier la Compétition</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('competition.update', $comp->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <!-- Competition Name -->
                                    <div class="mb-3">
                                        <label for="competition_name" class="form-label">Nom de la compétition</label>
                                        <input type="text" class="form-control" id="competition_name" name="competition_name" value="{{ $comp->competition_name }}" required>
                                    </div>

                                    <!-- Description -->
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="3" required>{{ $comp->description }}</textarea>
                                    </div>

                                    <!-- Status -->
                                    <div class="mb-3">
                                        <label for="statut_compet" class="form-label">Statut</label>
                                        <select class="form-control" id="statut_compet" name="statut_compet" required>
                                            <option value="actif" {{ $comp->statut_compet == 'actif' ? 'selected' : '' }}>Actif</option>
                                            <option value="inactif" {{ $comp->statut_compet == 'inactif' ? 'selected' : '' }}>Inactif</option>
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
        </tbody>
    </table>
</div>

@endsection
