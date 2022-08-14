<?php
include_once 'db/db.php';

if (!isset($_SESSION)) {
    session_start();
}
if ($_SESSION['username'] == "") {
    header('location:signin.php');
} else {
    include_once 'concern-detail.php';
}

if (empty($_GET['id'])) {
    header('location:my_concern.php');
}

if (isset($_SESSION['user_id'])) {

    if (isset($_POST['submit'])) {
        $con = mysqli_connect("localhost", "root", "", "library");

        $student_id = $_SESSION['user_id'];
        $comment = $_POST['comment-input'];
        $comment_id = $_GET['id'];

        $sqli = "INSERT INTO `concern_comment` (`id_concern`, `student_id`, `comment`) VALUES ('{$comment_id}','{$student_id}','{$comment}')";
        $result = mysqli_query($con, $sqli);
        if ($result) {
            header("Location: concern-detail.php?id=" . $_GET['id'] . "");
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
<header id="header-v1" class="navbar-wrapper">
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
                                        <a href="tel:+94 11 2741878"><i class="fa fa-phone"></i>+94112741878</a>
                                        <span>/</span>
                                        <a href="mailto:libraryc@kiu.ac.lk"><i class="fa fa-envelope"></i>libraryc@kiu.ac.lk</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="topbar-links">
                                        <a href="signin.php"><i class="fa fa-lock"></i>Login</a>
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
                                                        </div>
                                                    </li>
                                                    <a style="color: #1e1e1e" href="signin.php"><i
                                                                class="fa fa-lock"></i>Log Out</a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-collapse hidden-sm hidden-xs">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled"
                                       href="index.php">Home</a>
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
                                       href="library_document.php">Library Documents</a>
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
        <div class="banner-header">
            <br>
            <br>
            <br>
            <h2>My Concern</h2>
            <span class="underline center"></span>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="index-2.html">Home</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li>Post Detail</li>
            </ul>
        </div>
    </div>
</section>
<!-- End: Page Banner -->

<!-- Start: Blog Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="blog-detail-main">
                <div class="container">
                    <div class="row">
                        <div class="blog-page">
                            <div class="blog-section">
                                <article>
                                    <div class="blog-detail">
                                        <?php

                                        $select = $pdo->prepare("SELECT * FROM `concern` where id = " . $_GET['id']);

                                        $select->execute();
                                        while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
                                            extract($row)
                                            ?>
                                            <header class="entry-header">

                                                <h2 class="entry-title">Concern
                                                    ID: <?php echo $row['concern_id']; ?></h2>

                                                <div class="entry-meta">
                                                    <span><i class="fa fa-user"></i> <a href="#">Admin</a></span>
                                                </div>
                                            </header>
                                            <div class="post-thumbnail">
                                                <div class="post-date-box">
                                                    <div class="post-date">
                                                        <a class="date"><?php echo substr($row['date'], 8, 2); ?></a>
                                                    </div>
                                                    <div class="post-date-month">
                                                        <a class="month"><?php echo substr($row['date'], 5, 2); ?></a>
                                                    </div>
                                                </div>
                                                <figure>
                                                    <img style="width: 1170px; height: 500px" alt="blog"
                                                         src="images/concern/img_1.png"/>
                                                </figure>
                                            </div>
                                            <div class="post-detail">
                                                <div class="post-detail-head">
                                                    <div class="post-share">
                                                        <a href="#."><i class="fa fa-comment"></i> 37 Comments</a>
                                                        <a href="#."><i class="fa fa-thumbs-o-up"></i> 110 Likes</a>
                                                        <a href="#."><i class="fa fa-eye"></i> 180 Viewed</a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="entry-content">
                                                    <p><?php echo $row['concern']; ?></p>
                                                </div>

                                                <?php if ($row['file'] != "") {
                                                    echo '<form action="' . $row['file'] . '"> <div class="form-group">
                                                        <input style="background-color: #5bc0de" class="form-control" type="submit"
                                                               value="Download Concern Document">
                                                    </div> </form>';
                                                }; ?>
                                                <?php if ($row['head_approval'] != "") {
                                                    echo '<form action="' . $row['head_approval'] . '"> <div class="form-group">
                                                        <input style="background-color: #4cae4c" class="form-control"
                                                               type="submit"
                                                               value="Download Approval Document">
                                                    </div> </form>';
                                                }; ?>
                                                <?php if ($row['final_doc'] != "") {
                                                    echo '<form action="' . $row['final_doc'] . '"> <div class="form-group">
                                                        <input style="background-color: #9c2f00" class="form-control"
                                                               type="submit"
                                                               value="Download Final Document">
                                                    </div> </form>';
                                                }; ?>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </article>


                                <section class="social-network">
                                    <div class="container">
                                        <div class="center-content">
                                            <h2 class="section-title">Document Status</h2>
                                            <span class="underline center"></span>
                                        </div>
                                        <ul>
                                            <?php

                                            $select = $pdo->prepare("SELECT * FROM `concern` where id = " . $_GET['id']);

                                            $select->execute();
                                            while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
                                                extract($row)
                                                ?>
                                                <li>
                                                    <a class="facebook" target="_blank">
                                                    <span>
                                                        <i class="fa fa-check"><h6>Submitted</h6></i>
                                                    </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="twitter" target="_blank">
                                                    <span>
                                                        <?php if ($row['status'] == 1) {
                                                            echo '<i class="fa fa-spinner"><h6>Head Review</h6></i>';
                                                        } else if ($row['status'] >= 2) {
                                                            echo '<i class="fa fa-check"><h6>Head Review</h6></i>';
                                                        } else {
                                                            echo '<i class="fa fa-times"><h6>Head Review</h6></i>';
                                                        } ?>
                                                    </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="google" target="_blank">
                                                    <span>
                                                        <?php if ($row['status'] == 2) {
                                                            echo '<i class="fa fa-spinner"><h6>Accepted for Review</h6></i>';
                                                        } else if ($row['status'] >= 3) {
                                                            echo '<i class="fa fa-check"><h6>Accepted for Review</h6></i>';
                                                        } else {
                                                            echo '<i class="fa fa-times"><h6>Accepted for Review</h6></i>';
                                                        } ?>
                                                    </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="rss" target="_blank">
                                                    <span>
                                                        <?php if ($row['status'] == 3) {
                                                            echo '<i class="fa fa-spinner"><h6>Library Review</h6></i>';
                                                        } else if ($row['status'] >= 4) {
                                                            echo '<i class="fa fa-check"><h6>Submitted</h6></i>';
                                                        } else {
                                                            echo '<i class="fa fa-times"><h6>Submitted</h6></i>';
                                                        } ?>
                                                    </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="linkedin" target="_blank">
                                                    <span>
                                                        <?php if ($row['status'] == 4) {
                                                            echo '<i class="fa fa-spinner"><h6>Submitted</h6></i>';
                                                        } else if ($row['status'] >= 5) {
                                                            echo '<i class="fa fa-check"><h6>Submitted</h6></i>';
                                                        } else {
                                                            echo '<i class="fa fa-times"><h6>Submitted</h6></i>';
                                                        } ?>
                                                    </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="youtube" target="_blank">
                                                    <span>
                                                        <?php if ($row['status'] >= 5) {
                                                            echo '<i class="fa fa-check"><h6>All Done</h6></i>';
                                                        } else {
                                                            echo '<i class="fa fa-times"><h6>All Done</h6></i>';
                                                        } ?>
                                                    </span>
                                                    </a>
                                                </li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </section>

                                <div class="comments-area" id="comments">
                                    <div class="comment-bg">
                                        <h4 class="comments-title">Comments</h4>
                                        <span class="underline left"></span>
                                        <ol class="comment-list">
                                            <li class="comment even thread-even depth-1 parent">

                                                <?php

                                                $select = $pdo->prepare("SELECT * FROM `concern_comment` where id_concern = " . $_GET['id']);

                                                $select->execute();
                                                while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
                                                    extract($row)
                                                    ?>

                                                    <div class="comment-body">
                                                        <div class="comment-author vcard">
                                                            <img class="avatar avatar-32 photo avatar-default"
                                                                 src="images/blog/emma.jpg" alt="Comment Author">
                                                            <b class="fn">
                                                                <a class="url" rel="external nofollow"
                                                                   href="#"><?php echo $row['student_id']; ?></a>
                                                            </b>
                                                        </div>
                                                        <footer class="comment-meta">
                                                            <div class="comment-metadata">
                                                                <a href="#">
                                                                    <time datetime="2016-01-17">
                                                                        <?php echo $row['date_time']; ?>
                                                                    </time>
                                                                </a>
                                                            </div>
                                                            <div class="comment-content">
                                                                <p><?php echo $row['comment']; ?>
                                                                </p>
                                                            </div>
                                                        </footer>
                                                    </div>

                                                    <?php
                                                }
                                                ?>
                                                <!--                                                <div class="comment-body">-->
                                                <!--                                                    <div class="comment-author vcard">-->
                                                <!--                                                        <img class="avatar avatar-32 photo avatar-default"-->
                                                <!--                                                             src="images/blog/mathew.jpg" alt="Comment Author">-->
                                                <!--                                                        <b class="fn">-->
                                                <!--                                                            <a class="url" rel="external nofollow" href="#">Mathew</a>-->
                                                <!--                                                        </b>-->
                                                <!--                                                    </div>-->
                                                <!--                                                    <footer class="comment-meta">-->
                                                <!--                                                        <div class="comment-metadata">-->
                                                <!--                                                            <a href="#">-->
                                                <!--                                                                <time datetime="2016-01-17">-->
                                                <!--                                                                    <b>Mar 17, 2016 / </b> 45 Minutes Ago-->
                                                <!--                                                                </time>-->
                                                <!--                                                            </a>-->
                                                <!--                                                        </div>-->
                                                <!--                                                        <div class="comment-content">-->
                                                <!--                                                            <p>Lorem Ipsum is simply dummy text of the printing and-->
                                                <!--                                                                typesetting industry. Lorem Ipsum has been the-->
                                                <!--                                                                industry's standard dummy text ever since the 1500s,-->
                                                <!--                                                                when an unknown printer took a galley.-->
                                                <!--                                                            </p>-->
                                                <!--                                                        </div>-->
                                                <!--                                                    </footer>-->
                                                <!--                                                </div>-->
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="comment-respond" id="respond">
                                        <h4 class="comment-reply-title" id="reply-title">Write your comment:</h4>
                                        <span class="underline left"></span>
                                        <form class="comment-form" id="commentform" method="post"
                                              action="">
                                            <div class="row">
                                                <p class="comment-form-author input-required">
                                                    <input value="Name : <?php echo $_SESSION['fullname']; ?>"
                                                           name="author" id="author" type="text" readonly>
                                                </p>
                                                <p class="comment-form-comment">
                                                    <textarea name="comment-input" id="comment"
                                                              placeholder="Enter Your Comment"></textarea>
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
                                <li><a href="books-media-gird-view-v2.php?type=all&page=1">KIU E-Resources</a></li>
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
                        <li><a href="books-media-gird-view-v2.php?type=all&page=1">KIU E-Resources</a></li>
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

</body>


</html>