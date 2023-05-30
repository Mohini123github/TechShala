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
                <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-file"></i></span>
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
<!-- edit modal -->
<div class="modal fade" tabindex="-1" id="editFile">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit File</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="editfile">
        <div class="modal-body">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-file"></i></span>
                <input type="text" class="form-control" id="file_name" placeholder="File Name" value="<?php echo $row['file_name'];?>" name="file_name"/>
            </div>
            <p id="file"></p>
            <div class="input-group flex-nowrap">
                <input type="hidden" class="form-control" value="<?php echo $this->session->userdata('id');?>" name="user_id"/>
            </div>
            <div class="input-group flex-nowrap">
                <input type="hidden" class="form-control" value="<?php echo $row['id'];?>" name="id"/>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
            <button type=submit" class="btn btn-sm  btn-color">Edit File</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- get delete file-->
<div class="modal fade" id="delfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="delFile">
        <div class="modal-body text-center">
          <h4>Are You Really want to delete This File</h4>
          <p>If you delete this file you can't recover its code </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>