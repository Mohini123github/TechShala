<div class="modal fade" tabindex="-1" id="addfile">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Create File</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="addFile">
        <div class="modal-body">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">@</span>
                <input type="text" class="form-control" id="file_name" placeholder="File Name" name="file_name"/>
            </div>
            <p id="file"></p>
            <div class="input-group flex-nowrap">
                <input type="hidden" class="form-control" value="<?php echo $this->session->userdata('id');?>" name="user_id"/>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
            <button type=submit" class="btn btn-sm  btn-color">Add File</button>
        </div>
      </form>
    </div>
  </div>
</div>