<div class="modal fade" id="modal_delete" tabindex="-1" aria-labelledby="modal_delete_lable" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modal_delete_lable">Warning!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4 id="custom-messate">Are you sure you want to delete <span id="custom-message-modal"></span>?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm my-btn-color" data-bs-dismiss="modal">Close</button>
                <form id="form-delete" action="" method="post">
                    @csrf
                    @method('DELETE')

                    <button type="submit"  class="btn btn-sm my-btn-color">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
