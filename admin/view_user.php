<?php 
		include ('../classes/all_function_7.php');
					session_start();

				 ?>
				 <?php
                 if(isset($_GET['deact'])){
                     $update=array('id' => $_GET['deact']);
                     $status=array('status' => 0);
                     $deact=$fun->edit_data("users",$status,$update);
                     if($deact){
                         header("Location:view_user.php");
                     }
                     else{
                         echo "<script>alert('status is not deactive   ');</script>";
                     }
                 }
                 if(isset($_GET['act'])){
                     $update=array('id' => $_GET['act']);
                     $status=array('status' => 1);
                     $deact=$fun->edit_data("users",$status,$update);
                     if($deact){
                         header("Location:view_user.php");
                     }
                     else{
                         echo "<script>alert('status is not active   ');</script>";
                     }
                 }
				 	if (isset($_GET['del'])){
           $data=array(
            'id' => $_GET['del']
    			);
   $del=$fun->delete_data("users",$data);
   if($del){
       header("location:view_user.php");
   }
}
				  ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include "inc/css_file.php" ?>
	</head>

	<body class="app ">
    <div id="app">
			<div class="main-wrapper" >
				<?php include "inc/sidefile.php" ?>

				<div class="app-content">
					<section class="section">

						<div class="row mt-2">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4 class="text-uppercase"> View User</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive get_rect">
										<table id="example" class="table table-striped table-bordered border-t0  w-100">
											<thead>
												<tr class="alert-info text-danger">
													<th class="wd">No</th>
                                                    <th>Status</th>
													<th class="wd-15p">image</th>
													<th class="wd-15p">Name</th>
													<th class="wd-15p">Email</th>
												</tr>
											</thead>
    											<tbody>
												<?php
								                    $no=1;
								                    $result=$fun->fetch_data_or("users","id","DESC");
								                    foreach ($result as $value) {
								                        ?>
												<tr id="<?php echo $value["id"]; ?>">
													<td><?php echo $no; ?></td>
                                                    <td><?php
                                                        $state=$value['status'];
                                                        if($state==1) {
                                                            ?>
                                                            <a class="btn-outline-dark   p-2" href="?deact=<?php echo $value['id']; ?>">Active</a>

                                                            <?php
                                                        }else { ?>
                                                            <a class=" btn-outline-danger p-2" href="?act=<?php echo $value['id']; ?>">De-active</a>

                                                            <?php
                                                        }

                                                        ?></td>
													<td class="w-20"><img class="w-32 h-50" src="../upload/user/<?php echo $value['file_name']; ?>" alt=""></td>
													<td class="w-20"><?php echo $value['name']; ?></td>
													<td class="w-20"><?php echo $value['email']; ?></td>




												</tr>
                                                        <?php $no++; ?>
												<?php 
													}
												 ?>
											</tbody>
										</table>
									</div>
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
