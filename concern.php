<?php
include_once 'db/db.php';

if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['fullname']) and !isset($_SESSION['username'])) {
    header('location:signin.php');
} else {
    include_once 'concern.php';
}

$con = mysqli_connect("localhost", "root", "", "library");

if (isset($_SESSION['user_id'])) {

    if (isset($_POST['submit'])) {

        $student_id = $_SESSION['user_id'];

        $concern_id = '';
        $old_id = 0;
        $status = 1;

        $select = $pdo->prepare("SELECT * FROM `concern` order by `id` desc limit 1");
        $select->execute();
        while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
            $old_id = $row['id'];
        }

        $old_id = $old_id + 1;

        $concern_id = 'KIU_LibraryCommittee_22_'.$old_id;

        $target_dir = "images/concern_doc/";
        $target_dir_head = "images/head_approval/";
        $target_file = $target_dir . date("dmYhis") . basename($_FILES["file"]["name"]);
        $target_file_head = $target_dir_head . date("dmYhis") . basename($_FILES["head"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

        if (true) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                $files = date("dmYhis") . basename($_FILES["file"]["name"]);
            } else {
                exit;
            }
            if (move_uploaded_file($_FILES["head"]["tmp_name"], $target_file_head)) {
                $head_files = date("dmYhis") . basename($_FILES["head"]["name"]);
            } else {
                exit;
            }
        } else {
            exit;
        }
        $location = "images/concern_doc/" . $files;
        $head_location = "images/head_approval/" . $head_files;
        $sqli = "INSERT INTO `concern` (`student_id`, `concern`, `concern_id`, `status`, `file`, `head_approval`) VALUES ('{$student_id}','{$_POST['comment-input']}','{$concern_id}','{$status}','{$location}','{$head_location}')";
        $result = mysqli_query($con, $sqli);
        if ($result) {
            header("Location: my_concern.php");
        };
    }


}


?>

<!DOCTYPE html>
<html lang="zxx">


<head>

    <!-- Meta -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

    <!-- Title -->
    <title>KIU LIBRARY</title>

    <!-- Favicon -->
    <link href="images/favicon.ico" rel="icon" type="image/x-icon"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i"
          rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <!-- Mobile Menu -->
    <link href="css/mmenu.css" rel="stylesheet" type="text/css"/>
    <link href="css/mmenu.positioning.css" rel="stylesheet" type="text/css"/>

    <!-- Stylesheet -->
    <link href="style.css" rel="stylesheet" type="text/css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Start: Header Section -->
<header id="header-v1" class="navbar-wrapper inner-navbar-wrapper">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default">
                <div class="row">
                    <div class="col-md-3">
                        <div class="navbar-header">
                            <div class="navbar-brand">
                                <h1>
                                    <a href="index.php">
                                        <img src="images/KIU-Logo.png" alt="LIBRARIA"/>
                                    </a>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <!-- Header Topbar -->
                        <div class="header-topbar hidden-sm hidden-xs">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="topbar-info">
                                        <a href="tel:+94 11 2741878"><i class="fa fa-phone"></i>+94 11 2741878</a>
                                        <span>/</span>
                                        <a href="mailto:support@libraria.com"><i class="fa fa-envelope"></i>support@libraria.com</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="topbar-links">
                                        <a href="signin.html"><i class="fa fa-lock"></i>Login</a>
                                        <span>|</span>
                                        <div class="header-cart dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                <i class="fa fa-shopping-cart"></i>
                                                <small>0</small>
                                            </a>
                                            <div class="dropdown-menu cart-dropdown">
                                                <ul>
                                                    <li class="clearfix">
                                                        <img src="images/header-cart-image-01.jpg" alt="cart item"/>
                                                        <div class="item-info">
                                                            <div class="name">
                                                                <a href="#">The Great Gatsby</a>
                                                            </div>
                                                            <div class="author"><strong>Author:</strong> F. Scott
                                                                Fitzgerald
                                                            </div>
                                                            <div class="price">1 X $10.00</div>
                                                        </div>
                                                        <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                    </li>
                                                    <li class="clearfix">
                                                        <img src="images/header-cart-image-02.jpg" alt="cart item"/>
                                                        <div class="item-info">
                                                            <div class="name">
                                                                <a href="#">The Great Gatsby</a>
                                                            </div>
                                                            <div class="author"><strong>Author:</strong> F. Scott
                                                                Fitzgerald
                                                            </div>
                                                            <div class="price">1 X $10.00</div>
                                                        </div>
                                                        <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                    </li>
                                                    <li class="clearfix">
                                                        <img src="images/header-cart-image-03.jpg" alt="cart item"/>
                                                        <div class="item-info">
                                                            <div class="name">
                                                                <a href="#">The Great Gatsby</a>
                                                            </div>
                                                            <div class="author"><strong>Author:</strong> F. Scott
                                                                Fitzgerald
                                                            </div>
                                                            <div class="price">1 X $10.00</div>
                                                        </div>
                                                        <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="cart-total">
                                                    <div class="title">SubTotal</div>
                                                    <div class="price">$30.00</div>
                                                </div>
                                                <div class="cart-buttons">
                                                    <a href="cart.html" class="btn btn-dark-gray">View Cart</a>
                                                    <a href="checkout.html" class="btn btn-primary">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-collapse hidden-sm hidden-xs">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled" href="index.php">Home</a>
                                </li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled" href="databases.php">Databases</a>
                                </li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled"
                                       href="books-media-gird-view-v2.php?type=all&page=1">E Resources</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="books-media-gird-view-v2.php?type=BMS&page=1">BMS</a></li>
                                        <li><a href="books-media-gird-view-v2.php?type=Nursing&page=1">Nursing</a></li>
                                        <li>
                                            <a href="books-media-gird-view-v2.php?type=Acupuncture&page=1">Acupuncture</a>
                                        </li>

                                        <li><a href="books-media-gird-view-v2.php?type=Management&page=1">Management</a>
                                        </li>

                                        <li><a href="books-media-gird-view-v2.php?type=IT&page=1">IT</a></li>
                                        <li><a href="books-media-gird-view-v2.php?type=Psychology&page=1">Psychology</a>
                                        </li>
                                    </ul>
                                </li>


                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled"
                                       href="library_document.php">Library
                                        Documents</a>
                                </li>
                                <li class="active">
                                    <a href="my_concern.php">Concern</a>
                                </li>
                                <li><a href="services.php">Services</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu hidden-lg hidden-md">
                    <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                    <div id="mobile-menu">
                        <ul>
                            <li class="mobile-title">
                                <h4>Navigation</h4>
                                <a href="#" class="close"></a>
                            </li>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="databases.php">Databases</a>
                            </li>
                            <li>
                                <a href="books-media-gird-view-v2.php?type=all&page=1">E Resources</a>
                                <ul>
                                    <li><a href="books-media-gird-view-v2.php?type=BMS&page=1">BMS</a></li>
                                    <li><a href="books-media-gird-view-v2.php?type=Nursing&page=1">Nursing</a></li>
                                    <li>
                                        <a href="books-media-gird-view-v2.php?type=Acupuncture&page=1">Acupuncture</a>
                                    </li>

                                    <li><a href="books-media-gird-view-v2.php?type=Management&page=1">Management</a>
                                    </li>

                                    <li><a href="books-media-gird-view-v2.php?type=IT&page=1">IT</a></li>
                                    <li><a href="books-media-gird-view-v2.php?type=Psychology&page=1">Psychology</a>
                                </ul>
                            </li>
                            <li>
                                <a href="library_document.php">Library Documents</a>
                            </li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- End: Header Section -->

<!-- Start: Page Banner -->
<section class="page-banner services-banner">
    <div class="container">
        <br>
        <br>
        <br>
        <div class="banner-header">
            <h2>Post your Concern Here</h2>
            <span class="underline center"></span>
            <p class="lead">We are happy to here your concerns.</p>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="index-2.php">Home</a></li>
                <li>Concern</li>
            </ul>
        </div>
    </div>
</section>
<!-- End: Page Banner -->c

<!-- Start: Blog Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="blog-detail-main">
                <div class="container">
                    <div class="row">
                        <div class="blog-page">
                            <div class="blog-section">

                                <div class="comments-area" id="comments">

                                    <div class="comment-respond" id="respond">
                                        <h4 class="comment-reply-title" id="reply-title">Tell us your concern:</h4>
                                        <span class="underline left"></span>
                                        <form class="comment-form" id="commentform" method="post"
                                              action=""
                                              enctype="multipart/form-data">
                                            <div class="row">
                                                <p class="comment-form-author input-required">
                                                    <input value="Name : <?php echo $_SESSION['fullname']; ?>"
                                                           name="author" id="author" type="text" readonly>
                                                </p>
                                                <p class="comment-form-comment">
                                                    <textarea required name="comment-input" id="comment"
                                                              placeholder="Enter Your Concern"></textarea>
                                                </p>
                                                <p class="comment-form-comment">
                                                    <label>File:</label>
                                                    <input required type="file" name="file"> <br/>
                                                </p>
                                                <p class="comment-form-comment">
                                                    <label>Head Approval:</label>
                                                    <input required type="file" name="head"> <br/>
                                                </p>
                                            </div>
                                            <div class="clearfix"></div>
                                            <p class="form-submit">
                                                <input value="Submit" class="submit" id="submit" name="submit"
                                                       type="submit">
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<!-- End: Blog Section -->


<!-- Start: Footer -->
<footer class="site-footer">
    <div class="container">
        <div id="footer-widgets">
            <div class="row">
                <div class="col-md-5 col-sm-6 widget-container">
                    <div id="text-2" class="widget widget_text">
                        <h3 class="footer-widget-title">About Library</h3>
                        <span class="underline left"></span>
                        <div class="textwidget">
                            KIU Library plays a critical role in supporting the
                            institute's academic programs in all possible
                            aspects.
                        </div>
                        <address>
                            <div class="info">
                                <i class="fa fa-location-arrow"></i>
                                <span>249/1, Malabe Road,Thalangama North,Koswatta, Battaramulla,Colombo</span>
                            </div>
                            <div class="info">
                                <i class="fa fa-envelope"></i>
                                <span><a href="mailto:libraryc@kiu.ac.lk">libraryc@kiu.ac.lk</a></span>
                            </div>
                            <div class="info">
                                <i class="fa fa-phone"></i>
                                <span><a href="tel:9411 2741878">+9411 2741878</a></span>
                            </div>
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 widget-container">
                    <div id="nav_menu-2" class="widget widget_nav_menu">
                        <h3 class="footer-widget-title">Quick Links</h3>
                        <span class="underline left"></span>
                        <div class="menu-quick-links-container">
                            <ul id="menu-quick-links" class="menu">
                                <li><a href="books-media-gird-view-v2.php">KIU E-Resources</a></li>
                                <li><a href="#">Databases</a></li>
                                <li><a href="#">Library Documents</a></li>
                                <li><a href="#">Library Concerns</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix hidden-lg hidden-md hidden-xs tablet-margin-bottom"></div>
                <div class="col-md-2 col-sm-6 widget-container">
                    <div id="text-4" class="widget widget_text">
                        <h3 class="footer-widget-title">Timing</h3>
                        <span class="underline left"></span>
                        <div class="timming-text-widget">
                            <time datetime="2017-02-13">Mon - Fri : 8 am - 5 pm</time>
                            <time datetime="2017-02-13">Sat : 8 am - 1 pm</time>
                            <time datetime="2017-02-13">Sun & Poya : Closed</time>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="footer-text col-md-3">

                </div>
                <div class="col-md-9 pull-right">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="books-media-gird-view-v2.php">KIU E-Resources</a></li>
                        <li><a href="#">Databases</a></li>
                        <li><a href="#">Library Documents</a></li>
                        <li><a href="#">Library Concerns</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End: Footer -->

<!-- jQuery Latest Version 1.x -->
<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>

<!-- jQuery UI -->
<script type="text/javascript" src="js/jquery-ui.min.js"></script>

<!-- jQuery Easing -->
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- Mobile Menu -->
<script type="text/javascript" src="js/mmenu.min.js"></script>

<!-- Harvey - State manager for media queries -->
<script type="text/javascript" src="js/harvey.min.js"></script>

<!-- Waypoints - Load Elements on View -->
<script type="text/javascript" src="js/waypoints.min.js"></script>

<!-- Facts Counter -->
<script type="text/javascript" src="js/facts.counter.min.js"></script>

<!-- MixItUp - Category Filter -->
<script type="text/javascript" src="js/mixitup.min.js"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="js/owl.carousel.min.js"></script>

<!-- Accordion -->
<script type="text/javascript" src="js/accordion.min.js"></script>

<!-- Responsive Tabs -->
<script type="text/javascript" src="js/responsive.tabs.min.js"></script>

<!-- Responsive Table -->
<script type="text/javascript" src="js/responsive.table.min.js"></script>

<!-- Masonry -->
<script type="text/javascript" src="js/masonry.min.js"></script>

<!-- Carousel Swipe -->
<script type="text/javascript" src="js/carousel.swipe.min.js"></script>

<!-- bxSlider -->
<script type="text/javascript" src="js/bxslider.min.js"></script>

<!-- Custom Scripts -->
<script type="text/javascript" src="js/main.js"></script>

<script type="text/javascript" src="js/popup.js"></script>

</body>


</html>