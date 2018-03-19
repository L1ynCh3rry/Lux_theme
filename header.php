<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Lux new WP theme">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Luka Cosic">
    <title>Lux WP Theme</title>

    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">



    <!-- FONT AWESOME -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>


    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">


    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/hover-min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    <style>
        .mySlides {
            display: none
        }
        
        .w3-left,
        .w3-right,
        .w3-badge {
            cursor: pointer
        }
        
        .w3-badge {
            height: 13px;
            width: 13px;
            padding: 0
        }
    </style>
</head>

<body>
    <!-- Button Trigger for menu on smartphones -->
    <div class="menu-trigger" style="cursor: pointer;">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!---------- HEADER START ---------->
    <header class="header" style="transition: 1s ease;">
        <div>
            <ul class="menu list-unstyled">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="blog.html">Blog</a>
                </li>
                <li>
                    <a href="shop.html">Shop</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
        <div>
            <ul class="Rmenu list-unstyled">
                <li>
                    <a href="register.html">REGISTER</a>
                </li>
                <li>
                    <a href="login.html">LOG IN</a>
                </li>
            </ul>
        </div>
        <div>
            <!---------- CLOSE BUTTON ON SMARTPHONES ---------->
            <a class="closebtn" href="#">close</a>
        </div>
    </header>
    <!---------- HEADER END ---------->