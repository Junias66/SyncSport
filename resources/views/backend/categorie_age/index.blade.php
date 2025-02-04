@extends('backend.dashboard')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <div class="dt-ext table-responsive">
                <div id="multilevel-btn_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <div class="d-flex align-items-center">
                        <div class="dt-buttons btn-group me-3">
                            <a href="{{ route('categories.create') }}">
                                <button class="btn btn-primary buttons-collection">
                                    <span>Ajouter une catégorie d'âge</span>   
                                </button>
                            </a>
                        </div>
                        <div id="multilevel-btn_filter" class="dataTables_filter">
                            <label class="d-flex align-items-center">
                                Rechercher
                                <input type="search" class="form-control form-control-sm ms-2" placeholder="" 
                                       aria-controls="multilevel-btn">
                            </label>
                        </div>
                    </div>  

                    <table class="display dataTable" id="multilevel-btn" role="grid"
                        aria-describedby="multilevel-btn_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="multilevel-btn" rowspan="1"
                                    colspan="1" style="width: 60.7167px;" aria-sort="ascending"
                                    aria-label="Id: activate to sort column descending">Id</th>
                                <th class="sorting" tabindex="0" aria-controls="multilevel-btn" rowspan="1" colspan="1"
                                    style="width: 272.617px;"
                                    aria-label="Theme Name: activate to sort column ascending">Nom de la catégorie</th>
                                <th class="sorting" tabindex="0" aria-controls="multilevel-btn" rowspan="1" colspan="1"
                                    style="width: 272.617px;"
                                    aria-label="Theme Name: activate to sort column ascending">Intervalle d'âge</th>
                                <th class="sorting" tabindex="0" aria-controls="multilevel-btn" rowspan="1" colspan="1"
                                    style="width: 94.9167px;" aria-label="Action: activate to sort column ascending">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categ as $key => $value)
                                @php
                                    $intervalle = json_decode($value->intervalle, true);
                                @endphp
                                <tr role="row" class="odd">
                                    <td class="sorting_1">{{ $key + 1 }}</td>
                                    <td>{{ $value->categorie_name }}</td>
                                    <td>[{{ $intervalle['min'] }},{{ $intervalle['max'] }}] ans</td>
                                    <td>
                                        <ul class="action">
                                        <!-- Edit Button -->
                                        <li class="edit">
                                            <button style="background: none; border: none; color: inherit;" data-bs-toggle="modal" data-bs-target="#editCategoryModal{{ $value->id }}"><i class="fas fa-pencil-alt"></i></button>
                                        </li>
                                        <!-- Delete Button -->
                                        <li class="delete">
                                            <form action="{{ route('categories.destroy', $value->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" style="background: none; border: none; color: inherit;">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                    </td>
                                </tr>

                                <!-- Modal for editing category -->
                                <div class="modal fade" id="editCategoryModal{{ $value->id }}" tabindex="-1" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editCategoryModalLabel">Modifier la catégorie d'âge</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('categories.update', $value->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="mb-3">
                                                        <label for="categorie_name" class="form-label">Nom de la catégorie</label>
                                                        <input type="text" class="form-control" id="categorie_name" name="categorie_name" value="{{ $value->categorie_name }}" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="min_age" class="form-label">Âge minimum</label>
                                                        <input type="number" class="form-control" id="min_age" name="min_age" value="{{ $intervalle['min'] }}" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="max_age" class="form-label">Âge maximum</label>
                                                        <input type="number" class="form-control" id="max_age" name="max_age" value="{{ $intervalle['max'] }}" required>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center mt-3">
                        {{ $categ->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
