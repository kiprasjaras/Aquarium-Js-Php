<?php 
include ('../classes/all_function_7.php');
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include "inc/css_file.php" ?>
	</head>

	<body class="app ">

		<div id="spinner"></div>
 
		<div id="app">
			<div class="main-wrapper" >
				<?php include "inc/sidefile.php" ?>
<?php 
$ss=array('id'=>$_SESSION['admin']);
$val=$fun->one_value("admin",$ss);
$nameErr="";
$succ="";
if(isset($_POST['update'])){
    $pwd1=$_POST['pwd1'];
    $pwd2=$_POST['pwd2'];
    $pwd3=$_POST['pwd3'];
    if($val['password']==md5($pwd1)){
        if($pwd1==$pwd2){
            $nameErr="Your Old And New Password are same,Please make Different ";
        }
        else{
            if ($pwd2==$pwd3){
                $data=array(
                    'password' => md5($pwd2)
                );
                $con=array('id'=> $_SESSION['admin']);
                $update=$fun->edit_data("admin",$data,$con);
                if ($con) {
                    $succ="Password  Successfully Update";
                }
                else {
                    $nameErr = "Error Try Again";
                }
            }
            else{
                $nameErr="Your  confirm Password Doest not match";
            }
        }
    }
    else{
        $nameErr="Your Old Password is Wrong";
    }
}
?>
		
			<div class="app-content">
						<div class="row mt-5 " >
							<div class="col-lg-12 col-xl-4 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4>Personal Details</h4>
									</div>
									<div class="card-body">
										<p><b>Name :</b> <?php echo $value['name']; ?></p>
										<p><b>Email :</b> <?php echo $value['user_name']; ?></p>

									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-8 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-body p-4">
										<div class="row d-flex">
											<div class="col-lg-8 offset-2">
												<div class="login-sec">
										<div class=" text-center card mb-0">
											<form id="login" class="card-body" tabindex="500" method="post" action="" autocomplete="off">
												<h4 class="mb-3">Update for Password</h4>
                                                <?php if($nameErr!=""){ ?>
                                                <div class="alert alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert">&times;
                                                    </button>
                                                    <?php echo $nameErr;  ?>
                                                </div>
                                                    <?php } if($succ!="") { ?>
                                                    <div class="alert alert-success alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert">&times;
                                                        </button>
                                                        <?php echo $succ; ?>
                                                    </div>
                                                    <?php }  ?>
												<div class="">
													<div class="form-group">
													<input type="password" class="form-control" name="pwd1" id="name" placeholder="Enter Current Password"  required="required" autocomplete="off">
													</div>
													<div class="form-group">
														<input type="password" class="form-control" name="pwd2"  id="user" placeholder="Enter New Password" maxlength="5"  required="required"  autocomplete="off">
													</div>
													<div class="form-group">
														<input type="password" class="form-control" name="pwd3" id="password" placeholder="Confirm Password"  required="required">
													</div>
													<div class="checkbox">
														<div class="custom-checkbox custom-control">
															<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
															<label for="checkbox-1" class="custom-control-label">Check me Out</label>
														</div>
													</div>
												</div>
												<div class="submit mt-3 mb-3">
													<input type="submit" name="update" value="Update"  class="form-control bg-warning btn-block text-capitalize">
												</div>

										    </form>

									    </div>
								    </div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
				</div>


			</div>
		</div>

      <?php include "inc/js_file.php"; ?>


	</body>
</html>