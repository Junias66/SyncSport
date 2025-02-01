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
