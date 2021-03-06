<?php
include_once 'config.php';
//define("BASE_URL", 'http://localhost/testtechnojb');
?>

<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Techno JB</title>



        <!-- CSS -->

        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script type="text/javascript" src="js/modernizr.custom.29473.js"></script>

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">

        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/font-awesome/css/font-awesome.min.css">

        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/animate.css">

        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/magnific-popup.css">

        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/flexslider/flexslider.css">

        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/form-elements.css">

        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css">

        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/media-queries.css">



        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

        <!--[if lt IE 9]>

            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

        <![endif]-->



        <!-- Favicon and touch icons -->

        <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/assets/ico/favicon.png">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo BASE_URL; ?>/assets/ico/apple-touch-icon-144-precomposed.png">

        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo BASE_URL; ?>/assets/ico/apple-touch-icon-114-precomposed.png">

        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo BASE_URL; ?>/assets/ico/apple-touch-icon-72-precomposed.png">

        <link rel="apple-touch-icon-precomposed" href="<?php echo BASE_URL; ?>/assets/ico/apple-touch-icon-57-precomposed.png">



    </head>



    <body>



        <nav class="navbar" role="navigation">

            <div class="container">

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">

                        <span class="sr-only">Toggle navigation</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </button>

                    <a class="navbar-brand" href="index.html">Techno JB - a super cool design agency...</a>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse" id="top-navbar-1">

                    <ul class="nav navbar-nav navbar-right">

                        <li  <?php if (trim($pageName) == 'index'): ?> class="active"  <?php endif; ?>>

                            <a href="index.php"><i class="fa fa-home"></i><br>Home</a>

                        </li>

                        <li  <?php if (trim($pageName) == 'about'): ?> class="active"  <?php endif; ?>>

                            <a href="about.php"><i class="fa fa-user"></i><br>About</a>

                        </li>

                        <li   <?php if (trim($pageName) == 'services'): ?> class="active"  <?php endif; ?>>

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hAbove="dropdown" data-delay="1000">

                                <i class="fa fa-tasks"></i><br>Services <span class="caret"></span>

                            </a>

                            <ul class="dropdown-menu dropdown-menu-left" role="menu">


                                <li><a href="web-design.php">Web Design</a></li>
                                <li><a href="web-development.php">Web Development</a></li>
                                <li><a href="seo.php">SEO</a></li>
                                <li><a href="mobile-app-development.php">Mobile App Development</a></li>
                                <li><a href="online-marketing.php">Online marketing</a></li>
                                <li><a href="social-media-promotions.php">Social media promotions</a></li>
                                <li><a href="graphic-design.php">Graphic and Print design</a></li>
                                <li><a href="e-commerce.php">E-commerce</a></li>

                            </ul>

                        </li>

                        <li  <?php if (trim($pageName) == 'portfolio'): ?> class="active"  <?php endif; ?>>

                            <a href="portfolio.php"><i class="fa fa-camera"></i><br>Portfolio</a>

                        </li>



                        <li  <?php if (trim($pageName) == 'contact'): ?> class="active"  <?php endif; ?>>

                            <a href="contact.php"><i class="fa fa-envelope"></i><br>Contact</a>

                        </li>

                    </ul>

                </div>

            </div>

        </nav>