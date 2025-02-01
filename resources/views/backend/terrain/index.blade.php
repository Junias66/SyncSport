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
                        <img src="{{ asset('storage/' . $t->photo) }}" alt="Terrain Image" width="50">
                    </td>
                    <td>{{ $t->latitude }}</td>
                    <td>{{ $t->longitude }}</td>
                    <td>{{ $t->statut }}</td>
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
