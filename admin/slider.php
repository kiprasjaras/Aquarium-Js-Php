<?php 
		include ('../classes/all_function_7.php');
					session_start();
	
				$succ="";
				$error="";
				if(isset($_POST['add_cat'])) {
                    $date = date('Y-m-d');
                    $rand=rand(0,9999);
                    $file_name=$_FILES["file"]["name"];
                    $file_tmp_name=$_FILES["file"]["tmp_name"];
                    $file=$rand."_".$file_name;
                    $target_dir="../upload/post/".$file;
                    move_uploaded_file($file_tmp_name,$target_dir);
                    $ins = array(
                        'title' => $file,
                        'create_at' => $date,
                        'status' => 1
                    );


                    $con = $fun->insert_data("keywords", $ins);
                    if ($con) {
                        $succ = "Successfully add";
                    } else {
                        $error = "Error!";
                    }
                }


				 ?>
				 <?php
                 if(isset($_GET['deact'])){
                     $update=array('id' => $_GET['deact']);
                     $status=array('status' => 0);
                     $deact=$fun->edit_data("keywords",$status,$update);
                     if($deact){
                         header("Location:keyword.php");
                     }
                     else{
                         echo "<script>alert('status is not deactive   ');</script>";
                     }
                 }
                 if(isset($_GET['act'])){
                     $update=array('id' => $_GET['act']);
                     $status=array('status' => 1);
                     $deact=$fun->edit_data("keywords",$status,$update);
                     if($deact){
                         header("Location:keyword.php");
                     }
                     else{
                         echo "<script>alert('status is not active   ');</script>";
                     }
                 }
				 	if (isset($_GET['del'])){
           $data=array(
            'id' => $_GET['del']
    			);
   $del=$fun->delete_data("keywords",$data);
   if($del){
       header("location:slider.php");
   }
}

//                 update data
                 if(isset($_POST['update'])) {
                     $rand=rand(0,9999);
                     $file_name=$_FILES["file"]["name"];
                     $file_tmp_name=$_FILES["file"]["tmp_name"];
                     $file=$rand."_".$file_name;
                     $target_dir="../upload/post/".$file;
                     move_uploaded_file($file_tmp_name,$target_dir);
                     $upd = array('id' => $_POST['id']);
                     $upt = array('title' => $file);

                         $edt = $fun->edit_data("keywords", $upt, $upd);
                         if ($edt) {
                             header('Location:slider.php');
                         } else {
                             $error = "Error!";
                         }
                 }
				  ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include "inc/css_file.php" ?>
	</head>

	<body class="app ">
    <div class="modal fade" id="ctr" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="ctr_detail">

            </div>
        </div>
    </div>

    <div id="app">
			<div class="main-wrapper" >
				<?php include "inc/sidefile.php" ?>

				<div class="app-content">
					<section class="section">

						<div class="row mt-2">
							<div class="col-sm-12 col-lg-12 col-md-12 col-xl-12 ">
								<div class="card">
									<div class="card-body">
										<form action="" method="post" enctype="multipart/form-data">
											<?php
                                                if($succ!=""){
                                                ?>
                                                <div class="alert alert-success alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert">&times;
                                                    </button>
                                                    <?php
                                                    echo $succ;
                                                    ?>
                                                </div>
                                                    <?php
                                                    }
                                            if($error!=""){
                                                ?>
                                                <div class="alert alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert">&times;
                                                    </button>
                                                    <?php
                                                    echo $error;
                                                    ?>
                                                </div>
                                                <?php
                                            }
                                            ?>

                                            <div class="form-group row mb-0">
													<label class="col-2 col-form-label">Add sliders</label>

													<div class="col-8">
														<input type="file" class="form-control"  name="file"  placeholder="sliders"   required="required">
													</div>
													<div class="col-2">
														<div class="input-group">
															<input type="submit" class="btn btn-warning waves-effect waves-light p-2 w-100"  name="add_cat" value="Add">
														</div>
													</div>															
													</div>		
										</form>
                                    </div>
							    </div>
							</div>
							
						</div>

						
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4 class="text-uppercase"> View sliders Images</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive get_rect">
										<table id="example" class="table table-striped table-bordered border-t0  w-100">
											<thead>
												<tr class="alert-info text-danger">
													<th class="wd">No</th>
                                                    <th class="wd-15p">Action</th>
                                                    <th>Status</th>
													<th class="wd-15p">Name</th>


												</tr>
											</thead>
    											<tbody>
												<?php
								                    $no=1;
								                    $result=$fun->fetch_data_or("keywords","id","DESC");
								                    foreach ($result as $value) {
								                        ?>
												<tr id="<?php echo $value["id"]; ?>">


                                                    </td>
													<td><?php echo $no; ?></td>
                                                    <td>
                                                        <div class="btn-group align-top">
                                                            <a id="<?php echo $value['id'] ?> " class="view_data btn btn-sm btn-warning badge" data-toggle="modal" data-target="#ctr" ><i class="fa fa-edit text-white"></i></a>
                                                            <a href="?del=<?php echo $value['id'] ?> " class="btn btn-sm btn-danger badge" data-toggle="tooltip" data-original-title="Are you Want Delete It?"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                    </td>
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
													<td class="w-20"><img src="../upload/post/<?php echo $value['title']; ?>" alt="" class="w-40 h-32"></td>



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
        <script>
            $(document).ready(function(){
                $("#item-m").click(function () {
                    $(".keyup").prop('checked', $(this).prop('checked'));
                    var count = $('.keyup').filter(':checked').length;
                    if(count > 0){
                        $('.dl').removeAttr("disabled");
                    }else{
                        $('.dl').attr("disabled", "disabled");

                    }
                });
                $('.dl').attr("disabled", "disabled");
                $('.keyup').change(function(){
                    var count = $('.keyup').filter(':checked').length;
                    var tt=$('#count-checked-checkboxes').text(count);
                    if(count > 0){
                        $('.dl').removeAttr("disabled");
                        $('.dl').show("disabled");
                    }else{
                        $('.dl').attr("disabled", "disabled");

                    }



                });

                // delete check box
                $('#btn_delete').click(function(){
                    if(confirm("Are you sure you want to delete this?"))
                    {
                        var id = [];
                        $(':checkbox:checked').each(function(i){
                            id[i] = $(this).val();
                        });
                        if(id.length === 0) //tell you if the array is empty
                        {
                            alert("Please Select at-least one checkbox");
                        }
                        else
                        {
                            $.ajax({
                                url:'ajax/delete_keyword.php',
                                method:'POST',
                                data:{id:id},
                                cache: false,
                                success:function()
                                {
                                    for(var i=0; i<id.length; i++)
                                    {
                                        $('tr#'+id[i]+'').css('background-color', '#ccc');
                                        $('tr#'+id[i]+'').fadeOut('slow');
                                    }
                                }
                            });
                        }
                    }
                    else
                    {
                        return false;
                    }
                });
                // /data update
                $('.view_data').click(function(){
                    var ctr_id = $(this).attr("id");
                    $.ajax({
                        url:"ajax/update_keyword.php",
                        type:"POST",
                        data:{ctr_id:ctr_id},
                        success:function(data){
                            $('#ctr_detail').html(data);
                            $('#ctr').modal("show");
                        }
                    });
                });
            });
            //
        </script>


	</body>
</html>
