<?php
include "classes/all_function_7.php";
session_start();
if(isset($_POST['login'])){
    $data=array(
        'email' => $_POST['email'],
        'password' => md5($_POST['password']),
        'status'=>1
    );
    $con=$fun->row_count_con("users",$data);
    if($con>0){
        $value=$fun->one_value("users",$data);
        $_SESSION['user']=$value['id'];
        header("Location:index.php");
    }
    else{
        echo "<script>alert('Your Email and Password does not match');</script>";
    }

}
