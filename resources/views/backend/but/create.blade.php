@extends('backend.dashboard')
@section('content')
<div class="container">
    <h1 class="my-4">Ajouter un But</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('but.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="minute_but" class="form-label">Minute du But</label>
            <input type="number" name="minute_but" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="stat_individ" class="form-label">Statut Individuel</label>
            <select name="stat_individ" class="form-control" required>
                <option value="marque">Marqué</option>
                <option value="non_marque">Non Marqué</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="type_but_marque" class="form-label">Type de But</label>
            <select name="type_but_marque" class="form-control" required>
                <option value="penalty">Penalty</option>
                <option value="tir_libre">Tir Libre</option>
                <option value="tir_distance">Tir de Distance</option>
                <option value="coup_franc">Coup Franc</option>
                <option value="autre">Autre</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('but.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
