<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Cabinet individual de expertiza criminalistica Tudorel Popescu, Expert criminalist, expertize criminalistice, Focsani, Vrancea</title>
        <meta name="author" content="Codevol">
        <meta name="keywords" content="responsive, parallax, creative, comingsoon, bootstrap, html5 template, one page, landing page">
        <meta name="description" content="Cabinet individual de expertiza criminalistica Tudorel Popescu, Expert criminalist, expertize criminalistice, Focsani, Vrancea">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">

        <!-- style sheets -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/fifty-one.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/vegas/vegas.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owl-carousel/owl.theme.css">
        <link rel="stylesheet" type="<?php echo get_stylesheet_directory_uri(); ?>/text/css" href="assets/css/animate.css">
        <!-- color stylesheets -->
         <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/color-css/brown.css">


        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/fifty-one.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
       
    </head>
    <body class="play-animations" id="page-top" data-offset="50" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- preloader
<div class="se-pre-con"></div>
preloader ends here -->

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-example">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#home" class="navbar-brand"><?php the_field('logo_banner');?></a>
        </div><!-- end nav bar header -->

        <div class="navbar-collapse collapse" id="navbar-example">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="page-scroll" href="#home">Acasa</a></li>
                <li><a class="page-scroll" href="#aboutus">Despre noi</a></li>
                <li><a class="page-scroll" href="#features">Domenii de activitate</a></li>
                <li><a class="page-scroll" href="#legislation">Legislatie</a></li>
                <li><a class="page-scroll" href="#team">Echipa</a></li>
                <li><a class="page-scroll" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div> <!-- end container -->
</nav> 

<header>
    <div class="single-image-container">
        <div  id="home" class="parallax-window" data-parallax="scroll" data-image-src="<?php the_field('imagine_banner');?>">
            <div class="overlay"></div>
            <div id="landing">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 id="heading"><?php the_field('titlu_banner');?></h1>
                            <p id="tagline">
                                Telefon: <a href="tel:<?php the_field('telefon_banner');?>"><?php the_field('telefon_banner');?></a> | 
                                Email: <a href="mailto:<?php the_field('email_banner');?>" class=""><?php the_field('email_banner');?>
                            </p>
                        </div>
                        <div class="col-md-12 text-center landing-btns">
                            <a href="#contact" class="btn btn-default">Contactati-ne</a>
                            <a href="#aboutus" class="btn btn-primary">Despre noi</a>
                        </div>
                    </div> <!-- end row -->
                </div> <!-- end container -->
            </div> <!-- end landing -->
        </div> <!-- end parallax window -->
    </div> <!-- end single image container -->
</header>