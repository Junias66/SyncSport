@extends('backend.dashboard')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <div class="dt-ext table-responsive">
                <div id="multilevel-btn_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <div class="d-flex align-items-center">
                        <div class="dt-buttons btn-group me-3">
                            <a href="{{ route('team_type.create') }}">
                                <button class="btn btn-primary buttons-collection">
                                    <span>Ajouter un type d'équipe</span>   
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
                                <th>Id</th>
                                <th>Nom du type d'équipe</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teamtype as $key => $value)
                                <tr role="row">
                                    <td>{{ $key + 1 }}</td>
                                    <td id="team-type-name-{{ $value->id }}">{{ $value->type_team_name }}</td>
                                    <td>
                                        <ul class="action d-flex list-unstyled">
                                            <!-- Bouton Modifier -->
                                            <li class="edit me-2">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#editModal{{ $value->id }}">
                                                    <i class="fas fa-pencil-alt text-warning"></i>
                                                </a>
                                            </li>

                                            <!-- Formulaire de suppression -->
                                            <li class="delete">
                                                <form action="{{ route('team_type.destroy', $value->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" style="border: none; background: none; color: red;">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <!-- Modal Modifier -->
                                <div class="modal fade" id="editModal{{ $value->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $value->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modifier le type d'équipe</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="updateTeamTypeForm" data-id="{{ $value->id }}" action="{{ route('team_type.update', $value->id) }}" method="POST">
                                                    <input type="hidden" name="_method" value="PUT">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                
                                                    <div class="mb-3">
                                                        <label for="type_team_name_{{ $value->id }}" class="form-label">Nom du type d'équipe</label>
                                                        <input type="text" class="form-control type_team_name" id="type_team_name_{{ $value->id }}" name="type_team_name" value="{{ $value->type_team_name }}" required>
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
                        {{ $teamtype->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>

$(document).ready(function() {
    $(".updateTeamTypeForm").submit(function(event) {
        event.preventDefault();

        let form = $(this);
        let id = form.data("id");
        let type_team_name = form.find(".type_team_name").val();
        let url = "/team_type/" + id;

        $.ajax({
            url: url,
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                _method: "PUT",
                type_team_name: type_team_name
            },
            success: function(response) {
                if (response.success) {
                    $("#editModal" + id).modal("hide");

                    // Réinitialiser la liste
                    let tableBody = $("tbody");
                    tableBody.empty();  // Efface le tableau

                    // Remplir avec les nouvelles données
                    response.teamtypes.forEach((team, index) => {
                        tableBody.append(`
                            <tr role="row">
                                <td>${index + 1}</td>
                                <td id="team-type-name-${team.id}">${team.type_team_name}</td>
                                <td>
                                    <ul class="action d-flex list-unstyled">
                                        <li class="edit me-2">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#editModal${team.id}">
                                                <i class="fas fa-pencil-alt text-warning"></i>
                                            </a>
                                        </li>
                                        <li class="delete">
                                            <form action="/team_type/${team.id}" method="POST" style="display:inline;">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" style="border: none; background: none; color: red;">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        `);
                    });

                    alert("Mise à jour réussie !");
                } else {
                    alert("Erreur: " + response.message);
                }
            },
            error: function(xhr) {
                alert("Une erreur est survenue. Vérifiez votre connexion.");
            }
        });
    });
});

</script>
@endsection
