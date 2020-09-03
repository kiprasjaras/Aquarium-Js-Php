<?php
include "../../classes/all_function_7.php";
if(isset($_POST["id"]))
{
    foreach($_POST["id"] as $id)
    {
        $del_id=array('id'=>$id);
        $del=$fun->delete_data("keywords",$del_id);
    }
    ?>
<?php

}
?>