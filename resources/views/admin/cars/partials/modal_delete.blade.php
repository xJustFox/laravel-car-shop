<div class="modal fade" id="modal_car_delete" tabindex="-1" aria-labelledby="modal_car_delete_lable" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modal_car_delete_lable">Attenzione!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h3 id="custom-messate">Sei sicuro di voler eliminare questa automobile?</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Chiudi</button>
                <form id="form-delete" action="" method="post">
                    @csrf
                    @method('DELETE')

                    <button type="submit"  class="btn btn-sm btn-danger">Cancella</button>
                </form>
            </div>
        </div>
    </div>
</div>
