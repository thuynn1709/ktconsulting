<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
        <title><?php echo lang("header_company_name"); ?> </title>
        <!-- Web Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url(); ?>public/frontend/css/bootstrap.min.css" rel="stylesheet">
        <!-- Flaticon CSS -->
        <link href="<?php echo base_url(); ?>public/frontend/fonts/flaticon/flaticon.css" rel="stylesheet">
        <!-- font-awesome CSS -->
        <link href="<?php echo base_url(); ?>public/frontend/css/font-awesome.min.css" rel="stylesheet">
        <!-- Offcanvas CSS -->
        <link href="<?php echo base_url(); ?>public/frontend/css/hippo-off-canvas.css" rel="stylesheet">
        <!-- animate CSS -->
        <link href="<?php echo base_url(); ?>public/frontend/css/animate.css" rel="stylesheet">
        <!-- language CSS -->
        <link href="<?php echo base_url(); ?>public/frontend/css/language-select.css" rel="stylesheet">
        <!-- owl.carousel CSS -->
        <link href="<?php echo base_url(); ?>public/frontend/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
        <!-- magnific-popup -->
        <link href="<?php echo base_url(); ?>public/frontend/css/magnific-popup.css" rel="stylesheet">
        <!-- Main menu -->
        <link href="<?php echo base_url(); ?>public/frontend/css/menu.css" rel="stylesheet">
        <!-- Template Common Styles -->
        <link href="<?php echo base_url(); ?>public/frontend/css/template.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>public/frontend/css/style.css" rel="stylesheet">
        <!-- Responsive CSS -->
        <link href="<?php echo base_url(); ?>public/frontend/css/responsive.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>public/frontend/css/YTPlayer.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>public/frontend/css/blog.css" rel="stylesheet" media="screen">
        
        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>public/frontend/js/vendor/modernizr-2.8.1.min.js"></script>

        <script src="<?php echo base_url(); ?>public/frontend/js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url(); ?>public/frontend/js/bootstrap.min.js"></script>
        <!-- owl.carousel -->
        <script src="<?php echo base_url(); ?>public/frontend/owl.carousel/owl.carousel.min.js"></script>
        <!-- Magnific-popup -->
        <script src="<?php echo base_url(); ?>public/frontend/js/jquery.magnific-popup.min.js"></script>
        <!-- Offcanvas Menu -->
        <script src="<?php echo base_url(); ?>public/frontend/js/hippo-offcanvas.js"></script>
        <!-- inview -->
        <script src="<?php echo base_url(); ?>public/frontend/js/jquery.inview.min.js"></script>
        <!-- stellar -->
        <script src="<?php echo base_url(); ?>public/frontend/js/jquery.stellar.js"></script>
        <!-- countTo -->
        <script src="<?php echo base_url(); ?>public/frontend/js/jquery.countTo.js"></script>
        <!-- classie -->
        <script src="<?php echo base_url(); ?>public/frontend/js/classie.js"></script>
        <!-- selectFx -->
        <script src="<?php echo base_url(); ?>public/frontend/js/selectFx.js"></script>
        <!-- sticky kit -->
        <script src="<?php echo base_url(); ?>public/frontend/js/jquery.sticky-kit.min.js"></script>
        <!-- GOGLE MAP -->
        <script src="<?php echo base_url(); ?>public/frontend/js/vendor/modernizr-2.8.1.min.js"></script>


        <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyD1Zq1otPtrIYuU1w-nZcJoIO4nQhCRuIY"></script>
        <script src="<?php echo base_url(); ?>public/frontend/js/twitterFetcher_min.js"></script>
        <!-- Custom Script -->
        <script src="<?php echo base_url(); ?>public/frontend/js/scripts.js"></script>
        
        <script src="<?php echo base_url(); ?>public/frontend/js/notify.js"></script>

        <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="js/vendor/html5shim.js"></script>
                <script src="js/vendor/respond.min.js"></script>
        <![endif]-->
    </head>


    <body id="page-top">
        <div id="st-container" class="st-container">
            <div class="st-pusher">
                <div class="st-content">
                    <header class="header">
                        <nav class="top-bar">
                            <div class="overlay-bg">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="call-to-action">
                                                <ul class="list-inline">
                                                    <li><a href="#"><i class="fa fa-phone"></i> 1-800-987-654</a></li>
                                                    <li><a href="#"><i class="fa fa-envelope"></i> shipping@ktconsulting.de</a></li>
                                                </ul>
                                            </div><!-- /.call-to-action -->
                                        </div><!-- /.col-sm-6 -->

                                        <div class="col-sm-6 hidden-xs">
                                            <div class="topbar-right">
                                                <div class="lang-support pull-right" style="display: none" >
                                                    <select id="languagechange" class="cs-select cs-skin-elastic">
                                                        <option value="" disabled selected>Language</option>
                                                        <option value="english" data-class="flag-uk"  <?php if ($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
                                                        <option value="german"  data-class="flag-gr"<?php if ($this->session->userdata('site_lang') == 'german') echo 'selected="selected"'; ?>>German</option>
                                                        <option value="vietnamese" data-class="flag-vn" <?php if ($this->session->userdata('site_lang') == 'vietnamese') echo 'selected="selected"'; ?>>Vietnamese</option>
                                                    </select>
                                                </div>

                                                <ul class="social-links list-inline pull-right">

                                                    <li><a href="<?php echo base_url(); ?>LanguageSwitcher/switchLang/vietnamese"><img src="<?php echo base_url(); ?>public/frontend/Flags/flags/flags/16/VietNam.png" /></a></li>
                                                    <li><a href="<?php echo base_url(); ?>LanguageSwitcher/switchLang/english"><img src="<?php echo base_url(); ?>public/frontend/Flags/flags/flags/16/UnitedStatesofAmerica.png" /></a></li>
                                                    <li><a href="<?php echo base_url(); ?>LanguageSwitcher/switchLang/german"><img src="<?php echo base_url(); ?>public/frontend/Flags/flags/flags/16/Germany.png" /></a></li>
                                                </ul>
                                            </div><!-- /.social-links -->
                                        </div><!-- /.col-sm-6 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div><!-- /.overlay-bg -->
                        </nav><!-- /.top-bar -->

                        <div id="search">
                            <button type="button" class="close">×</button>
                            <form>
                                <input type="search" value="" placeholder="type keyword(s) here" />
                                <button type="submit" class="btn btn-primary"><?php echo lang("search"); ?></button>
                            </form>
                        </div>

                        <nav class="navbar navbar-default" role="navigation">
                            <div class="container mainnav">
                                <div class="navbar-header">
                                    <h1 class="logo"><a class="navbar-brand" style="padding-bottom: 50px !important"  href="index.html"><img src="<?php echo base_url(); ?>public/frontend/img/logo.jpg" alt=""></a></h1>

                                    <!-- offcanvas-trigger -->
                                    <button type="button" class="navbar-toggle collapsed pull-right" >
                                        <span class="sr-only">Toggle navigation</span>
                                        <i class="fa fa-bars"></i>
                                    </button>

                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse navbar-collapse">



                                    <span class="search-button pull-right"><a href="#search"><i class="fa fa-search"></i></a></span>

                                    <ul class="nav navbar-nav navbar-right">
                                        <!-- Home -->
                                        <li <?php if ($controller == 'home') echo 'class="active"'; ?>><a href="<?php echo base_url('home'); ?>"><?php echo lang("menu_home"); ?></a></li>
                                        <!-- /Home -->

                                        <!-- Services -->
                                        <li class="dropdown <?php if ($controller == 'services') echo ' active '; ?>"><a href="<?php echo base_url('services'); ?>"><?php echo lang("menu_services"); ?> <span class="fa fa-angle-down"></span></a>
                                            <!-- submenu-wrapper -->
                                            <div class="submenu-wrapper">
                                                <div class="submenu-inner">
                                                    <ul class="dropdown-menu">
                                                        <li><a href="air.html">Air transportation</a></li>
                                                        <li><a href="marine.html">Marine transportation</a></li>
                                                        <li><a href="moving.html">Moving & storage</a></li>
                                                        <li><a href="shipping.html">Shipping & operations</a></li>
                                                        <li><a href="transportation.html">Transportation logistics</a></li>
                                                        <li><a href="trucking.html">Trucking</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /submenu-wrapper -->
                                        </li>

                                        <!-- Blog -->
                                        <li <?php if ($controller == 'news') echo 'class="active"'; ?>><a href="<?php echo base_url('news'); ?>"><?php echo lang("menu_news"); ?></a></li>

                                        <li <?php if ($controller == 'contact') echo 'class="active"'; ?>><a href="<?php echo base_url('contact'); ?>"><?php echo lang("menu_contact"); ?></a></li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container -->
                        </nav>
                    </header>

                    
