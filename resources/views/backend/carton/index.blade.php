@extends('backend.dashboard')
@section('content')
<div class="container">
    <h1 class="my-4">Liste des Cartons</h1>
    <a href="{{ route('carton.create') }}" class="btn btn-primary mb-3">Ajouter un Carton</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Type de Carton</th>
                <th>Minute</th>
                <th>Motif</th>
                <th>Joueur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($carton as $cartonItem)
                <tr>
                    <td>{{ $cartonItem->id }}</td>
                    <td>{{ $cartonItem->type_carton }}</td>
                    <td>{{ $cartonItem->minute }}</td>
                    <td>{{ $cartonItem->motif }}</td>
                    <td>{{ $cartonItem->joueurconc_id }}</td>
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
