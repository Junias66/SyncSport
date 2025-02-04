@extends('backend.dashboard')
@section('content')
<div class="container">
    <h1 class="my-4">Liste des Documents</h1>
    <a href="{{ route('document.create') }}" class="btn btn-primary mb-3">Ajouter un Document</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom du Document</th>
                <th>Statut</th>
                <th>Utilisateur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($document as $doc)
                <tr>
                    <td>{{ $doc->id }}</td>
                    <td>{{ $doc->nom_document }}</td>
                    <td>{{ $doc->statut_doc }}</td>
                    <td>{{ $doc->user_id }}</td>
                    <td>
                        <!-- Bouton pour ouvrir le modal -->
<a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $document->id }}">
    <i class="fas fa-edit"></i>
</a>

                        @foreach($documents as $document)
<div class="modal fade" id="editModal{{ $document->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $document->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $document->id }}">Modifier le Document</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('document.update', $document->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nom_document" class="form-label">Nom du Document</label>
                        <input type="text" name="nom_document" class="form-control" value="{{ $document->nom_document }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="statut_doc" class="form-label">Statut</label>
                        <select name="statut_doc" class="form-control" required>
                            <option value="actif" {{ $document->statut_doc == 'actif' ? 'selected' : '' }}>Actif</option>
                            <option value="inactif" {{ $document->statut_doc == 'inactif' ? 'selected' : '' }}>Inactif</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="user_id" class="form-label">Utilisateur</label>
                        <select name="user_id" class="form-control" required>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" {{ $document->user_id == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
                        <li class="delete">
                            <form action="{{ route('document.destroy', $doc->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background: none; border: none; color: inherit;">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </li>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
