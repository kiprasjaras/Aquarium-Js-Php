<?php
include "inc/all.php";
include "inc/css_file.php";
include "inc/header.php";
?>
<?php
$msg="";
if(isset($_POST['submit'])) {

    $data = array(
        'user_id' => $_SESSION['user'],
        'description' => $_POST['description'],
        'status' => 1
    );

        $insert = $fun->insert_data("comments", $data);
        if ($insert) {
            header("Location: reviews.php");
        } else {

            $msg = "Something wrong";
        }

}
if(isset($_POST['upd'])) {
    $dd=array('id'=>$_GET['updd']);
    $data = array(
        'description' => $_POST['message']
    );
    $insert = $fun->edit_data("comments",$data,$dd);
    if ($insert) {
        header("Location: reviews.php");
    } else {

        $msg = "Something wrong";
    }

}
if(isset($_GET['del'])){
    $dd=array('id'=>$_GET['del']);
    $dell=$fun->delete_data("comments",$dd);
    if($dell){
        header("Location: reviews.php");
    }
}
?>

<main>
    <!-- Blurb -->
    <section id="reviews">
        <div class="container bg-dark-trans py-5">
            <article>
                <h1>Reviews</h1>

                <h5>Here are some of our previous customer reviews!</h5>

                <?php
                $cont=array('status'=>1);
                $term=$fun->select_data_or("comments",$cont,"id","DESC");
                foreach ($term as $item) {
                ?>
                <div class="row my-5">

                    <div class="col-auto">
                        <?php
                        $ct = array('id' => $item['user_id']);
                        $vaa = $fun->one_value("users", $ct);
                        if (!empty($vaa['file_name'])) {
                        ?>
                            <img class="rounded-circle" src="upload/user/<?php echo $vaa['file_name']; ?>" alt="" style="width: 50px;height: 50px;">

                            <?php
                        } else {
                            ?>
                            <img class="rounded-circle" src="https://via.placeholder.com/60" alt="">
                            <?php
                        }
                            ?>
                        </div>


                        <div class="col">

                            <h5><?php
                                echo $vaa['name'];
                                ?></h5>
                            <?php
                            if(isset($_SESSION['user'])) {
                                if ($item['user_id'] == $_SESSION['user']) {
                                    ?>
                                    <ul class="list-unstyled d-inline-flex">
                                        <li>
                                            <a href="?del=<?php echo $item['id']; ?>" class="text-danger">Delete</a>
                                        </li>&nbsp;
                                        <li><a href="?updd=<?php echo $item['id']; ?>" class="text-primary">Update</a>
                                        </li>
                                    </ul>
                                    <?php
                                }
                            }
                                ?>
                            <p>
                                <?php
                                echo $item['description'];
                                ?>
                            </p>

                        </div>
                    </div>
                    <?php
                }

                ?>



            </article>

            <article>
                <h2>Give us feedback!</h2>
                Leave a review! It helps us learn how to improve and provide the best possible services to our
                customers.
                <?php
                if(isset($_GET['updd'])){
                    ?>
                    <form action=""  method="post" class="mt-4 w-50">
                        <div class="form-group">
                            <?php
                            $ud=array('id'=>$_GET['updd']);
                            $df=$fun->one_value("comments",$ud);
                            ?>
                            <label for="comments">Comments</label>
                            <textarea class="form-control" id="comments" rows="3" name="message"><?php echo $df['description'] ?></textarea>
                        </div>
                        <?php
                        if(isset($_SESSION['user'])) {
                            ?>
                            <button type="submit" class="btn btn-primary" name="upd">Update</button>

                            <?php
                        } else {
                            ?>
                            <button type="submit" class="btn btn-primary"  id="btn">Login</button>

                            <?php
                        }
                        ?>
                    </form>
                    <?php
                } else{
                ?>
                <form action=""  method="post" class="mt-4 w-50">
                    <div class="form-group">
                        <label for="comments">Comments</label>
                        <textarea class="form-control" id="comments" rows="3" name="description"></textarea>
                    </div>
                    <?php
                    if(isset($_SESSION['user'])) {
                        ?>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>

                        <?php
                    } else {
                        ?>
                        <button type="submit" class="btn btn-primary"  id="btn">Login</button>

                        <?php
                    }
                        ?>
                </form>
                <?php
                }
                ?>
            </article>
        </div>
    </section>
</main>

<?php

include "inc/footer.php";
include "inc/js_file.php";

?>