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
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" onclick="Profile();" data-bs-target="#contact-tab-pane" type="button" role="tab" >Profile</button>
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
  function Profile(){
    $.ajax({
        url: '<?php echo base_url("Dashboard/profile");?>',
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
    })
  })
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
  function runCode(){
		document.getElementById('code_form_id').submit();
	}
</script>