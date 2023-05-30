</div></div>
<div class="container dash-height">
<ul class="nav nav-tabs pt-3" id="myTab" role="tablist">
  <li class="nav-item me-2" role="presentation">
    <button class="nav-link active" data-bs-toggle="tab" onclick="Compiler();"type="button" role="tab" >Compiler</button>
  </li>
  <li class="nav-item me-2" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" onclick="Workspaces();" data-bs-target="#profile-tab-pane" type="button" role="tab" >Wprkspaces</button>
  </li>
  <li class="nav-item me-2" role="presentation">
    <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" onclick="Settings();" data-bs-target="#disabled-tab-pane" type="button" role="tab">Settings</button>
  </li>
</ul>
<div id="myTabContent"></div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    Compiler();
    showFile();
  });
    function Compiler(){
    $.ajax({
        url: '<?php echo base_url("Dashboard/compiler");?>',
        type: 'GET',
        datatype: 'text/plain',
        success :function(response){
            $("#myTabContent").html(response);
            showFile();
        }
    });
  }
  function Workspaces(){
    $.ajax({
        url: '<?php echo base_url("Dashboard/workspace");?>',
        type: 'GET',
        datatype: 'text/plain',
        success :function(response){
            $("#myTabContent").html(response);
        }
    });
  }
  function Settings(){
    $.ajax({
        url: '<?php echo base_url("Dashboard/settings");?>',
        type: 'GET',
        datatype: 'text/plain',
        success :function(response){
            $("#myTabContent").html(response);
        }
    });
  }
  function addFileform(){
    $.ajax({
        url: '<?php echo base_url("User/callModal");?>',
        type: 'GET',
        datatype: 'text/plain',
        success :function(response){
            $("#callModal").html(JSON.parse(response).html);
            $("#addfile").modal("show");
        }
    });
  }
  $("body").on("submit","#addFile",function(e){
    e.preventDefault();
    $.ajax({
        url: '<?php echo base_url('User/addfile')?>',
        type: 'POST',
        datatype: 'json',
        data: $(this).serializeArray(),
        success :function(response){
            if (response["file_name"] != "") {
              $("#file").html(response["file_name"]).addClass('invalid-feedback d-block');
              $("#file_name").addClass('is-invalid');
              }
              $("#addfile").modal("hide");
              showFile();
        }
    });
  });
  function showFile(){
    $.ajax({
        url: '<?php echo base_url("Dashboard/file");?>',
        type: 'GET',
        datatype: 'text/plain',
        success :function(response){
            $("#files").html(response);
        }
    });
  }
  $("body").on("submit","#code_form_id",function(e){
    e.preventDefault();
    $.ajax({
      url: '<?php echo base_url('User/runCode')?>',
        type: 'POST',
        datatype: 'json',
        data: $(this).serializeArray(),
        success :function(response){
          // alert(response);
          $("#output").text(response);
          // document.getElementById('code_form_id').submit();
        }
    })
  })

  function getEditFile(file_id){
    $.ajax({
      url : '<?php echo base_url("User/callModal/")?>'+file_id,
      type: 'GET',
      datatype: 'text/plain',
      success :function(response){
          $("#callModal").html(JSON.parse(response).html);
          $("#editFile").modal("show");
      }
    })
  }
  $("body").on("submit","#editfile",function(e){
    e.preventDefault();
    $.ajax({
        url: '<?php echo base_url('User/updateFile')?>',
        type: 'POST',
        datatype: 'json',
        data: $(this).serializeArray(),
        success :function(response){
          $("#editFile").modal("hide");
          showFile();
        }
    });
  });
  function getDeleteFile(file_id){
    $.ajax({
      url : '<?php echo base_url("User/callModal/")?>'+file_id,
      type: 'GET',
      datatype: 'text/plain',
      success :function(response){
          $("#callModal").html(JSON.parse(response).html);
          $("#delfile").modal("show");
          $("#delfile").data("file_id", file_id);
      }
    })
  }
  $("body").on("submit","#delFile",function(e){
    e.preventDefault();
    var file_id = $("#delfile").data('file_id');
    $.ajax({
        url: '<?php echo base_url("User/deleteFile/")?>'+file_id,
        type: 'POST',
        datatype: 'json',
        data: $(this).serializeArray(),
        success :function(response){
          $("#delfile").modal("hide");
          Workspaces();
        }
    });
  });
</script>