<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">>
    <meta charset="utf-8">
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/contact-form.css">
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/script.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/tmStickUp.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/camera.js"></script>
    <script src="js/owl.carousel.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    <script>
        $(window).load(function() {
            $().UItoTop({easingType: 'easeOutQuart'});
            $('#stuck_container').tmStickUp({});

            $('#camera_wrap').camera({
                loader: false,
                pagination: false,
                minHeight: '400',
                thumbnails: false,
                height: '38.07291666666667%',
                caption: false,
                navigation: true,
                fx: 'mosaic'
            });

            $("#owl").owlCarousel({
                items: 3, //10 items above 1000px browser width
                itemsDesktop: [995, 1], //5 items between 1000px and 901px
                itemsDesktopSmall: [767, 1], // betweem 900px and 601px
                itemsTablet: [700, 1], //2 items between 600 and 0
                itemsMobile: [479, 1], // itemsMobile disabled - inherit from itemsTablet option
                navigation: true,
                pagination: false
            });
        });
    </script>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="css/ie.css">
    <![endif]-->
</head>
<body class="page1" id="top">
<!--==============================
header
=================================-->
<header>
    <div class="container_12">
        <div class="grid_12">
            <h1 class="logo">
                <a href="index.html">
                    ENCHERES FUN
                    <span>Le site d'enchères qui répertorie les meilleures offres !</span>
                </a>
            </h1>
        </div>
        <div class="clear"></div>
    </div>
    <section id="stuck_container">
        <!--==============================
        Stuck menu
        =================================-->
        <div class="container_12">
            <div class="grid_12">
                <div class="navigation">
                    <nav>
                        <ul class="sf-menu">
                            <?php
                            $r = \Slim\Slim::getInstance();

                            echo '<li class="'.$r->urlFor('home').'"><a href="">Accueil</a></li>
                            <li><a href="'.$r->urlFor('encheres').'">Les enchères</a></li>
                            <li><a href="'.$r->urlFor('home').'">A propos</a></li>';

                            if(isset($_SESSION['util'])) {
                                echo '<li>Bonjour '.$_SESSION['util']->pseudo.'</li>
                                <li><a href="'.$r->urlFor('deconnexion').'">Déconnexion</a></li>';
                            } else {
                                echo '<li><a href="'.$r->urlFor('inscription').'">Inscription</a></li>
                                <li><a href="'.$r->urlFor('connexion').'">Connexion</a></li>';
                            }
                            ?>
                        </ul>
                    </nav>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </section>
</header>
