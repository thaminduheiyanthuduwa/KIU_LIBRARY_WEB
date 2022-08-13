<?php
include_once 'db/db.php';

session_start();
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

    <!-- Accordion Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/jquery.accordion.css">

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
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled"
                                       href="index.php">Home</a>
                                </li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled" href="databases.php">Databases</a>
                                </li>
                                <li class="dropdown active">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled"
                                       href="books-media-gird-view-v2.php?type=all&page=1">E Resources</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="books-media-gird-view-v2.php?type=BMS&page=1">BMS</a></li>
                                        <li><a href="books-media-gird-view-v2.php?type=Nursing&page=1">Nursing</a></li>
                                        <li>
                                            <a href="books-media-gird-view-v2.php?type=Acupuncture&page=1">Acupuncture</a>
                                        </li>
                                        
                                        <li><a href="books-media-gird-view-v2.php?type=Marketing&page=1">Marketing</a>
                                        </li>
                                        
                                        <li><a href="books-media-gird-view-v2.php?type=IT&page=1">IT</a></li>
                                        <li><a href="books-media-gird-view-v2.php?type=Psychology&page=1">Psychology</a>
                                        </li>
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

<!-- Start: Book & Media Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="books-media-list">
                <div class="container">
                    <div class="row">
                        <!-- Start: Search Section -->
                        <section class="search-filters">
                            <div class="container">
                                <div class="filter-box">
                                    <h3>What are you looking for at the library?</h3>
                                    <form action="books-media-list-view.php?type=all&page=1" method="get">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label class="sr-only" for="keywords">Search by Anything</label>
                                                <input class="form-control" placeholder="<?php echo ($_GET['search'] == '') ? 'Search by Anything' : $_GET['search']; ?>" id="search"
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
                    <div class="row">
                        <div class="col-md-9 col-md-push-3">
                            <div class="filter-options margin-list">
                                <div class="row">

                                    <div class="col-md-4 col-sm-4">
<!--                                        <div class="filter-result">Showing items 1 to 9 of 19 total</div>-->
                                    </div>
                                    <div class="col-md-3 col-sm-3 pull-right">
                                        <div class="filter-toggle">
                                            <a href="books-media-gird-view-v2.php?type=<?php echo $_GET['type']; ?>&page=<?php echo $_GET['page']; ?>"><i
                                                        class="glyphicon glyphicon-th-large"></i></a>
                                            <a href="#" class="active"><i
                                                        class="glyphicon glyphicon-th-list"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <br>
                            <div class="books-list">

                                <?php
                                if ($_GET['type'] == 'all')
                                    $select = $pdo->prepare("SELECT * FROM `kiu_eresource` WHERE is_active = 1 and status = 'published' and (title like '%" . $_GET['search'] . "%' or author like '%" . $_GET['search'] . "%' or description like '%" . $_GET['search'] . "%') and department like '%" . $_GET['category'] . "%'  order by id DESC LIMIT " . (($_GET['page'] - 1) * 20) . "," . ((($_GET['page'] - 1) * 20) + 20) . "");
                                else
                                    $select = $pdo->prepare("SELECT * FROM `kiu_eresource` WHERE is_active = 1 and department like '%" . $_GET['category'] . "%' and (title like '%" . $_GET['search'] . "%' or author like '%" . $_GET['search'] . "%' or description like '%" . $_GET['search'] . "%') and status = 'published' and department = '" . $_GET['type'] . "'  order by id DESC LIMIT " . (($_GET['page'] - 1) * 20) . "," . ((($_GET['page'] - 1) * 20) + 20) . "");
                                $select->execute();
                                while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
                                    extract($row)
                                    ?>

                                    <article>
                                        <div class="single-book-box">
                                            <div class="post-thumbnail">
                                                <div class="book-list-icon yellow-icon"></div>
                                                <a href="books-media-detail-v2.php?id=<?php echo $row['id']; ?>"><img
                                                            style="height: 300px; width: 281px" alt="Book"
                                                            src="images/upload_files/<?php echo $row['document_image']; ?>"/></a>
                                            </div>
                                            <div class="post-detail">

                                                <header class="entry-header">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <h3 class="entry-title">
                                                                <a href="books-media-detail-v2.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
                                                            </h3>
                                                            <ul>
                                                                <li>
                                                                    <strong>Author:</strong> <?php echo $row['author']; ?>
                                                                </li>
                                                                <li>
                                                                    <strong>Department:</strong> <?php echo $row['department']; ?>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <!--                                                            <ul>-->
                                                            <!--                                                                <li><strong>Edition:</strong> First editio</li>-->
                                                            <!--                                                                <li><strong>Local Availability:</strong> 0 (of 1)</li>-->
                                                            <!--                                                                <li>-->
                                                            <!--                                                                    <div class="rating">-->
                                                            <!--                                                                        <strong>Rating: </strong>-->
                                                            <!--                                                                        <span>☆</span>-->
                                                            <!--                                                                        <span>☆</span>-->
                                                            <!--                                                                        <span>☆</span>-->
                                                            <!--                                                                        <span>☆</span>-->
                                                            <!--                                                                        <span>☆</span>-->
                                                            <!--                                                                    </div>-->
                                                            <!--                                                                </li>-->
                                                            <!--                                                            </ul>-->
                                                        </div>
                                                    </div>
                                                </header>
                                                <div class="entry-content">
                                                    <p><?php echo $row['description']; ?>.</p>
                                                </div>
                                                <footer class="entry-footer">
                                                    <a class="btn btn-dark-gray"
                                                       href="books-media-detail-v2.php?id=<?php echo $row['id']; ?>">Read
                                                        More</a>
                                                </footer>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </article>
                                    <?php
                                }
                                ?>
                            </div>
                            <nav class="navigation pagination text-center">
                                <h2 class="screen-reader-text">Posts navigation</h2>
                                <div class="nav-links">
                                    <?php
                                    if ($_GET['type'] == 'all')
                                        $select = $pdo->prepare("SELECT count(*) as count FROM `kiu_eresource` WHERE is_active = 1 and status = 'published' and (title like '%" . $_GET['search'] . "%' or author like '%" . $_GET['search'] . "%' or description like '%" . $_GET['search'] . "%') and department like '%" . $_GET['category'] . "%'  order by id");
                                    else
                                        $select = $pdo->prepare("SELECT count(*) as count FROM `kiu_eresource` WHERE is_active = 1 and status = 'published' and department like '%" . $_GET['category'] . "%' and (title like '%" . $_GET['search'] . "%' or author like '%" . $_GET['search'] . "%' or description like '%" . $_GET['search'] . "%') and status = 'published' and department = '" . $_GET['type'] . "'  order by id DESC");
                                    $select->execute();

                                    $txt = 1;

                                    while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
                                        extract($row);
                                        $txt = $row['count'];

                                    }

                                    $dev = ceil($txt / 20);

                                    for ($x = 1; $x <= $dev; $x++) {

                                        if ($x == $_GET['page']) {
                                            echo '<span class="page-numbers current" ><a href="books-media-gird-view-v2.php?type=' . $_GET['type'] . '&page=' . $x . '&search=' . $_GET['search'] . '&category=' . $_GET['category'] . '">' . $x . '</a></span>';
                                        } else {
                                            echo '<span class="page-numbers" ><a href="books-media-gird-view-v2.php?type=' . $_GET['type'] . '&page=' . $x . '&search=' . $_GET['search'] . '&category=' . $_GET['category'] . '">' . $x . '">' . $x . '</a></span>';
                                        }

                                        ?>

                                        <?php
                                    }
                                    ?>


                                </div>
                            </nav>
                        </div>
<!--                        <div class="col-md-3 col-md-pull-9">-->
<!--                            <aside id="secondary" class="sidebar widget-area" data-accordion-group>-->
<!--                                <div class="widget widget_related_search open" data-accordion>-->
<!--                                    <h4 class="widget-title" data-control>Related Searches</h4>-->
<!--                                    <div data-content>-->
<!--                                        <div data-accordion>-->
<!--                                            <h5 class="widget-sub-title" data-control>Subject</h5>-->
<!--                                            <div class="widget_categories" data-content>-->
<!--                                                <ul>-->
<!--                                                    <li><a href="#">Love stories <span>(18)</span></a></li>-->
<!--                                                    <li><a href="#">Texas <span>(04)</span></a></li>-->
<!--                                                    <li><a href="#">Rich people <span>(03)</span></a></li>-->
<!--                                                    <li><a href="#">Humorous stories <span>(02)</span></a></li>-->
<!--                                                    <li><a href="#">Widows <span>(02)</span></a></li>-->
<!--                                                    <li><a href="#">Women <span>(11)</span></a></li>-->
<!--                                                    <li><a href="#">Babysitters <span>(25)</span></a></li>-->
<!--                                                    <li><a href="#">Law firms <span>(09)</span></a></li>-->
<!--                                                </ul>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div data-accordion>-->
<!--                                            <h5 class="widget-sub-title" data-control>Authors</h5>-->
<!--                                            <div class="widget_categories" data-content>-->
<!--                                                <ul>-->
<!--                                                    <li><a href="#">Love stories <span>(18)</span></a></li>-->
<!--                                                    <li><a href="#">Texas <span>(04)</span></a></li>-->
<!--                                                    <li><a href="#">Rich people <span>(03)</span></a></li>-->
<!--                                                    <li><a href="#">Humorous stories <span>(02)</span></a></li>-->
<!--                                                    <li><a href="#">Widows <span>(02)</span></a></li>-->
<!--                                                    <li><a href="#">Women <span>(11)</span></a></li>-->
<!--                                                    <li><a href="#">Babysitters <span>(25)</span></a></li>-->
<!--                                                    <li><a href="#">Law firms <span>(09)</span></a></li>-->
<!--                                                </ul>-->
<!--                                            </div>-->
<!--                                            <div class="clearfix"></div>-->
<!--                                        </div>-->
<!--                                        <div data-accordion>-->
<!--                                            <h5 class="widget-sub-title" data-control>Series</h5>-->
<!--                                            <div class="widget_categories" data-content>-->
<!--                                                <ul>-->
<!--                                                    <li><a href="#">Love stories <span>(18)</span></a></li>-->
<!--                                                    <li><a href="#">Texas <span>(04)</span></a></li>-->
<!--                                                    <li><a href="#">Rich people <span>(03)</span></a></li>-->
<!--                                                    <li><a href="#">Humorous stories <span>(02)</span></a></li>-->
<!--                                                    <li><a href="#">Widows <span>(02)</span></a></li>-->
<!--                                                    <li><a href="#">Women <span>(11)</span></a></li>-->
<!--                                                    <li><a href="#">Babysitters <span>(25)</span></a></li>-->
<!--                                                    <li><a href="#">Law firms <span>(09)</span></a></li>-->
<!--                                                </ul>-->
<!--                                            </div>-->
<!--                                            <div class="clearfix"></div>-->
<!--                                        </div>-->
<!--                                        <div data-accordion>-->
<!--                                            <h5 class="widget-sub-title" data-control>Other Searches</h5>-->
<!--                                            <div class="widget_categories" data-content>-->
<!--                                                <ul>-->
<!--                                                    <li><a href="#">Love stories <span>(18)</span></a></li>-->
<!--                                                    <li><a href="#">Texas <span>(04)</span></a></li>-->
<!--                                                    <li><a href="#">Rich people <span>(03)</span></a></li>-->
<!--                                                    <li><a href="#">Humorous stories <span>(02)</span></a></li>-->
<!--                                                    <li><a href="#">Widows <span>(02)</span></a></li>-->
<!--                                                    <li><a href="#">Women <span>(11)</span></a></li>-->
<!--                                                    <li><a href="#">Babysitters <span>(25)</span></a></li>-->
<!--                                                    <li><a href="#">Law firms <span>(09)</span></a></li>-->
<!--                                                </ul>-->
<!--                                            </div>-->
<!--                                            <div class="clearfix"></div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="clearfix"></div>-->
<!--                                </div>-->
<!--                                <div class="widget widget_narrow_search" data-accordion>-->
<!--                                    <h4 class="widget-title" data-control>Narrow your search</h4>-->
<!--                                    <div data-content>-->
<!--                                        <div data-accordion>-->
<!--                                            <h5 class="widget-sub-title" data-control>Type of Material</h5>-->
<!--                                            <div class="widget_material" data-content>-->
<!--                                                <form action="#">-->
<!--                                                    <label><input type="checkbox" name="material" value="books">-->
<!--                                                        Books</label>-->
<!--                                                    <label><input type="checkbox" name="material" value="electronic"-->
<!--                                                                  checked> Electronic Resources</label>-->
<!--                                                    <label><input type="checkbox" name="material" value="ebooks"> ebooks</label>-->
<!--                                                    <label><input type="checkbox" name="material" value="soundrecording"-->
<!--                                                                  checked> Sound Recording</label>-->
<!--                                                    <label><input type="checkbox" name="material" value="largeprint">-->
<!--                                                        Large Print</label>-->
<!--                                                    <label><input type="checkbox" name="material" value="audioebooks"-->
<!--                                                                  checked> Audio eBooks</label>-->
<!--                                                </form>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div data-accordion>-->
<!--                                            <h5 class="widget-sub-title" data-control>Publishing Date </h5>-->
<!--                                            <div class="widget widget_material" data-content>-->
<!--                                                <form action="#">-->
<!--                                                    <label><input type="checkbox" name="material" value="books">-->
<!--                                                        Books</label>-->
<!--                                                    <label><input type="checkbox" name="material" value="electronic"-->
<!--                                                                  checked> Electronic Resources</label>-->
<!--                                                    <label><input type="checkbox" name="material" value="ebooks"> ebooks</label>-->
<!--                                                    <label><input type="checkbox" name="material" value="soundrecording"-->
<!--                                                                  checked> Sound Recording</label>-->
<!--                                                    <label><input type="checkbox" name="material" value="largeprint">-->
<!--                                                        Large Print</label>-->
<!--                                                    <label><input type="checkbox" name="material" value="audioebooks"-->
<!--                                                                  checked> Audio eBooks</label>-->
<!--                                                </form>-->
<!--                                                <div class="clearfix"></div>-->
<!--                                            </div>-->
<!--                                            <div class="clearfix"></div>-->
<!--                                        </div>-->
<!--                                        <div data-accordion>-->
<!--                                            <h5 class="widget-sub-title" data-control>Popularity </h5>-->
<!--                                            <div class="widget widget_material" data-content>-->
<!--                                                <form action="#">-->
<!--                                                    <label><input type="checkbox" name="material" value="books">-->
<!--                                                        Books</label>-->
<!--                                                    <label><input type="checkbox" name="material" value="electronic"-->
<!--                                                                  checked> Electronic Resources</label>-->
<!--                                                    <label><input type="checkbox" name="material" value="ebooks"> ebooks</label>-->
<!--                                                    <label><input type="checkbox" name="material" value="soundrecording"-->
<!--                                                                  checked> Sound Recording</label>-->
<!--                                                    <label><input type="checkbox" name="material" value="largeprint">-->
<!--                                                        Large Print</label>-->
<!--                                                    <label><input type="checkbox" name="material" value="audioebooks"-->
<!--                                                                  checked> Audio eBooks</label>-->
<!--                                                </form>-->
<!--                                            </div>-->
<!--                                            <div class="clearfix"></div>-->
<!--                                        </div>-->
<!--                                        <div data-accordion>-->
<!--                                            <h5 class="widget-sub-title" data-control>Language </h5>-->
<!--                                            <div class="widget widget_material" data-content>-->
<!--                                                <form action="#">-->
<!--                                                    <label><input type="checkbox" name="material" value="books">-->
<!--                                                        Books</label>-->
<!--                                                    <label><input type="checkbox" name="material" value="electronic"-->
<!--                                                                  checked> Electronic Resources</label>-->
<!--                                                    <label><input type="checkbox" name="material" value="ebooks"> ebooks</label>-->
<!--                                                    <label><input type="checkbox" name="material" value="soundrecording"-->
<!--                                                                  checked> Sound Recording</label>-->
<!--                                                    <label><input type="checkbox" name="material" value="largeprint">-->
<!--                                                        Large Print</label>-->
<!--                                                    <label><input type="checkbox" name="material" value="audioebooks"-->
<!--                                                                  checked> Audio eBooks</label>-->
<!--                                                </form>-->
<!--                                            </div>-->
<!--                                            <div class="clearfix"></div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="clearfix"></div>-->
<!--                                </div>-->
<!--                                <div class="widget widget_recent_releases">-->
<!--                                    <h4 class="widget-title">New Releases</h4>-->
<!--                                    <ul>-->
<!--                                        <li><a href="#">Books</a></li>-->
<!--                                        <li><a href="#">eBooks</a></li>-->
<!--                                        <li><a href="#">DVDS</a></li>-->
<!--                                        <li><a href="#">Magazines</a></li>-->
<!--                                        <li><a href="#">Audio</a></li>-->
<!--                                        <li><a href="#">eAudio</a></li>-->
<!--                                    </ul>-->
<!--                                    <div class="clearfix"></div>-->
<!--                                </div>-->
                                <!--                                <div class="widget widget_recent_entries">-->
                                <!--                                    <h4 class="widget-title">On-Order Items</h4>-->
                                <!--                                    <ul>-->
                                <!--                                        <li>-->
                                <!--                                            <figure>-->
                                <!--                                                <img src="images/order-item-01.jpg" alt="product"/>-->
                                <!--                                            </figure>-->
                                <!--                                            <a href="#">The Sonic Boom</a>-->
                                <!--                                            <span class="price"><strong>Author:</strong> F. Scott Fitzgerald</span>-->
                                <!--                                            <span><strong>ISBN:</strong> 978158157</span>-->
                                <!--                                            <div class="rating">-->
                                <!--                                                <span>☆</span>-->
                                <!--                                                <span>☆</span>-->
                                <!--                                                <span>☆</span>-->
                                <!--                                                <span>☆</span>-->
                                <!--                                                <span>☆</span>-->
                                <!--                                            </div>-->
                                <!--                                            <div class="clearfix"></div>-->
                                <!--                                        </li>-->
                                <!--                                        <li>-->
                                <!--                                            <figure>-->
                                <!--                                                <img src="images/order-item-02.jpg" alt="product"/>-->
                                <!--                                            </figure>-->
                                <!--                                            <a href="#">The Sonic Boom</a>-->
                                <!--                                            <span class="price"><strong>Author:</strong> F. Scott Fitzgerald</span>-->
                                <!--                                            <span><strong>ISBN:</strong> 978158157</span>-->
                                <!--                                            <div class="rating">-->
                                <!--                                                <span>☆</span>-->
                                <!--                                                <span>☆</span>-->
                                <!--                                                <span>☆</span>-->
                                <!--                                                <span>☆</span>-->
                                <!--                                                <span>☆</span>-->
                                <!--                                            </div>-->
                                <!--                                            <div class="clearfix"></div>-->
                                <!--                                        </li>-->
                                <!--                                        <li>-->
                                <!--                                            <figure>-->
                                <!--                                                <img src="images/order-item-03.jpg" alt="product"/>-->
                                <!--                                            </figure>-->
                                <!--                                            <a href="#">The Sonic Boom</a>-->
                                <!--                                            <span class="price"><strong>Author:</strong> F. Scott Fitzgerald</span>-->
                                <!--                                            <span><strong>ISBN:</strong> 978158157</span>-->
                                <!--                                            <div class="rating">-->
                                <!--                                                <span>☆</span>-->
                                <!--                                                <span>☆</span>-->
                                <!--                                                <span>☆</span>-->
                                <!--                                                <span>☆</span>-->
                                <!--                                                <span>☆</span>-->
                                <!--                                            </div>-->
                                <!--                                            <div class="clearfix"></div>-->
                                <!--                                        </li>-->
                                <!--                                    </ul>-->
                                <!--                                    <div class="clearfix"></div>-->
                                <!--                                </div>-->
<!--                            </aside>-->
<!--                        </div>-->
                    </div>
                </div>

                <!-- Start: Staff Picks -->
                <section class="team staff-picks">
                    <section class="category-filter new-release">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 text-center">
                                    <h2 class="section-title">Check Out The New Releases</h2>
                                    <span class="underline center"></span>
                                    <!--                                    <p class="lead">The standard chunk of Lorem Ipsum used since the 1500s is reproduced-->
                                    <!--                                        below for those interested.</p>-->
                                </div>
                            </div>
                        </div>
                        <div id="category-filter">
                            <ul class="category-list">

                                <?php
                                if ($_GET['type'] == 'all')
                                    $select = $pdo->prepare("SELECT * FROM `kiu_eresource` WHERE is_active = 1 and status = 'published'  order by id DESC LIMIT 4");
                                else
                                    $select = $pdo->prepare("SELECT * FROM `kiu_eresource` WHERE is_active = 1 and status = 'published' and department = '" . $_GET['type'] . "'  order by id DESC LIMIT 4");
                                $select->execute();$select->execute();
                                while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
                                    extract($row)
                                    ?>
                                    <li class="category-item">
                                        <figure>
                                            <img style="height: 300px"
                                                 src="images/upload_files/<?php echo $row['document_image']; ?>"
                                                 alt="New Releaase"/>
                                            <figcaption class="bg-orange">
                                                <div class="info-block">
                                                    <h4><?php echo $row['title']; ?></h4>
                                                    <span class="author"><strong>Author:</strong> <?php echo $row['author']; ?></span>
                                                    <div class="rating">
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                    </div>
                                                    <p><?php echo $row['description']; ?>.</p>
                                                    <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </section>
                </section>
                <!-- End: Staff Picks -->
            </div>
        </main>
    </div>
</div>
<!-- End: Books & Media Section -->

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