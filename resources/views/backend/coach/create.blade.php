@extends('backend.dashboard')
@section('content')
<div class="container">
    <h1 class="my-4">Ajouter un Type de Coach</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('coach.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="type_coach_name" class="form-label">Nom du Type de Coach</label>
            <input type="text" name="type_coach_name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('coach.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
