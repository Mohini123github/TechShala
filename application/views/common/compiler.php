<div class="container mt-3">
<form id="code_form_id">
    <div class="row bgColor">
        <div class="col-sm-12 border border-light py-2">
            <button class="btn btn-primary btn-sm" onclick="addFileform()">Create File</button>
            <button class="btn btn-primary btn-sm float-end" type="submit">run your code</button>
        </div>
    </div>
    <div class="row bgColor">
        <div class="col-sm-2 dash-height border border-light">
        
            <div id="files"></div>
        </div>
        <div class="col-sm-6 dash-height border border-light">
            
                <div class="form-floating">
                    <textarea class="form-control"style="border:none;background: transparent; min-height:300px" name="code" placeholder="Leave a comment here" id="floatingTextarea2">
                        <?php isset($code)?print($code):"" ?>
                    </textarea>
                    <label for="floatingTextarea2">Code Here...</label>
                </div>
            
        </div>
        <div class="col-sm-4" id="output">

        </div>
    </div>
 </form>
    <div id="callModal"></div>
</div>