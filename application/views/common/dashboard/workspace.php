<table class="table bgColor my-3">
    <thead>
        <th>Workspaces</th>
        <th></th>
        <th></th>
    </thead>
    <tbody>
        <?php foreach ($file as $row) :?>
            <tr>
                <td><?php echo $row->file_name;?></td>
                <td class="text-end "><i class="fa-solid fa-eye"></i>Preview</td>
                <td class="text-end "><i class="fa-solid fa-pen-to-square"  style="cursor:pointer;" onclick='getEditFile("<?php echo $row->id;?>")'></i> <i class="fa-solid fa-trash-can text-danger" onclick='getDeleteFile("<?php echo $row->id;?>")' style="cursor:pointer;"></i></td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
<div id="callModal"></div>