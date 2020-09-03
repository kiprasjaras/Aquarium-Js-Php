<?php
include "../../classes/all_function_7.php";
$db=array('id'=>$_POST['ctr_id']);
$read=$fun->one_value("keywords",$db);
?>
<form action="" method="post">
<div class="modal-body">

        <div class="form-group">
            <label for="recipient-name" class="form-control-label">Update Slider Images</label>
            <input type="text" class="form-control" name="file" value="<?php echo $read['title'];?>" id="name">
            <input type="hidden" class="form-control" name="id" value="<?php echo $read['id'];?>" id="id">
        </div>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
    <input type="submit" class="btn btn-warning" name="update" value="Update" id="update">
</div

</form>