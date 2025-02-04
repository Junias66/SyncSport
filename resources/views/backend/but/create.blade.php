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

    <div class="card">
        <div class="card-body">
            <form action="{{ route('but.store') }}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label class="form-label">Minute du But</label>
                    <input type="time" name="minute_but" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Joueur</label>
                    <select name="joueur_id" class="form-control" required>
                        <option value="">Sélectionnez un joueur</option>
                        @foreach($joueurs as $joueur)
                            <option value="{{ $joueur->id }}">{{ $joueur->nom }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Type de But</label>
                    <select name="type_but_id" class="form-control" required>
                        <option value="">Sélectionnez un type de but</option>
                        @foreach($typesBut as $type)
                            <option value="{{ $type->id }}">{{ $type->nom }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Enregistrer</button>
                <a href="{{ route('but.index') }}" class="btn btn-secondary">Retour</a>
            </form>
        </div>
    </div>
</div>

@endsection
