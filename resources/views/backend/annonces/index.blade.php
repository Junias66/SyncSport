@extends('backend.dashboard')
@section('content')

<div class="container">
    <h1 class="my-4">Liste des Annonces</h1>

    <a href="{{ route('annonces.create') }}" class="btn btn-primary mb-3">Ajouter une Annonce</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Titre</th>
                <th>Statut</th>
                <th>Utilisateur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($annonces as $annonce)
                <tr>
                    <td>{{ $annonce->id }}</td>
                    <td>{{ $annonce->type_annonce }}</td>
                    <td>{{ $annonce->titre }}</td>
                    <td>{{ $annonce->statut_annonce }}</td>
                    <td>{{ $annonce->user_id }}</td>
                    <td>
                        <!-- Bouton Modifier (Ouvre le Modal) -->
                        <button style="background: none; border: none; color: inherit;" data-bs-toggle="modal" data-bs-target="#editModal{{ $annonce->id }}">
                            <i class="fas fa-edit"></i>
                        </button>

                        <!-- Bouton Supprimer -->
                        <form action="{{ route('annonces.destroy', $annonce->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: none; border: none; color: inherit;" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette annonce ?')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>

                <!-- MODAL DE MODIFICATION -->
                <div class="modal fade" id="editModal{{ $annonce->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Modifier l'Annonce</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('annonces.update', $annonce->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="mb-3">
                                        <label class="form-label">Type d'Annonce</label>
                                        <input type="text" name="type_annonce" class="form-control" value="{{ $annonce->type_annonce }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Titre</label>
                                        <input type="text" name="titre" class="form-control" value="{{ $annonce->titre }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Message</label>
                                        <textarea name="message" class="form-control" rows="4" required>{{ $annonce->message }}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Statut</label>
                                        <select name="statut_annonce" class="form-control" required>
                                            <option value="Actif" {{ $annonce->statut_annonce == 'Actif' ? 'selected' : '' }}>Actif</option>
                                            <option value="Inactif" {{ $annonce->statut_annonce == 'Inactif' ? 'selected' : '' }}>Inactif</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Utilisateur</label>
                                        <select name="user_id" class="form-control" required>
                                            <option value="">Sélectionner un utilisateur</option>
                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}" {{ $user->id == $annonce->user_id ? 'selected' : '' }}>
                                                    {{ $user->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    

                                    <button type="submit" class="btn btn-primary">Mettre à Jour</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FIN MODAL -->
            @endforeach
        </tbody>
    </table>

</div>

@endsection
