@extends('backend.dashboard')
@section('content')
<div class="container">
    <h1 class="my-4">Liste des Buts</h1>
    <a href="{{ route('but.create') }}" class="btn btn-primary mb-3">Ajouter un But</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead class="table">
            <tr>
                <th>ID</th>
                <th>Minute</th>
                <th>Joueur</th>
                <th>Type de But</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($but as $butItem)
                <tr>
                    <td>{{ $butItem->id }}</td>
                    <td>{{ $butItem->minute_but }}</td>
                    <td>{{ $butItem->joueur->nom }}</td> <!-- Affiche le joueur concerné -->
                    <td>{{ $butItem->typeBut->nom }}</td> <!-- Affiche le type de but -->
                    <td>
                        <ul class="action">
                            <li class="edit">
                        <a href="#" style="background: none; border: none; color: inherit;" data-bs-toggle="modal" data-bs-target="#editModal{{ $butItem->id }}">
                            <i class="fas fa-edit"></i>
                        </a></li>
                        <li class="delete">
                        <form action="{{ route('but.destroy', $butItem->id) }}" method="POST" style="display:inline;">
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

                <!-- Modal de mise à jour -->
                <div class="modal fade" id="editModal{{ $butItem->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Modifier le But</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('but.update', $butItem->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Minute du But</label>
                                        <input type="time" name="minute_but" class="form-control" value="{{ $butItem->minute_but }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Joueur</label>
                                        <select name="joueur_id" class="form-control" required>
                                            @foreach($joueurs as $joueur)
                                                <option value="{{ $joueur->id }}" {{ $joueur->id == $butItem->joueur_id ? 'selected' : '' }}>
                                                    {{ $joueur->nom }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Type de But</label>
                                        <select name="type_but_id" class="form-control" required>
                                            @foreach($typesBut as $type)
                                                <option value="{{ $type->id }}" {{ $type->id == $butItem->type_but_id ? 'selected' : '' }}>
                                                    {{ $type->nom }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    <button type="submit" class="btn btn-primary">Mettre à jour</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Fin du modal -->
            @endforeach
        </tbody>
    </table>
</div>
@endsection
