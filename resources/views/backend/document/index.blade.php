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
