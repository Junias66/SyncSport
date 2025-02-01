@extends('backend.dashboard')
@section('content')
<div class="container">
    <h1 class="my-4">Liste des Entraînements</h1>
    <a href="{{ route('entrainement.create') }}" class="btn btn-primary mb-3">Ajouter un Entraînement</a>

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
                <th>Date</th>
                <th>Heure</th>
                <th>Description</th>
                <th>Statut</th>
                <th>Lieu</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entrainement as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->nom_entrainement }}</td>
                    <td>{{ $e->date_ent }}</td>
                    <td>{{ $e->heure_ent }}</td>
                    <td>{{ $e->description }}</td>
                    <td>{{ $e->statut }}</td>
                    <td>{{ $e->lieu_id }}</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="#" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
