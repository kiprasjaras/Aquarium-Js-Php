<?php
include ('../classes/all_function_7.php');
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include "inc/css_file.php";?>
    </head>
	<body class="app ">
		<div id="app">
			<div class="main-wrapper" >
				<?php include "inc/sidefile.php"; ?>
				<div class="app-content">
					<section class="section">


						<div class="row mt-3">

								<div class="col-lg-6 col-xl-3 col-md-6 col-12">
									<div class="card bg-primary text-white">
										<div class="card-body">
                                            <a href="user.php">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="icon1 text-center">
                                                            <i class="mdi mdi-account-multiple text-white"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mt-3 text-center">
                                                            <span class="text-white">Total User </span>
                                                            <h2 class="text-white mb-0">
                                                                <?php $con=array(
                                                                    'status'=>1
                                                                );
                                                                $count=$fun->row_count_con("users",$con);
                                                                echo $count;
                                                                ?>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
										</div>
									</div>
								</div>

								<div class="col-lg-6 col-xl-3 col-md-6 col-12">
									<div class="card bg-success text-white">
										<div class="card-body">
                                            <a href="">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="icon1 text-center">
                                                            <i class="fe fe-twitter text-white"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mt-3 text-center">
                                                            <span class="text-white">Total Comment</span>
                                                            <h2 class="text-white mb-0">
                                                                <?php
                                                                $con=array(
                                                                    'status'=>1
                                                                );
                                                                $count=$fun->row_count_con("comments",$con);
                                                                echo $count;
                                                                ?>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
										</div>
									</div>
								</div>
							</div>

						
						<div class="row">
                            <div class="col-lg-12 col-xl-6 col-md-12 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Calendar</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="calendar-1" class=""></div>
                                    </div>
                                </div>
                            </div>
						</div>
                    </section>
				</div>




			</div>
		</div>
      <?php include "inc/js_file.php"; ?>
	</body>
</html>