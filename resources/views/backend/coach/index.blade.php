@extends('backend.dashboard')

@section('content')

<div class="container">
    <h1 class="my-4">Liste des Types de Coachs</h1>
    <a href="{{ route('coach.create') }}" class="btn btn-primary mb-3">Ajouter un Type de Coach</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom du Type de Coach</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($coach as $type)
                <tr>
                    <td>{{ $type->id }}</td>
                    <td>{{ $type->type_coach_name }}</td>
                    <td>
                        <ul class="action">
                        <!-- Modifier Icon Button -->
                        <li class="edit">
                        <button style="background: none; border: none; color: inherit;" data-bs-toggle="modal" data-bs-target="#editCoachModal{{ $type->id }}">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                        </li>
                        <!-- Delete Form -->
                        <li class="delete">
                            <form action="{{ route('coach.destroy', $type->id) }}" method="POST" style="display:inline;">
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

                <!-- Modal for Editing Coach Type -->
                <div class="modal fade" id="editCoachModal{{ $type->id }}" tabindex="-1" aria-labelledby="editCoachModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editCoachModalLabel">Modifier le Type de Coach</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('coach.update', $type->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <!-- Nom du Type de Coach -->
                                    <div class="mb-3">
                                        <label for="type_coach_name" class="form-label">Nom du Type de Coach</label>
                                        <input type="text" class="form-control" id="type_coach_name" name="type_coach_name" value="{{ $type->type_coach_name }}" required>
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
