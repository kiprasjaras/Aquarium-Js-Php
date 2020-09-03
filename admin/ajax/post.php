<?php
include "../../classes/all_function_7.php";
$db=array('id'=>$_POST['ctr_id']);
$read=$fun->one_value("posts",$db);
?>

<div class="modal-body">

    <div class="row ">
        <div class="col-lg-12">
            <div class="">
                <div class="card-header">
                    <h4 class="text-uppercase"> View <?php  echo  $read['title'];?></h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive get_rect">
                        <table id="example" class="table table-striped table-bordered border-t0  w-100">
                            <thead>
                            <tr class="alert-info text-danger">
                                <th>Key word</th>
                                <th>Detail</th>

                            </tr>
                            </thead>
                            <tbody>


                                    <td class="w-20"><?php echo $read['keywords']; ?></td>
                                    <td class="w-20"><?php echo $read['artical_detail']; ?></td>




                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div

