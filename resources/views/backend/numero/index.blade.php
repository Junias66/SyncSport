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
