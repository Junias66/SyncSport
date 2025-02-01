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
