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
