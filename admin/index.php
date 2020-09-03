
<?php
include "../classes/all_function_7.php";
session_start();
if(isset($_SESSION['admin'])){
	header("Location:dashboard.php");
}
$error="";
if(isset($_POST['login'])){
    $data=array(
        'user_name' => $_POST['user_name'],
        'password' => md5($_POST['pwd'])
    );
    $con=$fun->row_count_con("admin",$data);
    if($con>0){
        $value=$fun->one_value("admin",$data);
        $_SESSION['admin']=$value['id'];
        header("Location:dashboard.php");
    }
    else{
        $error="Your UserName or Password does not match";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<?php include "inc/css_file.php" ?>
	</head>

	<body class="app ">

<!-- 		<div id="spinner"></div>
 -->
		<div id="app">

			<section >
                <div class="container-fluid">
					<div class="row">
						<div class="single-page single-pageimage construction-bg cover-image " >
							<div class="row">

								<div class="col-lg-6 col-xl-6 mx-auto">
									<div class="login-sec">
										<div class=" text-center card mb-0">
											<form id="login" class="card-body" tabindex="500" method="post" action="">
												<h4 class="mb-3">Admin Login</h4>
                                                <?php
                                                if($error!="") {
                                                    ?>
                                                    <div class="alert alert-danger alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert">
                                                            &times;
                                                        </button>
                                                        <?php
                                                        echo $error;
                                                        ?>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
												<div class="">
													<div class="form-group">
														<input type="text" class="form-control" name="user_name" id="c" placeholder="User Name" required="required">
													</div>
													<div class="form-group">
														<input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password" required="required">
													</div>
													<div class="checkbox">
														<div class="custom-checkbox custom-control">
															<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1" required="required">
															<label for="checkbox-1" class="custom-control-label">Check me Out</label>
														</div>
													</div>
												</div>
												<div class="submit mt-3 mb-3">
                                                    <input type="submit" class="form-control bg-warning" name="login" value="Login">
												</div>
										    </form>

									    </div>
								    </div>
							    </div>
							</div>
						</div>
					</div>
				</section>
		</div>

      <?php include "inc/js_file.php"; ?>
<!--    developer inam ul haq -->
	</body>
</html>