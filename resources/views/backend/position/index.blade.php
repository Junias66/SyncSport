@extends('backend.dashboard')
@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <div class="dt-ext table-responsive">
                <div id="multilevel-btn_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <div class="d-flex align-items-center">
                        <div class="dt-buttons btn-group me-3">
                            <a href="{{ route('positions.create') }}">
                                <button class="btn btn-primary buttons-collection">
                                    <span>Ajouter une position</span>   
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
                                    aria-label="Theme Name: activate to sort column ascending">Nom de la position</th>
                                <th class="sorting" tabindex="0" aria-controls="multilevel-btn" rowspan="1" colspan="1"
                                    style="width: 94.9167px;" aria-label="Action: activate to sort column ascending">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($positions as $key => $value)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">{{ $key + 1 }}</td>
                                    <td>{{ $value->position_name }}</td>
                                    <td>
                                        <ul class="action">
                                            <li class="edit"> <a href="#"><i class="fas fa-pencil-alt"></i></a></li>
                                            <li class="delete">
                                                <form action="{{ route('positions.destroy', $value->id) }}" method="POST" style="display:inline;">
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
                            @endforeach
                            
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center mt-3">
                        {{ $positions->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection