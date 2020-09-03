<?php
include "inc/all.php";

if(isset($_POST['submit'])) {
    $data = array(
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'message' => $_POST['message'],
        'status' => 0
    );

        $insert = $fun->insert_data("request", $data);
        if ($insert) {
            echo "<script>alert('Your Message Will be sent'); </script>";
        } else {

            $msg = "Something wrong";
        }

}

include "inc/css_file.php";
include "inc/header.php";
?>

<main>
    <?php
    include "inc/slider.php";
    ?>


    <!-- Blurbs -->
    <section class="container text-center">
        <h2 class="my-5 border-top border-bottom border-green">
            DAUGIAMETĖ PATIRTIS, MEILĖ AKVARIUMAMS, TIKĖJIMAS MENO GALIA
        </h2>

        <h4>
            Mes teikiame šias paslaugas
        </h4>

        <h5>
            Įrengiame akvariumus, pasirūpiname jų priežiūra
        </h5>

        <div class="row my-5 text-left">
            <div class="col-4">
                <div class="row">
                    <div class="col-auto">
                        <img class="rounded-circle" src="images/bluefish.jpg" alt="">
                    </div>

                    <div class="col">
                        <h5>Akvariumų dizainas ir planavimas</h5>
                        Bendradarbiaujant su dizaineriais ir architektais, parenkame geriausią sprendimą akvariumo
                        vietai bei dydžiui.
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="row">
                    <div class="col-auto">
                        <img class="rounded-circle" src="images/goldfish.jpg" alt="">
                    </div>

                    <div class="col">
                        <h5>Akvariumų įrengimas</h5>
                        Po visų planų suderinimo yra žymiai lengviau įrengti ar tiesiog pastatyti naują akvariumą. Tai
                        padaroma kliento pageidaujamu laiku, kad procesas nemaišytų biuro ar buities darbams.
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="row">
                    <div class="col-auto">
                        <img class="rounded-circle" src="images/yellowfish.jpg" alt="">
                    </div>

                    <div class="col">
                        <h5>Akvariumų priežiūra</h5>
                        Kad akvariumo turėjimas klientams nesukeltų didelių sunkumų, mes pasirūpinsime jo nuolatine
                        priežiūra.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Banner -->
    
    <section class="bg-dark py-3">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <h2>Domina mūsų paslaugos? Parašykite mums.</h2>
                </div>

                <div class="col-auto">
                    <button  class="btn btn-lg btn-success" data-toggle="modal" data-target="#myModal">Siųsti užklausą</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
            <div class="modal fade text-black-50" id="myModal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Request</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form name="my-form"  action="" method="post">
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                    <div class="col-md-6">
                                        <input type="number" name="phone" id="phone_number" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="message" class="col-md-4 col-form-label text-md-right">Message</label>
                                    <div class="col-md-6">
                                        <input type="textarea" id="message" class="form-control" name="message">
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" name="submit" class="btn btn-primary">
                                        Send
                                    </button>
                                </div>
                        </div>
                        </form>
                        </div>


                    </div>
                </div>
            </div>
<!--            <div class="modal modal-hidden">-->
<!--                <div class="modal_contents">-->
<!--                        <button type="button" class="close" aria-label="Close">-->
<!--                                <span aria-hidden="true">&times;</span>-->
<!--                              </button>-->
<!---->
<!--                    <main class="my-form">-->
<!--                        <div class="cotainer">-->
<!--                            <div class="row justify-content-center">-->
<!--                                <div class="col-md-20">-->
<!--                                        <div class="card">-->
<!--                                            <div class="card-header">Request</div>-->
<!--                                            <div class="card-body">-->
<!--                                                <form name="my-form"  action="" method="post">-->
<!--                                                    <div class="form-group row">-->
<!--                                                        <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>-->
<!--                                                        <div class="col-md-6">-->
<!--                                                            <input type="text" id="full_name" class="form-control" name="name">-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!---->
<!--                                                    <div class="form-group row">-->
<!--                                                        <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>-->
<!--                                                        <div class="col-md-6">-->
<!--                                                            <input type="text" id="email_address" class="form-control" name="email">-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!---->
<!--                                                    <div class="form-group row">-->
<!--                                                        <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>-->
<!--                                                        <div class="col-md-6">-->
<!--                                                            <input type="number" name="phone" id="phone_number" class="form-control">-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!---->
<!--                                                    <div class="form-group row">-->
<!--                                                        <label for="message" class="col-md-4 col-form-label text-md-right">Message</label>-->
<!--                                                        <div class="col-md-6">-->
<!--                                                            <input type="textarea" id="message" class="form-control" name="message">-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!---->
<!--                                                        <div class="col-md-6 offset-md-4">-->
<!--                                                            <button type="submit" name="submit" class="btn btn-primary">-->
<!--                                                            Send-->
<!--                                                            </button>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </form>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!---->
<!--                    </main>-->
<!--        </div>-->
<!--    </div>-->
   

    <!-- Blurbs 2 -->
    <section id="blurbs2" class="py-5">
        <div class="container text-center py-5">
            <h4>
                Kodėl verta rinktis mus?
            </h4>

            <h5 class="px-5">
                Akvariumų sodai – tai išskirtinį interjerą bei prabangą suteikianti įmonė, kuri rūpinasi Jūsų akvariumu,
                nuo pat įrengimo pradžios, iki pastovios priežiūros. Mūsų misija – atsakingai ir profesionaliai teikti
                akvariumistikos paslaugas bei įgyvendinti unikalius klientų norus. Atsižvelgiant į klientų poreikius ir
                lūkesčius, nuolat tobulinti teikiamų paslaugų kokybę.
            </h5>

            <div class="row my-5 text-left">
                <div class="col-4">
                    <div class="row">
                        <div class="col-auto">
                            <div class="rounded bg-trans p-2">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>

                        <div class="col">
                            <h5>Akvariumų dizainas ir planavimas</h5>
                            Bendradarbiaujant su dizaineriais ir architektais, parenkame geriausią sprendimą akvariumo
                            vietai bei dydžiui.
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="row">
                        <div class="col-auto">
                            <div class="rounded bg-trans p-2">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>

                        <div class="col">
                            <h5>Akvariumų įrengimas</h5>
                            Po visų planų suderinimo yra žymiai lengviau įrengti ar tiesiog pastatyti naują akvariumą.
                            Tai
                            padaroma kliento pageidaujamu laiku, kad procesas nemaišytų biuro ar buities darbams.
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="row">
                        <div class="col-auto">
                            <div class="rounded bg-trans p-2">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>

                        <div class="col">
                            <h5>Akvariumų priežiūra</h5>
                            Kad akvariumo turėjimas klientams nesukeltų didelių sunkumų, mes pasirūpinsime jo nuolatine
                            priežiūra.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sponsors -->
    <section id="sponsors" class="py-5">
        <div class="container text-center">
            <h4>Mūsų klientai</h4>
            <p>Savo akvariumus mums patiki</p>

            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <a href="http://rumsiskiubaldai.lt/" target="_blank">
                            <img class="img-fluid"
                                 src="images/rumsiskiubaldai.png"
                                 alt="">
                        </a>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card">
                        <a href="http://emisija.lt" target="_blank">
                            <img class="img-fluid"
                                 src="images/emisija.jpg"
                                 alt="">
                        </a>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card">
                        <a href="https://www.neoreklama.lt/" target="_blank">
                            <img class="img-fluid"
                                 src="images/neoreklama.png"
                                 alt="">
                        </a>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card">
                        <a href="#">
                            <img class="img-fluid"
                                 src="images/baltictransline.jpg"
                                 alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <a href="#">
                            <img class="img-fluid"
                                 src="images/delta.jpg"
                                 alt="">
                        </a>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card">
                        <a href="http://emisija.lt" target="_blank">
                            <img class="img-fluid"
                                 src="images/galinta.jpg"
                                 alt="">
                        </a>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card">
                        <a href="https://jaseviciausbaldai.lt/" target="_blank">
                            <img class="img-fluid"
                                 src="images/jaseviciaus.jpg"
                                 alt="">
                        </a>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card">
                        <a href="https://kata.lt/" target="_blank">
                            <img class="img-fluid"
                                 src="images/kata.png"
                                 alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <a href="#">
                            <img class="img-fluid"
                                 src="images/kg-group.png"
                                 alt="">
                        </a>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card">
                        <a href="http://emisija.lt" target="_blank">
                            <img class="img-fluid"
                                 src="images/neoreklama.png"
                                 alt="">
                        </a>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card">
                        <a href="#">
                            <img class="img-fluid"
                                 src="images/piccoli.jpg"
                                 alt="">
                        </a>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card">
                        <a href="#">
                            <img class="img-fluid"
                                 src="images/adminbiuras.jpg"
                                 alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <a href="http://www.sodobaldai.lt/" target="_blank">
                            <img class="img-fluid"
                                 src="images/sodobaldai.jpg"
                                 alt="">
                        </a>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card">
                        <a href="#">
                            <img class="img-fluid"
                                 src="images/talda.jpg"
                                 alt="">
                        </a>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card">
                        <a href="#">
                            <img class="img-fluid"
                                 src="images/samsonas.jpg"
                                 alt="">
                        </a>
                    </div>
                </div>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>





<?php

include "inc/footer.php";
include "inc/js_file.php";
?>