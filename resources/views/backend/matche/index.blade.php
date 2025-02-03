@extends('backend.dashboard')

@section('content')

<div class="container">
    <h1 class="my-4">Liste des Matchs</h1>
    <a href="{{ route('matche.create') }}" class="btn btn-primary mb-3">Ajouter un match</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Terrain</th>
                <th>Arbitre</th>
                <th>Équipe</th>
                <th>Adversaire</th>
                <th>Statut</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($matche as $match)
                <tr>
                    <td>{{ $match->id }}</td>
                    <td>{{ $match->match_date }}</td>
                    <td>{{ $match->match_time }}</td>
                    <td>{{ $match->terrain }}</td>
                    <td>{{ $match->arbitre_name }}</td>
                    <td>{{ $match->team_name }}</td>
                    <td>{{ $match->team_adverse }}</td>
                    <td>{{ $match->match_status }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $match->match_pics) }}" alt="Match Image" width="50">
                    </td>
                    <td>
                        <ul class="action">
                        <!-- Modifier Icon Button -->
                        <li class="edit">
                        <button style="background: none; border: none; color: inherit;" data-bs-toggle="modal" data-bs-target="#editMatchModal{{ $match->id }}">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                        </li>
                        <!-- Delete Form -->
                        <li class="delete">
                            <form action="{{ route('matche.destroy', $match->id) }}" method="POST" style="display:inline;">
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

                <!-- Modal for Editing Match -->
                <div class="modal fade" id="editMatchModal{{ $match->id }}" tabindex="-1" aria-labelledby="editMatchModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editMatchModalLabel">Modifier le Match</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('matche.update', $match->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <!-- Date -->
                                    <div class="mb-3">
                                        <label for="match_date" class="form-label">Date</label>
                                        <input type="date" class="form-control" id="match_date" name="match_date" value="{{ $match->match_date }}" required>
                                    </div>

                                    <!-- Time -->
                                    <div class="mb-3">
                                        <label for="match_time" class="form-label">Heure</label>
                                        <input type="time" class="form-control" id="match_time" name="match_time" value="{{ $match->match_time }}" required>
                                    </div>

                                    <!-- Terrain -->
                                    <div class="mb-3">
                                        <label for="terrain" class="form-label">Terrain</label>
                                        <input type="text" class="form-control" id="terrain" name="terrain" value="{{ $match->terrain }}" required>
                                    </div>

                                    <!-- Arbitre -->
                                    <div class="mb-3">
                                        <label for="arbitre_name" class="form-label">Arbitre</label>
                                        <input type="text" class="form-control" id="arbitre_name" name="arbitre_name" value="{{ $match->arbitre_name }}" required>
                                    </div>

                                    <!-- Équipe -->
                                    <div class="mb-3">
                                        <label for="team_name" class="form-label">Équipe</label>
                                        <input type="text" class="form-control" id="team_name" name="team_name" value="{{ $match->team_name }}" required>
                                    </div>

                                    <!-- Adversaire -->
                                    <div class="mb-3">
                                        <label for="team_adverse" class="form-label">Adversaire</label>
                                        <input type="text" class="form-control" id="team_adverse" name="team_adverse" value="{{ $match->team_adverse }}" required>
                                    </div>

                                    <!-- Statut -->
                                    <div class="mb-3">
                                        <label for="match_status" class="form-label">Statut</label>
                                        <select class="form-control" id="match_status" name="match_status" required>
                                            <option value="En attente" {{ $match->match_status == 'En attente' ? 'selected' : '' }}>En attente</option>
                                            <option value="Terminé" {{ $match->match_status == 'Terminé' ? 'selected' : '' }}>Terminé</option>
                                            <option value="Annulé" {{ $match->match_status == 'Annulé' ? 'selected' : '' }}>Annulé</option>
                                        </select>
                                    </div>

                                    <!-- Photo -->
                                    <div class="mb-3">
                                        <label for="match_pics" class="form-label">Photo du match</label>
                                        <input type="file" class="form-control" id="match_pics" name="match_pics">
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
