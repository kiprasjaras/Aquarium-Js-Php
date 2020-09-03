<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-black py-3">
    <div class="container">
        <a class="navbar-brand" href="index.php">Aquarium</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-light" href="services.php">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-light" href="reviews.php">Reviews</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-primary" href="https://www.facebook.com/Kofeeinas?ref=bookmarks" target="_blank">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>

                <?php
                if (isset($_SESSION['user'])){
                        $con = array('id' => $_SESSION['user']);
                        $val = $fun->one_value("users", $con);

                    ?>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="index.php"> <?php echo $val['name']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="logout.php"> Logout</a>
                    </li>

                    <?php
                } else {
                    ?>

                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Login
                            </button>

                            <form class="dropdown-menu dropdown-menu-right p-4" action="" method="post">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email"
                                           placeholder="email@example.com" name="email" required>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                           placeholder="Password" required>
                                </div>

                                <div class="form-group">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="rememberMe" required>
                                        <label class="form-check-label" for="rememberMe">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" name="login">Sign in</button>

                                <a class="link fr new_account" href="registration.php" title="Don't have an account?">Don't
                                    have an account?</a>
                            </form>
                        </div>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
