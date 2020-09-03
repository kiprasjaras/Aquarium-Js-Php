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
?>
<!doctype html>
<html lang="en">
<head>
    <title>Services</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
          integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/form.css">

</head><link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/covers.css">

</head>
<body>

<!-- Navbar -->
<?php

include "inc/header.php";

?>

<!-- Main Page Content -->
<main>
    <!-- Design and Planning -->
    <section id="design" class="py-5">
        <div class="container">
            <h1>Aquarium design and planning</h1>
            <p>
                In cooperation with designers and architects, we choose the best solution for the location and size of
                the
                aquarium. To create extraordinary beauty, even custom-sized aquariums can be selected. Whether it is an
                aquarium built into furniture or partition walls and spaces, there are many opportunities to reveal your
                individuality. Things like the thickness of the glass, the constructive position on which the aquarium
                will
                stand, and the installation of electricity and plumbing are all extremely important steps in planning a
                new
                aquarium. Well, illumination, of course, without which no aquarium will reveal its true beauty. Here we
                have
                several solutions - whether fluorescent, LED or metal halide lamps, depending on the customer's needs
                and
                the content of the aquarium, the best solution will be applied.
            </p>
        </div>
    </section>
    <section class="bg-dark py-3">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <h2>Domina mūsų paslaugos? Parašykite mums.</h2>
                </div>

                <div class="col-auto">
                    <a class="btn btn-lg btn-success" data-toggle="modal" data-target="#myModal">Siųsti užklausą</a>
                </div>
            </div>
        </div>
    </section>
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
    <!-- Installation Services -->
    <section id="installation" class="py-5">
        <div class="container">
            <h1>Aquarium installation services</h1>

            We provide aquarium installation services. After all the plans have been agreed, it is much easier to
            install or simply build a new aquarium. This is done at the time requested by the customer so that the
            process of installing the aquarium does not interfere with office or domestic work. Based on years of
            experience, we find that it is much more enjoyable for people to see the end result than to observe the
            progress of the work.
            <br><br>
            The complete installation of the aquarium and the creation of the interior decor is done on the same day.
            The fish arrive a little later, just after the biological balance of the water has stabilized. It takes a
            little longer for the plant aquariums to feed, but this process is taken care of daily by our professional
            team. And when the aquarium is fully prepared, we tell our customers what to do and how to keep it in top
            shape until we arrive at scheduled maintenance.
            <hr>
            Before purchasing an aquarium, a thorough consultation on its purpose is necessary. There are many nuances
            that
            must be taken into account, which will ultimately lead to its successful maintenance. Whether it is an
            aquarium
            in your home, office, or commercial space, the same question is everywhere - how long and how difficult will
            it
            be to maintain it? The environment of every place is immensely important - interior, light, room
            temperature,
            etc.
            <br><br>

            <h5>We distinguish three categories of freshwater aquariums.</h5>

            <article class="mt-5">
                <h2>Solid decor aquariums</h2>

                These aquariums are distinguished by their minimalist style. These types of aquariums require the least
                care
                and allow for the storage of larger fish, or ones that, for example, would simply eradicate all
                vegetation
                in live plant aquariums.

                <div class="row mt-3">
                    <div class="col-auto">
                        <img class="img-fluid rounded"
                             src="http://www.akvariumusodai.lt/wp-content/gallery/kieto-dekoro-akvariumai/dynamic/Kieto-dekoro-akvariumai_2_Akvariumusodai.lt_.jpg-nggid011-ngg0dyn-200x200x100-00f0w010c011r110f110r010t010.jpg"
                             alt="" data-toggle="modal" data-target="#solidModal" onclick="$('#carousel1').carousel(0)">
                    </div>

                    <div class="col-auto">
                        <img class="img-fluid rounded"
                             src="http://www.akvariumusodai.lt/wp-content/gallery/kieto-dekoro-akvariumai/dynamic/Kieto-dekoro-akvariumai_3_Akvariumusodai.lt_.jpg-nggid012-ngg0dyn-200x200x100-00f0w010c011r110f110r010t010.jpg"
                             alt="" data-toggle="modal" data-target="#solidModal" onclick="$('#carousel1').carousel(1)">
                    </div>

                    <div class="col-auto">
                        <img class="img-fluid rounded"
                             src="http://www.akvariumusodai.lt/wp-content/gallery/kieto-dekoro-akvariumai/dynamic/Kieto-dekoro-akvariumai_4_Akvariumusodai.lt_.jpg-nggid013-ngg0dyn-200x200x100-00f0w010c011r110f110r010t010.jpg"
                             alt="" data-toggle="modal" data-target="#solidModal" onclick="$('#carousel1').carousel(2)">
                    </div>
                </div>

                <div id="solidModal" class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div id="carousel1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel1" data-slide-to="0"
                                            class="active"></li>
                                        <li data-target="#carousel1" data-slide-to="1"></li>
                                        <li data-target="#carousel1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="http://www.akvariumusodai.lt/wp-content/gallery/kieto-dekoro-akvariumai/Kieto-dekoro-akvariumai_2_Akvariumusodai.lt_.jpg"
                                                 class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="http://www.akvariumusodai.lt/wp-content/gallery/kieto-dekoro-akvariumai/Kieto-dekoro-akvariumai_3_Akvariumusodai.lt_.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="http://www.akvariumusodai.lt/wp-content/gallery/kieto-dekoro-akvariumai/Kieto-dekoro-akvariumai_4_Akvariumusodai.lt_.jpg" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carousel1" role="button"
                                       data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel1" role="button"
                                       data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <hr class="stroke">

            <article class="mt-5">
                <h2>Decorative aquariums</h2>

                It is a combination of cool décor and artificial plant aquariums. You can give fishy more contrast with
                more colorful plants that fit both the environment and the aquarium design.

                <div class="row mt-3">
                    <div class="col-auto">
                        <img class="img-fluid rounded"
                             src="http://www.akvariumusodai.lt/wp-content/gallery/dekoratyviniai-akvariumai/dynamic/Dekoratyviniai-akvariumai_1_Akvariumusodai.lt_.jpg-nggid017-ngg0dyn-200x200x100-00f0w010c011r110f110r010t010.jpg"
                             alt="" data-toggle="modal" data-target="#decorModal" onclick="$('#carousel2').carousel(0)">
                    </div>

                    <div class="col-auto">
                        <img class="img-fluid rounded"
                             src="http://www.akvariumusodai.lt/wp-content/gallery/dekoratyviniai-akvariumai/dynamic/Dekoratyviniai-akvariumai_2_Akvariumusodai.lt_.jpg-nggid018-ngg0dyn-200x200x100-00f0w010c011r110f110r010t010.jpg"
                             alt="" data-toggle="modal" data-target="#decorModal" onclick="$('#carousel2').carousel(1)">
                    </div>

                    <div class="col-auto">
                        <img class="img-fluid rounded"
                             src="http://www.akvariumusodai.lt/wp-content/gallery/dekoratyviniai-akvariumai/dynamic/Dekoratyviniai-akvariumai_3_Akvariumusodai.lt_.jpg-nggid019-ngg0dyn-200x200x100-00f0w010c011r110f110r010t010.jpg"
                             alt="" data-toggle="modal" data-target="#decorModal" onclick="$('#carousel2').carousel(2)">
                    </div>
                </div>

                <div id="decorModal" class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div id="carousel2" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel2" data-slide-to="0"
                                            class="active"></li>
                                        <li data-target="#carousel2" data-slide-to="1"></li>
                                        <li data-target="#carousel2" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="http://www.akvariumusodai.lt/wp-content/gallery/dekoratyviniai-akvariumai/Dekoratyviniai-akvariumai_1_Akvariumusodai.lt_.jpg"
                                                 class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="http://www.akvariumusodai.lt/wp-content/gallery/dekoratyviniai-akvariumai/Dekoratyviniai-akvariumai_2_Akvariumusodai.lt_.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="http://www.akvariumusodai.lt/wp-content/gallery/dekoratyviniai-akvariumai/Dekoratyviniai-akvariumai_3_Akvariumusodai.lt_.jpg" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carousel2" role="button"
                                       data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel2" role="button"
                                       data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <hr class="stroke">

            <article class="mt-5">
                <h2>Aquariums for live plants</h2>

                When setting up such an aquarium, the basis here is not fish, but plants. That doesn't mean just
                planting a
                few plants and that's it. There is a tremendous art in being able to create the right environment for
                fish,
                and their home becomes a living image of water. Let's not pretend that these aquariums are some of the
                most
                luxurious and customer-friendly. A part of absolute individuality that will catch everyone's eye. But
                without constant professional supervision, these would simply vanish.

                <div class="row mt-3">
                    <div class="col-auto">
                        <img class="img-fluid rounded"
                             src="http://www.akvariumusodai.lt/wp-content/gallery/gyvu-augalu-akvariumai/dynamic/Augaliniai-akvariumai_2_Akvariumusodai.lt_.jpg-nggid0218-ngg0dyn-200x200x100-00f0w010c011r110f110r010t010.jpg"
                             alt="" data-toggle="modal" data-target="#plantsModal" onclick="$('#carousel3').carousel(0)">
                    </div>

                    <div class="col-auto">
                        <img class="img-fluid rounded"
                             src="http://www.akvariumusodai.lt/wp-content/gallery/gyvu-augalu-akvariumai/dynamic/Augaliniai-akvariumai_3_Akvariumusodai.lt_.jpg-nggid0219-ngg0dyn-200x200x100-00f0w010c011r110f110r010t010.jpg"
                             alt="" data-toggle="modal" data-target="#plantsModal" onclick="$('#carousel3').carousel(1)">
                    </div>

                    <div class="col-auto">
                        <img class="img-fluid rounded"
                             src="http://www.akvariumusodai.lt/wp-content/gallery/gyvu-augalu-akvariumai/dynamic/Augaliniai-akvariumai_4_Akvariumusodai.lt_.jpg-nggid0220-ngg0dyn-200x200x100-00f0w010c011r110f110r010t010.jpg"
                             alt="" data-toggle="modal" data-target="#plantsModal" onclick="$('#carousel3').carousel(2)">
                    </div>
                </div>

                <div id="plantsModal" class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div id="carousel3" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel3" data-slide-to="0"
                                            class="active"></li>
                                        <li data-target="#carousel3" data-slide-to="1"></li>
                                        <li data-target="#carousel3" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="http://www.akvariumusodai.lt/wp-content/gallery/gyvu-augalu-akvariumai/Augaliniai-akvariumai_2_Akvariumusodai.lt_.jpg"
                                                 class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="http://www.akvariumusodai.lt/wp-content/gallery/gyvu-augalu-akvariumai/Augaliniai-akvariumai_3_Akvariumusodai.lt_.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="http://www.akvariumusodai.lt/wp-content/gallery/gyvu-augalu-akvariumai/Augaliniai-akvariumai_4_Akvariumusodai.lt_.jpg" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carousel3" role="button"
                                       data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel3" role="button"
                                       data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <section class="bg-dark py-3">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <h2>Domina mūsų paslaugos? Parašykite mums.</h2>
                </div>

                <div class="col-auto">
                    <a class="btn btn-lg btn-success" href="#" role="button">Siųsti užklausą</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Maintenance Services -->
    <section id="maintenance" class="py-5">
        <div class="container">
            <h1>Aquarium maintenance services</h1>

            In order to ensure that the aquarium does not cause major problems for our clients, we will take care of its
            constant maintenance. There is nothing worse when creating such beauty is simply neglected due to lack of
            time
            or inconsistent care. We take care of this process. Different aquariums require different care or frequency
            to
            do so. We will keep a record of care times in our database, and as we approach, we will arrange an arrival
            date
            with you.
            <br><br>
            Customers who promise to take care of their own aquarium will be provided with in-depth consultation and
            advice
            to make it as easy as possible and provided with the equipment they need.
            <br><br>
            We can also upgrade your old aquarium with the help of our many years of experience and your individual
            needs.
            <br><br>
            And the service of changing the whole decor of the aquarium several times a year is already very popular
            among
            our existing clients.
        </div>
    </section>
</main>

<footer class="container py-5">
    <div class="row justify-content-between">
        <div class="col-auto">
            <a class="text-secondary" href="index.php">AkvariumuSodai.LT</a> | Visos teisės saugomos.
        </div>

        <div class="col-auto">
            <a class="text-light px-2" href="services.php">Services</a>
            /
            <a class="text-light px-2" href="reviews.php">Reviews</a>
            /
            <a class="px-2" href="https://www.facebook.com/Kofeeinas?ref=bookmarks" target="_blank"><i class="fab fa-facebook"></i></a>
        </div>
    </div>
</footer>

<?php
include "inc/js_file.php";
?>
</body>
</html>