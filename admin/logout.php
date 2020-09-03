<?php 

include "../classes/all_function_7.php";
session_start();
unset($_SESSION['admin']);
session_destroy();
header("Location:index.php");
 ?>