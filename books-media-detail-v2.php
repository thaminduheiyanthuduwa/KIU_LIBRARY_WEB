<?php
include_once 'db/db.php';

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if ($_SESSION['username'] == "") {
    header('location:signin.php');
} else {
    include_once 'books-media-list-view.php';
}

if (empty($_GET['type'])) {
    $_GET['type'] = 'all';
}
if (empty($_GET['page'])) {
    $_GET['page'] = '1';
}
if (empty($_GET['search'])) {
    $_GET['search'] = '';
}
if (empty($_GET['category']) || $_GET['category'] == 'All') {
    $_GET['category'] = '';
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

    <!-- Responsive Table -->
    <link rel="stylesheet" type="text/css" href="css/responsivetable.css"/>

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
                                <li class="dropdown active">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled"
                                       href="index.php">Home</a>
                                </li>
                                <li>
                                    <a href="databases.php">Databases</a>
                                </li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled"
                                       href="books-media-list-view.php?type=all&page=1">E Resources</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="books-media-gird-view-v2.html">BMS</a></li>
                                        <li><a href="books-media-gird-view-v2.html">Nursing</a></li>
                                        <li><a href="books-media-gird-view-v2.html">Acupuncture</a></li>
                                        <li><a href="books-media-gird-view-v2.html">Human Resource</a></li>
                                        <li><a href="books-media-gird-view-v2.html">Marketing</a></li>
                                        <li><a href="books-media-gird-view-v2.html">Accounting</a></li>
                                        <li><a href="books-media-gird-view-v2.html">IT</a></li>
                                        <li><a href="books-media-gird-view-v2.html">Psychology</a></li>
                                    </ul>
                                </li>


                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled" href="library_document.php">Library
                                        Documents</a>
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
                                <ul>
                                    <li><a href="index.php">Home V1</a></li>
                                    <li><a href="home-v2.html">Home V2</a></li>
                                    <li><a href="home-v3.html">Home V3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="books-media-list-view.php?type=all&page=1">Books &amp; Media</a>
                                <ul>
                                    <li><a href="books-media-list-view.html">Books &amp; Media List View</a></li>
                                    <li><a href="books-media-gird-view-v1.html">Books &amp; Media Grid View V1</a></li>
                                    <li><a href="books-media-gird-view-v2.html">Books &amp; Media Grid View V2</a></li>
                                    <li><a href="books-media-detail-v1.html">Books &amp; Media Detail V1</a></li>
                                    <li><a href="books-media-detail-v2.html">Books &amp; Media Detail V2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="news-events-list-view.html">News &amp; Events</a>
                                <ul>
                                    <li><a href="news-events-list-view.html">News &amp; Events List View</a></li>
                                    <li><a href="news-events-detail.html">News &amp; Events Detail</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <ul>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="signin.html">Signin/Register</a></li>
                                    <li><a href="404.html">404/Error</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog.html">Blog</a>
                                <ul>
                                    <li><a href="blog.html">Blog Grid View</a></li>
                                    <li><a href="blog-detail.html">Blog Detail</a></li>
                                </ul>
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
            <h2>Books & Media Listing</h2>
            <span class="underline center"></span>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Books & Media</li>
            </ul>
        </div>
    </div>
</section>
<!-- End: Page Banner -->

<!-- Start: Products Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="booksmedia-detail-main">
                <div class="container">
                    <div class="row">
                        <!-- Start: Search Section -->
                        <section class="search-filters">
                            <div class="container">
                                <div class="filter-box">
                                    <h3>What are you looking for at the library?</h3>
                                    <form action="books-media-gird-view-v2.php?type=all&page=1" method="get">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label class="sr-only" for="keywords">Search by Anything</label>
                                                <input class="form-control"
                                                       placeholder="<?php echo ($_GET['search'] == '') ? 'Search by Anything' : $_GET['search']; ?>"
                                                       id="search"
                                                       name="search"
                                                       type="text">
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6">
                                            <div class="form-group">
                                                <select name="category" id="category" class="form-control">
                                                    <option><?php echo ($_GET['category'] == '') ? 'All' : $_GET['category']; ?></option>
                                                    <option><?php echo ($_GET['category'] == 'Nursing') ? 'All' : 'Nursing'; ?></option>
                                                    <option><?php echo ($_GET['category'] == 'BMS') ? 'All' : 'BMS'; ?></option>
                                                    <option><?php echo ($_GET['category'] == 'Management') ? 'All' : 'Management'; ?></option>
                                                    <option><?php echo ($_GET['category'] == 'Acupuncture') ? 'All' : 'Acupuncture'; ?></option>
                                                    <option><?php echo ($_GET['category'] == 'IT') ? 'All' : 'IT'; ?></option>
                                                    <option><?php echo ($_GET['category'] == 'Psychology') ? 'All' : 'Psychology'; ?></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="submit" value="Search">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                        <!-- End: Search Section -->
                    </div>
                    <div class="booksmedia-detail-box">

                        <?php
                        $select = $pdo->prepare("SELECT * FROM `kiu_eresource` WHERE is_active = 1 and status = 'published' and id = " . $_GET['id'] . "  order by id DESC LIMIT 1");
                        $select->execute();
                        while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
                            extract($row)
                            ?>

                            <div class="detailed-box">
                                <div class="col-xs-12 col-sm-5 col-md-3">
                                    <div class="post-thumbnail">
                                        <div class="book-list-icon yellow-icon"></div>
                                        <img style="height: 430px; width: 281px" src="images/upload_files/<?php echo $row['document_image']; ?>"
                                             alt="Book Image">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-7 col-md-6">
                                    <div style="width: 575px; height: 430px" class="post-center-content">
                                        <h2><?php echo $row['title']; ?></h2>
                                        <p><strong>Author:</strong> <?php echo $row['author']; ?></p>
                                        <p><strong>Department:</strong> <?php echo $row['department']; ?></p>
                                        <p><strong>Resource:</strong> <?php echo $row['resource']; ?></p>
                                        <p><strong>Type:</strong> <?php echo $row['type']; ?></p>
                                        <!--                                        <div class="actions">-->
                                        <!--                                            <ul>-->
                                        <!--                                                <li>-->
                                        <!--                                                    <a href="#" target="_blank" data-toggle="blog-tags"-->
                                        <!--                                                       data-placement="top" title="" data-original-title="Add To Cart">-->
                                        <!--                                                        <i class="fa fa-shopping-cart"></i>-->
                                        <!--                                                    </a>-->
                                        <!--                                                </li>-->
                                        <!--                                                <li>-->
                                        <!--                                                    <a href="#" target="_blank" data-toggle="blog-tags"-->
                                        <!--                                                       data-placement="top" title="" data-original-title="Like">-->
                                        <!--                                                        <i class="fa fa-heart"></i>-->
                                        <!--                                                    </a>-->
                                        <!--                                                </li>-->
                                        <!--                                                <li>-->
                                        <!--                                                    <a href="#" target="_blank" data-toggle="blog-tags"-->
                                        <!--                                                       data-placement="top" title="" data-original-title="Mail">-->
                                        <!--                                                        <i class="fa fa-envelope"></i>-->
                                        <!--                                                    </a>-->
                                        <!--                                                </li>-->
                                        <!--                                                <li>-->
                                        <!--                                                    <a href="#" target="_blank" data-toggle="blog-tags"-->
                                        <!--                                                       data-placement="top" title="" data-original-title="Search">-->
                                        <!--                                                        <i class="fa fa-search"></i>-->
                                        <!--                                                    </a>-->
                                        <!--                                                </li>-->
                                        <!--                                                <li>-->
                                        <!--                                                    <a href="#" target="_blank" data-toggle="blog-tags"-->
                                        <!--                                                       data-placement="top" title="" data-original-title="Print">-->
                                        <!--                                                        <i class="fa fa-print"></i>-->
                                        <!--                                                    </a>-->
                                        <!--                                                </li>-->
                                        <!--                                                <li>-->
                                        <!--                                                    <a href="#" target="_blank" data-toggle="blog-tags"-->
                                        <!--                                                       data-placement="top" title="" data-original-title="Print">-->
                                        <!--                                                        <i class="fa fa-share-alt"></i>-->
                                        <!--                                                    </a>-->
                                        <!--                                                </li>-->
                                        <!--                                            </ul>-->
                                        <!--                                        </div>-->
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-3 ">
                                    <div class="post-right-content">
                                        <h4>Available now</h4>
                                        <p><strong>Total Copies:</strong> 01</p>
                                        <p><strong>Rack No:</strong> 5</p>
                                        <a href="images/upload_files/<?php echo $row['document_name']; ?>"
                                           class="btn btn-dark-gray">Download</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="clearfix"></div>
                            <p><strong>Summary:</strong> <?php echo $row['description']; ?> </p>
                            <?php
                        }
                        ?>

                        <!--                                <div class="table-tabs" id="responsiveTabs">-->
                        <!--                                    <ul class="nav nav-tabs">-->
                        <!--                                        <li class="active"><b class="arrow-up"></b><a data-toggle="tab" href="#sectionA">Copies: 05</a></li>-->
                        <!--                                        <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionB">Reviews (12)</a></li>-->
                        <!--                                        <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionC">Table of Contents</a></li>-->
                        <!--                                        <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionD">Novelist Recommendations</a></li> -->
                        <!--                                    </ul>-->
                        <!--                                    <div class="tab-content">-->
                        <!--                                        <div id="sectionA" class="tab-pane fade in active">-->
                        <!--                                            <table class="table table-bordered">-->
                        <!--                                                <thead>-->
                        <!--                                                    <tr>-->
                        <!--                                                        <th>Library Name</th>-->
                        <!--                                                        <th>Shelf Number</th>-->
                        <!--                                                        <th>Material Type</th>-->
                        <!--                                                        <th>Status </th>-->
                        <!--                                                    </tr>-->
                        <!--                                                </thead>-->
                        <!--                                                <tbody>-->
                        <!--                                                    <tr>-->
                        <!--                                                        <td>Oak Park Public Library Main Branch</td>-->
                        <!--                                                        <td>B PURMORT</td>-->
                        <!--                                                        <td>Book</td>-->
                        <!--                                                        <td>In Processing</td>                                                                    -->
                        <!--                                                    </tr>-->
                        <!--                                                    <tr>-->
                        <!--                                                        <td>Bedford Park Public Library District</td>-->
                        <!--                                                        <td>616.99 PUR</td>-->
                        <!--                                                        <td>Book</td>-->
                        <!--                                                        <td>Due 8/24/16</td>-->
                        <!--                                                    </tr>-->
                        <!--                                                    <tr>-->
                        <!--                                                        <td>Blue Island Public Library</td>-->
                        <!--                                                        <td>BIO PUR</td>-->
                        <!--                                                        <td>eBook</td>-->
                        <!--                                                        <td>Due 8/24/16</td>-->
                        <!--                                                    </tr>-->
                        <!--                                                    <tr>-->
                        <!--                                                        <td>Bridgeview Public Library</td>-->
                        <!--                                                        <td>B PUR</td>-->
                        <!--                                                        <td>DVD</td>-->
                        <!--                                                        <td>In Processing</td>-->
                        <!--                                                    </tr>-->
                        <!--                                                    <tr>-->
                        <!--                                                        <td>Eisenhower Public Library District</td>-->
                        <!--                                                        <td>616.994 PUR</td>-->
                        <!--                                                        <td>Magazine</td>-->
                        <!--                                                        <td>Checked In</td>-->
                        <!--                                                    </tr>-->
                        <!--                                                    <tr>-->
                        <!--                                                        <td>Forest Park Public Library</td>-->
                        <!--                                                        <td>BIO PURMORT</td>-->
                        <!--                                                        <td>Magazine</td>-->
                        <!--                                                        <td>Checked In</td>-->
                        <!--                                                    </tr>-->
                        <!--                                                    <tr>-->
                        <!--                                                        <td>Hinsdale Public Library</td>-->
                        <!--                                                        <td>B PUR</td>-->
                        <!--                                                        <td>Audio</td>-->
                        <!--                                                        <td>Checked In</td>-->
                        <!--                                                    </tr>-->
                        <!--                                                    <tr>-->
                        <!--                                                        <td>Oak Park Public Library Maze Branch</td>-->
                        <!--                                                        <td>616.99 PUR</td>-->
                        <!--                                                        <td>Audio</td>-->
                        <!--                                                        <td>Due 9/10/16</td>-->
                        <!--                                                    </tr>-->
                        <!--                                                    <tr>-->
                        <!--                                                        <td>River Grove Public Library District</td>-->
                        <!--                                                        <td>616.994 PURMORT</td>-->
                        <!--                                                        <td>Book</td>-->
                        <!--                                                        <td>Due 9/10/16</td>-->
                        <!--                                                    </tr>-->
                        <!--                                                </tbody>-->
                        <!--                                            </table>-->
                        <!--                                        </div>-->
                        <!--                                        <div id="sectionB" class="tab-pane fade in">-->
                        <!--                                            <h5>Lorem Ipsum Dolor</h5>-->
                        <!--                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>-->
                        <!--                                        </div>-->
                        <!--                                        <div id="sectionC" class="tab-pane fade in">-->
                        <!--                                            <h5>Lorem Ipsum Dolor</h5>-->
                        <!--                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>-->
                        <!--                                        </div>-->
                        <!--                                        <div id="sectionD" class="tab-pane fade in">-->
                        <!--                                            <h5>Lorem Ipsum Dolor</h5>-->
                        <!--                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>-->
                        <!--                                        </div>                                                    -->
                        <!--                                        <div id="sectionE" class="tab-pane fade in">-->
                        <!--                                            <h5>Lorem Ipsum Dolor</h5>-->
                        <!--                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>-->
                        <!--                                        </div>                                                    -->
                        <!--                                        <div id="sectionF" class="tab-pane fade in">-->
                        <!--                                            <h5>Lorem Ipsum Dolor</h5>-->
                        <!--                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<!-- End: Products Section -->
<div class="booksmedia-fullwidth">
    <div class="container">
        <h2 class="section-title text-center">Popular Items</h2>
        <span class="underline center"></span>
        <ul class="popular-items-detail-v2">

            <?php
            $select = $pdo->prepare("SELECT * FROM `kiu_eresource` WHERE is_active = 1 and status = 'published'  order by id DESC LIMIT 4");
            $select->execute();
            while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
                extract($row)
                ?>

                <li>
                    <div class="book-list-icon yellow-icon"></div>
                    <figure>
                        <img style="height: 400px" src="images/upload_files/<?php echo $row['document_image']; ?>" alt="Book">
                        <figcaption>
                            <header>
                                <h4><a href="books-media-detail-v2.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h4>
                                <p><strong>Author:</strong> <?php echo $row['author']; ?></p>
                            </header>
                            <p><?php echo $row['description']; ?></p>
                        </figcaption>
                    </figure>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</div>

<!-- Start: Social Network -->
<!--<section class="social-network section-padding">-->
<!--    <div class="container">-->
<!--        <div class="center-content">-->
<!--            <h2 class="section-title">Follow Us</h2>-->
<!--            <span class="underline center"></span>-->
<!--            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
<!--        </div>-->
<!--        <ul>-->
<!--            <li>-->
<!--                <a class="facebook" href="#" target="_blank">-->
<!--                            <span>-->
<!--                                <i class="fa fa-facebook-f"></i>-->
<!--                            </span>-->
<!--                </a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a class="twitter" href="#" target="_blank">-->
<!--                            <span>-->
<!--                                <i class="fa fa-twitter"></i>-->
<!--                            </span>-->
<!--                </a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a class="google" href="#" target="_blank">-->
<!--                            <span>-->
<!--                                <i class="fa fa-google-plus"></i>-->
<!--                            </span>-->
<!--                </a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a class="rss" href="#" target="_blank">-->
<!--                            <span>-->
<!--                                <i class="fa fa-rss"></i>-->
<!--                            </span>-->
<!--                </a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a class="linkedin" href="#" target="_blank">-->
<!--                            <span>-->
<!--                                <i class="fa fa-linkedin"></i>-->
<!--                            </span>-->
<!--                </a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a class="youtube" href="#" target="_blank">-->
<!--                            <span>-->
<!--                                <i class="fa fa-youtube"></i>-->
<!--                            </span>-->
<!--                </a>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</section>-->
<!-- End: Social Network -->

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

</body>


</html>