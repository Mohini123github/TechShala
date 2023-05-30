<?php foreach ($file as $row):?>
    <div class="border-start border-dark d-flex align-items-center ">
           <div style="height:1px; width: 20px; background-color: black; margin: 15px 0px;"></div><i class="fa-solid fa-file mx-2"></i><?php echo $row->file_name;?>
        </div>
    <?php endforeach;?>