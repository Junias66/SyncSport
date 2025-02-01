@extends('backend.dashboard')
@section('content')
<div class="container">
    <h1 class="my-4">Liste des Annonces</h1>
    <a href="{{ route('annonces.create') }}" class="btn btn-primary mb-3">Ajouter une Annonce</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Minute du But</th>
                <th>Statut Individuel</th>
                <th>Type de But</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($annonces as $annonce)
                <tr>
                    <td>{{ $annonce->id }}</td>
                    <td>{{ $annonce->minute_but }}</td>
                    <td>{{ $annonce->stat_individ }}</td>
                    <td>{{ $annonce->type_but_marque }}</td>
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

