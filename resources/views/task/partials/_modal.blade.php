<!-- Button trigger modal -->
<button type="button" id="btn" style="display: none" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></button>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <table class="table table-success table-striped table-hover">
                <tbody>
                    <tr>
                      <th scope="row">Description</th>
                      <td id="description">Mark</td>
                    </tr>
                    <tr>
                      <th scope="row">Debut</th>
                      <td id="start">Jacob</td>
                    </tr>
                    <tr>
                        <th scope="row">Fin</th>
                        <td id="end">Jacob</td>
                    </tr>
                    <tr>
                        <th scope="row">Créer le </th>
                        <td id="create">Jacob</td>
                    </tr>
                    <tr>
                        <th scope="row">Modifier le</th>
                        <td id="update">Jacob</td>
                    </tr>
                  </tbody>
            </table>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            <a class="btn btn-primary" href="" id="update_link">Modifier</a>
            <a class="btn btn-danger" href="" id="delete_link">Supprimer</a>
            <form action="" method="post" id="delete_form" style="display: none">
                @csrf
                @method('DELETE')
            </form>
        </div>
        </div>
    </div>
</div>
