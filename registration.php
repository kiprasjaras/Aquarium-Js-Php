<?php
include "inc/all.php";
$msg="";
if(isset($_POST['submit'])) {
    $rand=rand(0,9999);
    $file_name=$_FILES["file"]["name"];
    $file_tmp_name=$_FILES["file"]["tmp_name"];
    $file=$rand."_".$file_name;
    $target_dir="upload/user/".$file;
    move_uploaded_file($file_tmp_name,$target_dir);
    $date = date('Y-m-d');
    $data = array(
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'password' => md5($_POST['password']),
        'file_name' => $file,
        'create_at' => $date,
        'status' => 1
    );
    $uniq = array('email' => $_POST['email']);
    $nun = $fun->row_count_con("users", $uniq);
    if ($nun>0 ) {

        $msg = "Username are Already Taken";
    } else {
        $insert = $fun->insert_data("users", $data);
        if ($insert) {
            $msg="Registration is successfully & Now login";
//            header("refresh=1; url:index.php");
        } else {

            $msg = "Something wrong";
        }
    }
}
?>
<?php
include "inc/css_file.php";
include "inc/header.php";
?>

<div class="container">
    <div class="row ">
        <?php
        if(!empty($msg)) {
            ?>
            <div class="alert bg-success alert-dismissible fade show w-100" role="alert">
                <?php
                echo $msg;
                ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
        }
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="abc@gmail.com" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" minlength="6" placeholder="Password" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="">Image</label>
                    <input type="file" name="file" class="form-control" >
                </div>
                <div class="form-group col-md-12">

                    <input type="submit" name="submit" class="btn btn-primary"  value="Registration">
                </div>
            </div>
        </form>
    </div>
</div>
<?php

include "inc/footer.php";
include "inc/js_file.php";
?>
