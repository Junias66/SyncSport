@extends('backend.dashboard')

@section('content')
<div class="container">
    <h1 class="my-4">Liste des Numéros</h1>
    <a href="{{ route('numero.create') }}" class="btn btn-primary mb-3">Ajouter un numéro</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Numéro</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($numero as $num)
                <tr>
                    <td>{{ $num->id }}</td>
                    <td>{{ $num->number }}</td>
                    <td>{{ $num->number_status }}</td>
                    <td>
                        <ul class="action">
                        <!-- Modifier Button -->
                        <li class="edit">
                            <button style="background: none; border: none; color: inherit;" data-bs-toggle="modal" data-bs-target="#editNumeroModal{{ $num->id }}"><i class="fas fa-pencil-alt"></i></button>
                        </li>
                        <!-- Delete Button -->
                        <li class="delete">
                            <form action="{{ route('numero.destroy', $num->id) }}" method="POST" style="display:inline;">
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

                <!-- Modal for editing numero -->
                <div class="modal fade" id="editNumeroModal{{ $num->id }}" tabindex="-1" aria-labelledby="editNumeroModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editNumeroModalLabel">Modifier le Numéro</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('numero.update', $num->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="mb-3">
                                        <label for="number" class="form-label">Numéro</label>
                                        <input type="text" class="form-control" id="number" name="number" value="{{ $num->number }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="number_status" class="form-label">Statut</label>
                                        <select class="form-control" id="number_status" name="number_status" required>
                                            <option value="active" {{ $num->number_status == 'active' ? 'selected' : '' }}>Actif</option>
                                            <option value="inactive" {{ $num->number_status == 'inactive' ? 'selected' : '' }}>Inactif</option>
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
