<?php
if(!isset($_SESSION['admin'])){
    header("Location:index.php");
    exit();
}
$data=array(
    'id'=> $_SESSION['admin']
);
$value=$fun->one_value("admin",$data);
?>

<nav class="navbar navbar-expand-lg main-navbar">
    <a class="header-brand" href="index.php">
        <h3 class="text-white m-0">Admin Panel</h3>
        <!-- 						<img src="assets/img/brand" class="header-brand-img" alt="admin">
         -->					</a>
    <form class="form-inline mr-auto">
        <ul class="navbar-nav">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fa fa-navicon"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none navsearch"><i class="ion ion-search"></i></a></li>
        </ul>
        <div class=" form-inline mr-auto horizontal" id="headerMenuCollapse">
            <div class="d-none d-lg-block">
                <ul class="nav">


                </ul>
            </div>
        </div>
    </form>
    <ul class="navbar-nav navbar-right">



        <li class="dropdown dropdown-list-toggle">
            <a href="#" class="nav-link nav-link-lg full-screen-link">
                <i class="fa fa-expand"  id="fullscreen-button"></i>
            </a>
        </li>
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
                <i class="fa fa-user"></i>
                <div class="d-sm-none d-lg-inline-block"><?php echo $value['name']; ?></div></a>

            <div class="dropdown-menu dropdown-menu-right">

                <a href="update_profile.php" class="dropdown-item has-icon">
                    <i class="ion ion-gear-a"></i> Settings
                </a>
                <a href="logout.php" class="dropdown-item has-icon">
                    <i class="ion-ios-redo"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>

<aside class="app-sidebar">

    <ul class="side-menu">

        <li>
            <a class="side-menu__item" href="dashboard.php"><i class="side-menu__icon fa fa-desktop"></i><span class="side-menu__label">Dashboard</span></a>
        </li>

        <li>
            <a class="side-menu__item" href="slider.php"><i class="side-menu__icon fe fe-cpu"></i><span class="side-menu__label">Slider</span></a>
        </li>

        <li>
            <a class="side-menu__item" href="view_user.php"><i class="side-menu__icon fa fa-user"></i><span class="side-menu__label">View User</span></a>
        </li>
        <li>
            <a class="side-menu__item" href="view_request.php"><i class="side-menu__icon fa fa-user"></i><span class="side-menu__label">Request Message</span></a>
        </li>

    </ul>
</aside>