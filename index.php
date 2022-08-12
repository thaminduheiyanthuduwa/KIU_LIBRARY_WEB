<?php
include_once 'db/db.php';
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
                                                        </div>
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
                                                        </div>
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
                                                            <div class="author"><strong>Author:</strong> F. Scott
                                                                Fitzgerald
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
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
                                ``

                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled"
                                       href="library_document.php">Library
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
                                <a href="index-2.html">Home</a>
                                <ul>
                                    <li><a href="index-2.html">Home V1</a></li>
                                    <li><a href="home-v2.html">Home V2</a></li>
                                    <li><a href="home-v3.html">Home V3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="books-media-list-view.html">Books &amp; Media</a>
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

<!-- Start: Slider Section -->
<div data-ride="carousel" class="carousel slide" id="home-v1-header-carousel">

    <!-- Carousel slides -->
    <div class="carousel-inner">
        <div class="item active">
            <figure>
                <img alt="Home Slide" src="images/header-slider/home/home-img1.png"/>
            </figure>
            <div class="container">
                <div class="carousel-caption">
                    <h3>Online Learning Anytime, Anywhere!</h3>
                    <h2>WELCOME TO THE LIBRARY OF KIU</h2>
                </div>
            </div>
        </div>
        <div class="item">
            <figure>
                <img alt="Home Slide" src="images/header-slider/home/home-img2.png"/>
            </figure>
            <div class="container">
                <div class="carousel-caption">
                    <h3>Online Learning Anytime, Anywhere!</h3>
                    <h2>“Books are the most trusted and loyal friends that you ever have”</h2>
                </div>
            </div>
        </div>
        <div class="item">
            <figure>
                <img alt="Home Slide" src="images/header-slider/home/home-img3.png"/>
            </figure>
            <div class="container">
                <div class="carousel-caption">
                    <h3>Online Learning Anytime, Anywhere!</h3>
                    <h2>“Reading is the gateway skill which makes all other learning possible”</h2>
                </div>
            </div>
        </div>
        <div class="item">
            <figure>
                <img alt="Home Slide" src="images/header-slider/home/home-img4.png"/>
            </figure>
            <div class="container">
                <div class="carousel-caption">
                    <h3>Online Learning Anytime, Anywhere!</h3>
                    <h2>“When you get your library card, your life begins”</h2>
                </div>
            </div>
        </div>
        <div class="item">
            <figure>
                <img alt="Home Slide" src="images/header-slider/home/home-img5.png"/>
            </figure>
            <div class="container">
                <div class="carousel-caption">
                    <h3>Online Learning Anytime, Anywhere!</h3>
                    <h2>“A Library is not a luxury, but one of the necessities of life”</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#home-v1-header-carousel" data-slide="prev"></a>
    <a class="right carousel-control" href="#home-v1-header-carousel" data-slide="next"></a>
</div>
<!-- End: Slider Section -->

<!-- Start: Search Section -->
<section class="search-filters">
    <div class="container">
        <div class="filter-box">
            <h3>What are you looking for at the library?</h3>
            <form action="http://libraria.demo.presstigers.com/index.html" method="get">
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <label class="sr-only" for="keywords">Search by Keyword</label>
                        <input class="form-control" placeholder="Search by Keyword" id="keywords" name="keywords"
                               type="text">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="form-group">
                        <select name="catalog" id="catalog" class="form-control">
                            <option>Search the Catalog</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="form-group">
                        <select name="category" id="category" class="form-control">
                            <option>All Categories</option>
                            <option>Nursing</option>
                            <option>BMS</option>
                            <option>Human Resource</option>
                            <option>Marketing</option>
                            <option>Accounting</option>
                            <option>IT</option>
                            <option>Psychology</option>
                            <option>Library Documents</option>
                            <option>Database</option>
                            <option>Library Concerns</option>
                            <option></option>
                            <option>Category 04</option>
                            <option>Category 05</option>
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

<!-- Start: Welcome Section -->
<section class="welcome-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="welcome-wrap">
                    <div class="welcome-text">
                        <h2 class="section-title">Welcome to the LIBRARY OF KIU</h2>
                        <span class="underline left"></span>
                        <p>Welcome to the KIU library system. The KIU library is the best place to visit if you need any
                            information. After carefully examining the requirements of each faculty and each degree
                            curriculum, KIU Library provides all the learning resources required by the faculties and
                            students
                            for their teaching, learning, and research projects. To support research and development,
                            the library
                            offers information resources and services of sufficient quality and diversity to the
                            students. For example, KIU maintains online E-resources, including e-books, e-journals, past
                            papers on each
                            subject, databases, and students' publications at KIU. KIU always tries its best to provide
                            all the
                            necessities to students. Thanks for visiting the KIU Library system.</p>
                        <a class="btn btn-primary" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="facts-counter">
                    <ul>
                        <li class="bg-light-green">
                            <div class="fact-item">
                                <div class="fact-icon">
                                    <i class="ebook"></i>
                                </div>

                                <?php
                                $select = $pdo->prepare("SELECT count(*) as count_book FROM `kiu_eresource` WHERE is_active = 1 and status = 'published'");
                                $select->execute();
                                while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
                                    extract($row)
                                    ?>

                                    <span>Books<strong
                                                class="fact-counter"><?php echo $row['count_book']; ?></strong></span>

                                    <?php
                                }
                                ?>
                            </div>
                        </li>
                        <li class="bg-green">
                            <div class="fact-item">
                                <div class="fact-icon">
                                    <i class="eaudio"></i>
                                </div>
                                <span>Daily Usage<strong class="fact-counter">100</strong></span>
                            </div>
                        </li>
                        <li class="bg-red">
                            <div class="fact-item">
                                <div class="fact-icon">
                                    <i class="magazine"></i>
                                </div>
                                <span>Total Users<strong class="fact-counter">3000</strong></span>
                            </div>
                        </li>
                        <li class="bg-blue">
                            <div class="fact-item">
                                <div class="fact-icon">
                                    <i class="videos"></i>
                                </div>
                                <span>Monthly Views<strong class="fact-counter">2000</strong></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="welcome-image"></div>
</section>
<!-- End: Welcome Section -->

<!-- Start: Category Filter -->
<section class="category-filter section-padding">
    <div class="container">
        <div class="center-content">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="section-title">Check Out The New Releases</h2>
                    <span class="underline center"></span>
                </div>
            </div>
        </div>
        <div class="filter-buttons">
            <div class="filter btn" data-filter="all">All Releases</div>
            <div class="filter btn" data-filter=".BMS">BMS</div>
            <div class="filter btn" data-filter=".Nursing">Nursing</div>
            <div class="filter btn" data-filter=".Acupuncture">Acupuncture</div>
            <div class="filter btn" data-filter=".Marketing">Management</div>
            <div class="filter btn" data-filter=".IT">IT</div>
            <div class="filter btn" data-filter=".Psychology">Psychology</div>
        </div>
    </div>
    <div id="category-filter">
        <ul class="category-list">

            <?php
            $select = $pdo->prepare("SELECT * FROM `kiu_eresource` WHERE is_active = 1 and department = 'Nursing' and status = 'published' order by id DESC LIMIT 2");
            $select->execute();
            while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
                extract($row)
                ?>
                <li class="category-item Nursing">
                    <figure>
                        <img style="height: 300px" src="images/upload_files/<?php echo $row['document_image']; ?>"
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
                                <a href="books-media-detail-v2.php?id=<?php echo $row['id']; ?>">Read More <i
                                            class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </li>
                <?php
            }
            ?>

            <?php
            $select = $pdo->prepare("SELECT * FROM `kiu_eresource` WHERE is_active = 1 and department = 'BMS' and status = 'published' order by id DESC LIMIT 2");
            $select->execute();
            while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
                extract($row)
                ?>
                <li class="category-item BMS">
                    <figure>
                        <img style="height: 300px" src="images/upload_files/<?php echo $row['document_image']; ?>"
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
                                <a href="books-media-detail-v2.php?id=<?php echo $row['id']; ?>">Read More <i
                                            class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </li>
                <?php
            }
            ?>
            <?php
            $select = $pdo->prepare("SELECT * FROM `kiu_eresource` WHERE is_active = 1 and department = 'Acupuncture' and status = 'published' order by id DESC LIMIT 2");
            $select->execute();
            while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
                extract($row)
                ?>
                <li class="category-item Acupuncture">
                    <figure>
                        <img style="height: 300px" src="images/upload_files/<?php echo $row['document_image']; ?>"
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
                                <a href="books-media-detail-v2.php?id=<?php echo $row['id']; ?>">Read More <i
                                            class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </li>
                <?php
            }
            ?>

            <?php
            $select = $pdo->prepare("SELECT * FROM `kiu_eresource` WHERE is_active = 1 and department = 'HR' and status = 'published' order by id DESC LIMIT 2");
            $select->execute();
            while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
                extract($row)
                ?>
                <li class="category-item HR">
                    <figure>
                        <img style="height: 300px" src="images/upload_files/<?php echo $row['document_image']; ?>"
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
                                <a href="books-media-detail-v2.php?id=<?php echo $row['id']; ?>">Read More <i
                                            class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </li>
                <?php
            }
            ?>

            <?php
            $select = $pdo->prepare("SELECT * FROM `kiu_eresource` WHERE is_active = 1 and department = 'Accounting' and status = 'published' order by id DESC LIMIT 2");
            $select->execute();
            while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
                extract($row)
                ?>
                <li class="category-item Accounting">
                    <figure>
                        <img style="height: 300px" src="images/upload_files/<?php echo $row['document_image']; ?>"
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
                                <a href="books-media-detail-v2.php?id=<?php echo $row['id']; ?>">Read More <i
                                            class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </li>
                <?php
            }
            ?>

            <?php
            $select = $pdo->prepare("SELECT * FROM `kiu_eresource` WHERE is_active = 1 and department = 'Management' and status = 'published' order by id DESC LIMIT 2");
            $select->execute();
            while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
                extract($row)
                ?>
                <li class="category-item Marketing">
                    <figure>
                        <img style="height: 300px" src="images/upload_files/<?php echo $row['document_image']; ?>"
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
                                <a href="books-media-detail-v2.php?id=<?php echo $row['id']; ?>">Read More <i
                                            class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </li>
                <?php
            }
            ?>

            <?php
            $select = $pdo->prepare("SELECT * FROM `kiu_eresource` WHERE is_active = 1 and department = 'IT' and status = 'published' order by id DESC LIMIT 2");
            $select->execute();
            while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
                extract($row)
                ?>
                <li class="category-item IT">
                    <figure>
                        <img style="height: 300px" src="images/upload_files/<?php echo $row['document_image']; ?>"
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
                                <a href="books-media-detail-v2.php?id=<?php echo $row['id']; ?>">Read More <i
                                            class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </li>
                <?php
            }
            ?>

            <?php
            $select = $pdo->prepare("SELECT * FROM `kiu_eresource` WHERE is_active = 1 and department = 'Psychology' and status = 'published' order by id DESC LIMIT 2");
            $select->execute();
            while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
                extract($row)
                ?>
                <li class="category-item Psychology">
                    <figure>
                        <img style="height: 300px" src="images/upload_files/<?php echo $row['document_image']; ?>"
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
                                <a href="books-media-detail-v2.php?id=<?php echo $row['id']; ?>">Read More <i
                                            class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </li>
                <?php
            }
            ?>


        </ul>
        <div class="center-content">
            <a href="books-media-list-view.php?type=all&page=1" class="btn btn-primary">View More</a>
        </div>
        <div class="clearfix"></div>
    </div>
</section>
<!-- Start: Category Filter -->

<!-- Start: Features -->
<section class="features">
    <div class="container">
        <ul>
            <li class="bg-yellow">
                <div class="feature-box">
                    <i class="yellow"></i>
                    <h3>E-Resources</h3>
                    <p>KIU E-resources are digital objects that include electronic versions of books, journals,
                        publications from former students for reference, and other types of reading
                        materials.</p>
                    <a class="yellow" href="books-media-gird-view-v2.php?type=all&page=1">
                        View Selection <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
            </li>
            <li class="bg-light-green">
                <div class="feature-box">
                    <i class="light-green"></i>
                    <h3>Database</h3>
                    <p>A considerable volume of educational materials authored by many authors are available.
                        You can find valuable and exciting information.</p>
                    <a class="light-green" href="databases.php">
                        View Selection <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
            </li>
            <li class="bg-blue">
                <div class="feature-box">
                    <i class="blue"></i>
                    <h3>Library Documents</h3>
                    <p>"Record – keeping is essential.
                        Document everything you do."</p>
                    <a class="blue" href="library_document.php">
                        View Selection <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
            </li>
            <li class="bg-red">
                <div class="feature-box">
                    <i class="red"></i>
                    <h3>Library Concerns</h3>
                    <p>When in doubt, ask a librarian.</p>
                    <a class="red" href="#">
                        View Selection <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
            </li>
            <li class="bg-violet">
                <div class="feature-box">
                    <i class="violet"></i>
                    <h3>Services</h3>
                    <p>Create opportunities for learning, support literacy and education, and help
                        shape the new ideas and perspectives central to a creative and innovative
                        society.</p>
                    <a class="violet" href="#">
                        View Selection <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
            </li>
            <li class="bg-green">
                <div class="feature-box">
                    <i class="green"></i>
                    <h3>Requests</h3>
                    <p>Coming Soon.</p>
                    <a class="green" href="#">
                        View Selection <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- End: Features -->

<!-- Start: Newsletter -->
<!--<section class="newsletter section-padding">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-8 col-md-offset-2">-->
<!--                <div class="center-content">-->
<!--                    <h2 class="section-title">Subscribe to our Email</h2>-->
<!--                    <span class="underline center"></span>-->
<!--                    <p class="lead">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those-->
<!--                        interested.</p>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <input class="form-control" placeholder="Enter your Email!" id="newsletter" name="newsletter"-->
<!--                           type="email">-->
<!--                    <input class="form-control" value="Subscribe" type="submit">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!-- End: Newsletter -->

<!-- Start: Latest Blog -->
<section class="latest-blog section-padding banner">
    <div class="container">
        <div class="center-content">
            <h2 class="section-title">Trending Books</h2>
            <span class="underline center"></span>
        </div>
        <div class="tabs-container">
            <div class="tabs-menu">
                <ul>
                    <li class="active">
                        <a href="#" class="bg-yellow">
                            <div class="title">
                                <i class="yellow"></i>
                                <h3>BMS</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="bg-light-green">
                            <div class="title">
                                <i class="light-green"></i>
                                <h3>Nursing</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="bg-blue">
                            <div class="title">
                                <i class="blue"></i>
                                <h3>Human resource</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="bg-red">
                            <div class="title">
                                <i class="red"></i>
                                <h3>Management</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="bg-violet">
                            <div class="title">
                                <i class="violet"></i>
                                <h3>Accounting</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="bg-green">
                            <div class="title">
                                <i class="green"></i>
                                <h3>IT</h3>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="tabs-list">
                <div class="tab-content active">
                    <article>
                        <?php
                        $select = $pdo->prepare("SELECT * FROM `kiu_eresource` WHERE is_active = 1 and status = 'published' and department = 'BMS'  order by id DESC LIMIT 1");
                        $select->execute();
                        while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
                            extract($row)
                            ?>
                            <figure>
                                <img style="height: 555px"
                                     src="images/upload_files/<?php echo $row['document_image']; ?>"
                                     alt="Latest Blog">
                                <figcaption>
                                    <a href="#.">
                                        <span class="date"><?php echo substr($row['display_time'], 8, 2); ?></span>
                                        <span class="month"><?php echo substr($row['display_time'], 5, 2); ?></span>
                                    </a>
                                </figcaption>
                            </figure>
                            <div class="post-detail">
                                <div class="info-bar">
                                    <div class="comments">
                                        <a href="#">
                                            <i class="fa fa-comment"></i> 37
                                        </a>
                                    </div>
                                    <div class="viewed">
                                        <a href="#">
                                            <i class="fa fa-eye"></i> 180
                                        </a>
                                    </div>
                                </div>
                                <h4><?php echo $row['title']; ?></h4>
                                <div class="author">
                                    <a href="#">
                                        <i class="fa fa-user"></i> <?php echo $row['author']; ?>
                                    </a>
                                </div>
                                <p><?php echo $row['description']; ?></p>
                                <a href="books-media-detail-v2.php?id=<?php echo $row['id']; ?>"
                                   class="btn btn-dark-gray">More</a>
                            </div>
                            <?php
                        }
                        ?>
                    </article>
                </div>
                <div class="tab-content">
                    <article>
                        <?php
                        $select = $pdo->prepare("SELECT * FROM `kiu_eresource` WHERE is_active = 1 and status = 'published' and department = 'Nursing'  order by id DESC LIMIT 1");
                        $select->execute();
                        while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
                            extract($row)
                            ?>
                            <figure>
                                <img style="height: 555px"
                                     src="images/upload_files/<?php echo $row['document_image']; ?>"
                                     alt="Latest Blog">
                                <figcaption>
                                    <a href="#.">
                                        <span class="date"><?php echo substr($row['display_time'], 8, 2); ?></span>
                                        <span class="month"><?php echo substr($row['display_time'], 5, 2); ?></span>
                                    </a>
                                </figcaption>
                            </figure>
                            <div class="post-detail">
                                <div class="info-bar">
                                    <div class="comments">
                                        <a href="#">
                                            <i class="fa fa-comment"></i> 37
                                        </a>
                                    </div>
                                    <div class="viewed">
                                        <a href="#">
                                            <i class="fa fa-eye"></i> 180
                                        </a>
                                    </div>
                                </div>
                                <h4><?php echo $row['title']; ?></h4>
                                <div class="author">
                                    <a href="#">
                                        <i class="fa fa-user"></i> <?php echo $row['author']; ?>
                                    </a>
                                </div>
                                <p><?php echo $row['description']; ?></p>
                                <a href="books-media-detail-v2.php?id=<?php echo $row['id']; ?>"
                                   class="btn btn-dark-gray">More</a>
                            </div>
                            <?php
                        }
                        ?>
                    </article>
                </div>
                <div class="tab-content">
                    <article>
                        <?php
                        $select = $pdo->prepare("SELECT * FROM `kiu_eresource` WHERE is_active = 1 and status = 'published' and department = 'Psychology'  order by id DESC LIMIT 1");
                        $select->execute();
                        while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
                            extract($row)
                            ?>
                            <figure>

                                <img style="height: 555px"
                                     src="images/upload_files/<?php echo $row['document_image']; ?>"
                                     alt="Latest Blog">
                                <figcaption>
                                    <a href="#.">
                                        <span class="date"><?php echo substr($row['display_time'], 8, 2); ?></span>
                                        <span class="month"><?php echo substr($row['display_time'], 5, 2); ?></span>
                                    </a>
                                </figcaption>
                            </figure>
                            <div class="post-detail">
                                <div class="info-bar">
                                    <div class="comments">
                                        <a href="#">
                                            <i class="fa fa-comment"></i> 37
                                        </a>
                                    </div>
                                    <div class="viewed">
                                        <a href="#">
                                            <i class="fa fa-eye"></i> 180
                                        </a>
                                    </div>
                                </div>
                                <h4><?php echo $row['title']; ?></h4>
                                <div class="author">
                                    <a href="#">
                                        <i class="fa fa-user"></i> <?php echo $row['author']; ?>
                                    </a>
                                </div>
                                <p><?php echo $row['description']; ?></p>
                                <a href="books-media-detail-v2.php?id=<?php echo $row['id']; ?>"
                                   class="btn btn-dark-gray">More</a>
                            </div>

                            <?php
                        }
                        ?>
                    </article>
                </div>
                <div class="tab-content">
                    <article>
                        <?php
                        $select = $pdo->prepare("SELECT * FROM `kiu_eresource` WHERE is_active = 1 and status = 'published' and department = 'Management'  order by id DESC LIMIT 1");
                        $select->execute();
                        while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
                            extract($row)
                            ?>

                            <figure>
                                <img style="height: 555px"
                                     src="images/upload_files/<?php echo $row['document_image']; ?>"
                                     alt="Latest Blog">
                                <figcaption>
                                    <a href="#.">
                                        <span class="date"><?php echo substr($row['display_time'], 8, 2); ?></span>
                                        <span class="month"><?php echo substr($row['display_time'], 5, 2); ?></span>
                                    </a>
                                </figcaption>
                            </figure>
                            <div class="post-detail">
                                <div class="info-bar">
                                    <div class="comments">
                                        <a href="#">
                                            <i class="fa fa-comment"></i> 37
                                        </a>
                                    </div>
                                    <div class="viewed">
                                        <a href="#">
                                            <i class="fa fa-eye"></i> 180
                                        </a>
                                    </div>
                                </div>
                                <h4><?php echo $row['title']; ?></h4>
                                <div class="author">
                                    <a href="#">
                                        <i class="fa fa-user"></i> <?php echo $row['author']; ?>
                                    </a>
                                </div>
                                <p><?php echo $row['description']; ?></p>
                                <a href="books-media-detail-v2.php?id=<?php echo $row['id']; ?>"
                                   class="btn btn-dark-gray">More</a>
                            </div>

                            <?php
                        }
                        ?>
                    </article>
                </div>
                <div class="tab-content">
                    <article>
                        <?php
                        $select = $pdo->prepare("SELECT * FROM `kiu_eresource` WHERE is_active = 1 and status = 'published' and department = 'Acupuncture'  order by id DESC LIMIT 1");
                        $select->execute();
                        while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
                            extract($row)
                            ?>

                            <figure>
                                <img style="height: 555px"
                                     src="images/upload_files/<?php echo $row['document_image']; ?>"
                                     alt="Latest Blog">
                                <figcaption>
                                    <a href="#.">
                                        <span class="date"><?php echo substr($row['display_time'], 8, 2); ?></span>
                                        <span class="month"><?php echo substr($row['display_time'], 5, 2); ?></span>
                                    </a>
                                </figcaption>
                            </figure>
                            <div class="post-detail">
                                <div class="info-bar">
                                    <div class="comments">
                                        <a href="#">
                                            <i class="fa fa-comment"></i> 37
                                        </a>
                                    </div>
                                    <div class="viewed">
                                        <a href="#">
                                            <i class="fa fa-eye"></i> 180
                                        </a>
                                    </div>
                                </div>
                                <h4><?php echo $row['title']; ?></h4>
                                <div class="author">
                                    <a href="#">
                                        <i class="fa fa-user"></i> <?php echo $row['author']; ?>
                                    </a>
                                </div>
                                <p><?php echo $row['description']; ?></p>
                                <a href="books-media-detail-v2.php?id=<?php echo $row['id']; ?>"
                                   class="btn btn-dark-gray">More</a>
                            </div>

                            <?php
                        }
                        ?>
                    </article>
                </div>
                <div class="tab-content">
                    <article>
                        <?php
                        $select = $pdo->prepare("SELECT * FROM `kiu_eresource` WHERE is_active = 1 and status = 'published' and department = 'IT'  order by id DESC LIMIT 1");
                        $select->execute();
                        while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
                            extract($row)
                            ?>

                            <figure>
                                <img style="height: 555px"
                                     src="images/upload_files/<?php echo $row['document_image']; ?>"
                                     alt="Latest Blog">
                                <figcaption>
                                    <a href="#.">
                                        <span class="date"><?php echo substr($row['display_time'], 8, 2); ?></span>
                                        <span class="month"><?php echo substr($row['display_time'], 5, 2); ?></span>
                                    </a>
                                </figcaption>
                            </figure>
                            <div class="post-detail">
                                <div class="info-bar">
                                    <div class="comments">
                                        <a href="#">
                                            <i class="fa fa-comment"></i> 37
                                        </a>
                                    </div>
                                    <div class="viewed">
                                        <a href="#">
                                            <i class="fa fa-eye"></i> 180
                                        </a>
                                    </div>
                                </div>
                                <h4><?php echo $row['title']; ?></h4>
                                <div class="author">
                                    <a href="#">
                                        <i class="fa fa-user"></i> <?php echo $row['author']; ?>
                                    </a>
                                </div>
                                <p><?php echo $row['description']; ?></p>
                                <a href="books-media-detail-v2.php?id=<?php echo $row['id']; ?>"
                                   class="btn btn-dark-gray">More</a>
                            </div>

                            <?php
                        }
                        ?>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End: Latest Blog -->

<!-- Start: Meet Staff -->
<section class="team section-padding">
    <div class="container">
        <div class="center-content">
            <h2 class="section-title">Meet Our Staff</h2>
            <span class="underline center"></span>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="team-list">
            <div class="team-member">
                <figure>
                    <img style="height: 290px" src="images/staff/prof_neluka.jpg" alt="team"/>
                </figure>
                <div class="content-block">
                    <div class="member-info">
                        <h4>Prof. Neluka Fernando</h4>
                        <span class="designation"><b>Honorary Vice-Chancellor of KIU</b></span>
                        <span class="designation"><b>vicechancellor@kiu.ac.lk</b></span>
                        <!--                        <ul class="social">-->
                        <!--                            <li>-->
                        <!--                                <a href="#" target="_blank">-->
                        <!--                                    <i class="fa fa-linkedin"></i>-->
                        <!--                                </a>-->
                        <!--                            </li>-->
                        <!--                            <li>-->
                        <!--                                <a href="#" target="_blank">-->
                        <!--                                    <i class="fa fa-facebook-f"></i>-->
                        <!--                                </a>-->
                        <!--                            </li>-->
                        <!--                            <li>-->
                        <!--                                <a href="#" target="_blank">-->
                        <!--                                    <i class="fa fa-twitter"></i>-->
                        <!--                                </a>-->
                        <!--                            </li>-->
                        <!--                            <li>-->
                        <!--                                <a href="#" target="_blank">-->
                        <!--                                    <i class="fa fa-skype"></i>-->
                        <!--                                </a>-->
                        <!--                            </li>-->
                        <!--                        </ul>-->
                        <p>The website of KIU aims to provide quick,
                            focused, and simple access to relevant degree programs and
                            research conducted at KIU. Please feel free to contact our
                            library staff who are willing to assist anytime, if you require
                            any assistance</p>
                    </div>
                </div>
            </div>
            <div class="team-member">
                <figure>
                    <img style="height: 300px" src="images/staff/jayani.png" alt="team"/>
                </figure>
                <div class="content-block">
                    <div class="member-info">
                        <h4>Ms. Jayani Dunukara</h4>
                        <span class="designation"><b>Head of the Library Committee</b></span>
                        <span class="designation"><b>jayani@kiu.ac.lk</b></span>
                        <p>We hope you will all frequent the library and
                            feel free to voice your any opinion in terms of services,
                            amenities, and resources. As a learning organization, we
                            constantly strive to advance and get better</p>
                    </div>
                </div>
            </div>
            <div class="team-member">
                <figure>
                    <img style="height: 290px" src="images/staff/kaushalya.png" alt="team"/>
                </figure>
                <div class="content-block">
                    <div class="member-info">
                        <h4>Ms. Kaushalya Wijerathne</h4>
                        <span class="designation"><b>Assistant Librarian at KIU</b></span>
                        <span class="designation"><b>hansamali@kiu.ac.lk</b></span>
                        <p>The Library of KIU is known as the heart of the
                            university. Our main objective is to provide materials
                            and information services to suits the needs of the
                            students, academic and non-academic staff and to
                            ensure accessibility and delivery of the content</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End: Meet Staff -->

<!-- Start: Our Community Section -->
<!--        <section class="community-testimonial">-->
<!--            <div class="container">-->
<!--                <div class="text-center">-->
<!--                    <h2 class="section-title">Words From our Community</h2>-->
<!--                    <span class="underline center"></span>-->
<!--                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
<!--                </div>-->
<!--                <div class="owl-carousel">-->
<!--                    <div class="single-testimonial-box">-->
<!--                        <div class="top-portion">-->
<!--                            <img src="images/testimonial-image-01.jpg" alt="Testimonial Image" />-->
<!--                            <div class="user-comment">-->
<!--                                <div class="arrow-left"></div>-->
<!--                                <blockquote cite="#">-->
<!--                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit-->
<!--                                </blockquote>-->
<!--                            </div>-->
<!--                            <div class="clear"></div>-->
<!--                        </div>-->
<!--                        <div class="bottom-portion">-->
<!--                            <a href="#" class="author">-->
<!--                                Adrey Pachai <small>(Student )</small>-->
<!--                            </a>-->
<!--                            <div class="social-share-links">-->
<!--                                <ul>-->
<!--                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
<!--                    </div>-->
<!--                    <div class="single-testimonial-box">-->
<!--                        <div class="top-portion">-->
<!--                            <img src="images/testimonial-image-02.jpg" alt="Testimonial Image" />-->
<!--                            <div class="user-comment">-->
<!--                                <div class="arrow-left"></div>-->
<!--                                <blockquote cite="#">-->
<!--                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit-->
<!--                                </blockquote>-->
<!--                            </div>-->
<!--                            <div class="clear"></div>-->
<!--                        </div>-->
<!--                        <div class="bottom-portion">-->
<!--                            <a href="#" class="author">-->
<!--                                Maria B <small>(Student )</small>-->
<!--                            </a>-->
<!--                            <div class="social-share-links">-->
<!--                                <ul>-->
<!--                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
<!--                    </div>-->
<!--                    <div class="single-testimonial-box">-->
<!--                        <div class="top-portion">-->
<!--                            <img src="images/testimonial-image-01.jpg" alt="Testimonial Image" />-->
<!--                            <div class="user-comment">-->
<!--                                <div class="arrow-left"></div>-->
<!--                                <blockquote cite="#">-->
<!--                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit-->
<!--                                </blockquote>-->
<!--                            </div>-->
<!--                            <div class="clear"></div>-->
<!--                        </div>-->
<!--                        <div class="bottom-portion">-->
<!--                            <a href="#" class="author">-->
<!--                                Adrey Pachai <small>(Student )</small>-->
<!--                            </a>-->
<!--                            <div class="social-share-links">-->
<!--                                <ul>-->
<!--                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
<!--                    </div>-->
<!--                    <div class="single-testimonial-box">-->
<!--                        <div class="top-portion">-->
<!--                            <img src="images/testimonial-image-02.jpg" alt="Testimonial Image" />-->
<!--                            <div class="user-comment">-->
<!--                                <div class="arrow-left"></div>-->
<!--                                <blockquote cite="#">-->
<!--                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit-->
<!--                                </blockquote>-->
<!--                            </div>-->
<!--                            <div class="clear"></div>-->
<!--                        </div>-->
<!--                        <div class="bottom-portion">-->
<!--                            <a href="#" class="author">-->
<!--                                Maria B <small>(Student )</small>-->
<!--                            </a>-->
<!--                            <div class="social-share-links">-->
<!--                                <ul>-->
<!--                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
<!--                    </div>-->
<!--                    <div class="single-testimonial-box">-->
<!--                        <div class="top-portion">-->
<!--                            <img src="images/testimonial-image-01.jpg" alt="Testimonial Image" />-->
<!--                            <div class="user-comment">-->
<!--                                <div class="arrow-left"></div>-->
<!--                                <blockquote cite="#">-->
<!--                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit-->
<!--                                </blockquote>-->
<!--                            </div>-->
<!--                            <div class="clear"></div>-->
<!--                        </div>-->
<!--                        <div class="bottom-portion">-->
<!--                            <a href="#" class="author">-->
<!--                                Adrey Pachai <small>(Student )</small>-->
<!--                            </a>-->
<!--                            <div class="social-share-links">-->
<!--                                <ul>-->
<!--                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
<!--                    </div>-->
<!--                    <div class="single-testimonial-box">-->
<!--                        <div class="top-portion">-->
<!--                            <img src="images/testimonial-image-02.jpg" alt="Testimonial Image" />-->
<!--                            <div class="user-comment">-->
<!--                                <div class="arrow-left"></div>-->
<!--                                <blockquote cite="#">-->
<!--                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit-->
<!--                                </blockquote>-->
<!--                            </div>-->
<!--                            <div class="clear"></div>-->
<!--                        </div>-->
<!--                        <div class="bottom-portion">-->
<!--                            <a href="#" class="author">-->
<!--                                Maria B <small>(Student )</small>-->
<!--                            </a>-->
<!--                            <div class="social-share-links">-->
<!--                                <ul>-->
<!--                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
<!--                    </div>-->
<!--                    <div class="single-testimonial-box">-->
<!--                        <div class="top-portion">-->
<!--                            <img src="images/testimonial-image-01.jpg" alt="Testimonial Image" />-->
<!--                            <div class="user-comment">-->
<!--                                <div class="arrow-left"></div>-->
<!--                                <blockquote cite="#">-->
<!--                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit-->
<!--                                </blockquote>-->
<!--                            </div>-->
<!--                            <div class="clear"></div>-->
<!--                        </div>-->
<!--                        <div class="bottom-portion">-->
<!--                            <a href="#" class="author">-->
<!--                                Adrey Pachai <small>(Student )</small>-->
<!--                            </a>-->
<!--                            <div class="social-share-links">-->
<!--                                <ul>-->
<!--                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
<!--                    </div>-->
<!--                    <div class="single-testimonial-box">-->
<!--                        <div class="top-portion">-->
<!--                            <img src="images/testimonial-image-02.jpg" alt="Testimonial Image" />-->
<!--                            <div class="user-comment">-->
<!--                                <div class="arrow-left"></div>-->
<!--                                <blockquote cite="#">-->
<!--                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit-->
<!--                                </blockquote>-->
<!--                            </div>-->
<!--                            <div class="clear"></div>-->
<!--                        </div>-->
<!--                        <div class="bottom-portion">-->
<!--                            <a href="#" class="author">-->
<!--                                Maria B <small>(Student )</small>-->
<!--                            </a>-->
<!--                            <div class="social-share-links">-->
<!--                                <ul>-->
<!--                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!-- End: Our Community Section -->

<!-- Start: News & Event -->
<!--        <section class="news-events section-padding banner">-->
<!--            <div class="container">-->
<!--                <div class="center-content">-->
<!--                    <h2 class="section-title c-light">News &amp; Events</h2>-->
<!--                    <span class="underline center"></span>-->
<!--                    <p class="lead c-light">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>-->
<!--                </div>-->
<!--                <div class="news-events-list">-->
<!--                    <div class="single-news-event">-->
<!--                        <figure>-->
<!--                            <img src="images/news-event/news-event-01.jpg" alt="News & Event" />-->
<!--                        </figure>-->
<!--                        <div class="content-block">-->
<!--                            <div class="member-info">-->
<!--                                <div class="content_meta_category">-->
<!--                                    <span class="arrow-right"></span>-->
<!--                                    <a href="#." rel="category tag">EVENT</a>-->
<!--                                </div>-->
<!--                                <ul class="news-event-info">-->
<!--                                    <li>-->
<!--                                        <a href="#" target="_blank">-->
<!--                                            <i class="fa fa-calendar"></i>-->
<!--                                            July 25, 2016-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="#" target="_blank">-->
<!--                                            <i class="fa fa-clock-o"></i>-->
<!--                                            10:15 AM - 10:15 PM -->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="#" target="_blank">-->
<!--                                            <i class="fa fa-map-marker"></i>-->
<!--                                            New York, USA-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                                <h3><a href=".html#">It uses a dictionary of over 200 Latin word</a></h3>-->
<!--                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model.</p>-->
<!--                                <a class="btn btn-primary" href="#">Read More</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
<!--                    </div>-->
<!--                    <div class="single-news-event">-->
<!--                        <figure>-->
<!--                            <img src="images/news-event/news-event-02.jpg" alt="News & Event" />-->
<!--                        </figure>-->
<!--                        <div class="content-block">-->
<!--                            <div class="member-info">-->
<!--                                <div class="content_meta_category">-->
<!--                                    <span class="arrow-right"></span>-->
<!--                                    <a href="#." rel="category tag">EVENT</a>-->
<!--                                </div>-->
<!--                                <ul class="news-event-info">-->
<!--                                    <li>-->
<!--                                        <a href="#" target="_blank">-->
<!--                                            <i class="fa fa-calendar"></i>-->
<!--                                            July 25, 2016-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="#" target="_blank">-->
<!--                                            <i class="fa fa-map-marker"></i>-->
<!--                                            New York, USA-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                                <h3><a href=".html#">It uses a dictionary of over 200 Latin word</a></h3>-->
<!--                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', </p>-->
<!--                                <a class="btn btn-primary" href="#">Read More</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
<!--                    </div>-->
<!--                    <div class="single-news-event">-->
<!--                        <figure>-->
<!--                            <img src="images/news-event/news-event-03.jpg" alt="News & Event" />-->
<!--                        </figure>-->
<!--                        <div class="content-block">-->
<!--                            <div class="member-info">-->
<!--                                <div class="content_meta_category">-->
<!--                                    <span class="arrow-right"></span>-->
<!--                                    <a href="#." rel="category tag">EVENT</a>-->
<!--                                </div>-->
<!--                                <ul class="news-event-info">-->
<!--                                    <li>-->
<!--                                        <a href="#" target="_blank">-->
<!--                                            <i class="fa fa-calendar"></i>-->
<!--                                            July 25, 2016-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="#" target="_blank">-->
<!--                                            <i class="fa fa-map-marker"></i>-->
<!--                                            New York, USA-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                                <h3><a href=".html#">It uses a dictionary of over 200 Latin word</a></h3>-->
<!--                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', </p>-->
<!--                                <a class="btn btn-primary" href="#">Read More</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="clearfix"></div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!-- End: News & Event -->

<!-- Start: Social Network -->
<!--        <section class="social-network section-padding">-->
<!--            <div class="container">-->
<!--                <div class="center-content">-->
<!--                    <h2 class="section-title">Follow Us</h2>-->
<!--                    <span class="underline center"></span>-->
<!--                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
<!--                </div>-->
<!--                <ul>-->
<!--                    <li>-->
<!--                        <a class="facebook" href="#" target="_blank">-->
<!--                            <span>-->
<!--                                <i class="fa fa-facebook-f"></i>-->
<!--                            </span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a class="twitter" href="#" target="_blank">-->
<!--                            <span>-->
<!--                                <i class="fa fa-twitter"></i>-->
<!--                            </span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a class="google" href="#" target="_blank">-->
<!--                            <span>-->
<!--                                <i class="fa fa-google-plus"></i>-->
<!--                            </span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a class="rss" href="#" target="_blank">-->
<!--                            <span>-->
<!--                                <i class="fa fa-rss"></i>-->
<!--                            </span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a class="linkedin" href="#" target="_blank">-->
<!--                            <span>-->
<!--                                <i class="fa fa-linkedin"></i>-->
<!--                            </span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a class="youtube" href="#" target="_blank">-->
<!--                            <span>-->
<!--                                <i class="fa fa-youtube"></i>-->
<!--                            </span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </section>-->
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