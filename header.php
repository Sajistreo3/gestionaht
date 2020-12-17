<?php
session_start();
$path = explode("/", $_SERVER['PHP_SELF']);
$page = substr(array_pop($path), 0, -4);
include "dbConnection.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="images/icon.png">
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="plugins/lightbox2-2.11.1/src/css/lightbox.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href="css/floating-labels.css" rel="stylesheet">

    <!-- Java script -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script src="plugins/lightbox2-2.11.1/src/js/lightbox.js"></script>
    <title>Gestion A.H.T</title>

    <style>
        .navigation {
            height: 70px;
            background: #262626;
        }
        .brand {
            position: absolute;
            padding-left: 20px;
            float: left;
            line-height: 70px;
            text-transform: uppercase;
            font-size: 1.3em;
        }
        .brand a, .brand a:visited {
            color: #fff;
            text-decoration: none;
        }
        .nav-container {
            max-width: 1320px;
            margin: 0 auto;
        }
        nav {
            float: right;
        }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            float: left;
            position: relative;
        }
        nav ul li a, nav ul li a:visited {
            display: block;
            padding: 0 17px;
            line-height: 70px;
            background: #262626;
            color: #fff;
            text-decoration: none;
            transition: 0.3s;
            font-size: 15px!important;
        }
        nav ul li a:hover, nav ul li a:visited:hover {
            background: #f98080;
            color: black;
            text-decoration: none;
            padding-bottom: 10px;
        }

        nav ul li a:not(:only-child):after, nav ul li a:visited:not(:only-child):after {
            padding-left: 4px;
            content: ' ▾';
        }
        nav ul li ul li {
            min-width: 190px;
        }
        nav ul li ul li a {
            padding: 15px;
            line-height: 20px;
        }
        .nav-dropdown {
            position: absolute;
            display: none;
            z-index: 1;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
        }
        /* Mobile navigation */
        .nav-mobile {
            display: none;
            position: absolute;
            top: 0;
            right: 0;
            background: #262626;
            height: 70px;
            width: 70px;
        }
        @media only screen and (max-width: 798px) {
            .nav-mobile {
                display: block;
            }
            nav {
                width: 100%;
                padding: 70px 0 15px;
            }
            nav ul {
                display: none;
            }
            nav ul li {
                float: none;
            }
            nav ul li a {
                padding: 15px;
                line-height: 20px;
            }
            nav ul li ul li a {
                padding-left: 30px;
            }
            .nav-dropdown {
                position: static;
            }
        }
        @media screen and (min-width: 799px) {
            .nav-list {
                display: block !important;
            }
        }
        #nav-toggle {
            position: absolute;
            left: 18px;
            top: 22px;
            cursor: pointer;
            padding: 10px 35px 16px 0px;
        }
        #nav-toggle span, #nav-toggle span:before, #nav-toggle span:after {
            cursor: pointer;
            border-radius: 1px;
            height: 5px;
            width: 35px;
            background: #fff;
            position: absolute;
            display: block;
            content: '';
            transition: all 300ms ease-in-out;
        }
        #nav-toggle span:before {
            top: -10px;
        }
        #nav-toggle span:after {
            bottom: -10px;
        }
        #nav-toggle.active span {
            background-color: transparent;
        }
        #nav-toggle.active span:before, #nav-toggle.active span:after {
            top: 0;
        }
        #nav-toggle.active span:before {
            transform: rotate(45deg);
        }
        #nav-toggle.active span:after {
            transform: rotate(-45deg);
        }
        a.active{
            background: #B44B35!important;
        }

    </style>


    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5fcd95b2920fc91564ce13a6/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <script>
        (function($) { // Begin jQuery
            $(function() { // DOM ready
                // If a link has a dropdown, add sub menu toggle.
                $('nav ul li a:not(:only-child)').click(function(e) {
                    $(this).siblings('.nav-dropdown').toggle();
                    // Close one dropdown when selecting another
                    $('.nav-dropdown').not($(this).siblings()).hide();
                    e.stopPropagation();
                });
                // Clicking away from dropdown will remove the dropdown class
                $('html').click(function() {
                    $('.nav-dropdown').hide();
                });
                // Toggle open and close nav styles on click
                $('#nav-toggle').click(function() {
                    $('nav ul').slideToggle();
                });
                // Hamburger to X toggle
                $('#nav-toggle').on('click', function() {
                    this.classList.toggle('active');
                });
            }); // end DOM ready
        })(jQuery); // end jQuery
    </script>
</head>

<body>

<section class="navigation">
    <div class="nav-container">
        <div class="brand">
            <a href="index.php"><img id="logo" src="images/iconnew.png" alt="logo"></a>
        </div>
        <nav>
            <div class="nav-mobile"><a style="background-color: #262626; border-radius: 50px;" id="nav-toggle" href="#!"><span></span></a></div>
            <ul class="nav-list">
                <li>
                    <a class="<?php if ($page == 'index' || $page == 'employees' || $page == 'registration' || $page == 'inspection') {echo 'active';} ?>" href="#!"><i class="fas fa-home"></i> &nbsp; ACCUEIL</a>
                    <ul class="nav-dropdown">
                        <li><a class="<?php if ($page == 'index') {echo 'active';} ?>" href="index.php">Accueil</a></li>
                        <?php if (isset($_SESSION['user']) && $_SESSION['user']['level'] <= 2): ?>
                        <li><a class="" href="#">Admin Menu</a></li>
                        <li><a class="<?php if ($page == 'registration') {echo 'active';} ?>" href="registration.php">Registration</a></li>
                        <li><a class="<?php if ($page == 'employees') {echo 'active';} ?>" href="employees.php">Employees</a></li>
                        <li><a class="<?php if ($page == 'changepass') {echo 'active';} ?>" href="changepass.php">Change Password</a></li>
                        <?php endif; ?>
                        <?php if (isset($_SESSION['user'])): ?>
                        <li style="border-top: 1px solid white;"><a class="" href="logout.php">Déconnecter &nbsp; <i class="fas fa-sign-out-alt"></i></a></li>
                        <?php else: ?>
                        <li style="border-top: 1px solid white;"><a class="<?php if ($page == 'login') {echo 'active';} ?>" href="login.php">Log In &nbsp;<i class="fas fa-sign-in-alt"></i></a></li>
                        <?php endif; ?>
                    </ul>
                </li>
                <li>
                    <a class="" href="#!"><i class="fas fa-users"></i> &nbsp; ÉQUIPE</a>
                    <ul class="nav-dropdown">
                        <li><a class="" href="direction.php">Direction</a></li>
                        <li><a class="" href="gestion_team.php">Gestion</a></li>
                    </ul>
                </li>
                <li>
                    <a class="<?php if ($page == 'anjou' || $page == 'maurice' || $page == 'Langlier' || $page == 'metropolitan' || $page == 'Jarry') {echo 'active';} ?>" href="#!"><i class="fas fa-gas-pump"></i>  &nbsp;SUCCURSALES</a>
                    <ul class="nav-dropdown">
                        <li><a class="<?php if ($page == 'maurice') {echo 'active';} ?>" href="maurice.php">Maurice</a></li>
                        <li><a class="<?php if ($page == 'Langlier') {echo 'active';} ?>" href="Langlier.php">Langelier</a></li>
                        <li><a class="<?php if ($page == 'metropolitan') {echo 'active';} ?> "href="metropolitan.php">Métropolitain</a></li>
                        <li><a class="<?php if ($page == 'anjou') {echo 'active';} ?>" href="anjou.php">Anjou</a></li>
                        <li><a class="<?php if ($page == 'Jarry') {echo 'active';} ?>" href="Jarry.php">Jarry</a></li>
                    </ul>
                </li>
                <li>
                    <a class="" href="#!"><i class="fas fa-handshake"></i> &nbsp; NOUS JOINDRE</a>
                    <ul class="nav-dropdown">
                        <li class=""><a class="" href="mailto:shardulbhatt95@gmail.com"><i class="fas fa-briefcase"></i> Carière</a></li>
                        <li><a href="#footer"><i class="far fa-envelope"></i> Contactez Nous</a></li>
                    </ul>
                </li>
                <li class="<?php if ($page == 'about') {echo 'active';} ?>"><a class="" href="about.php"><i class="fas fa-info-circle"></i> &nbsp; A PROPOS</a></li>
                <?php if (isset($_SESSION['user']) && $_SESSION['user']['level'] <= 2): ?>
                <li>
                    <a class="<?php if ($page == 'inspection' || $page == 'clean' || $page == 'marchandise' || $page == 'laveauto' || $page == 'secure') {echo 'active';} ?>" href="#!"><i class="fas fa-clipboard-check"></i> &nbsp;INSPECTION</a>
                    <ul class="nav-dropdown">
                        <li><a class="<?php if ($page == 'clean') {echo 'active';} ?>" href="clean.php">PROPRETÉ &nbsp; <i class="fas fa-broom"></i></a></li>
                        <li><a class="<?php if ($page == 'marchandise') {echo 'active';} ?>" href="marchandise.php">MARCHANDISE &nbsp; <i class="fas fa-shopping-cart"></i></a></li>
                        <li><a class="<?php if ($page == 'laveauto') {echo 'active';} ?>" href="laveauto.php">LAVE AUTO &nbsp; <i class="fas fa-tint"></i></a></li>
                        <li><a class="<?php if ($page == 'secure') {echo 'active';} ?>" href="secure.php">SÉCURITÉ &nbsp; <i class="fas fa-unlock-alt"></i></a></li>
                        <li><a class="<?php if ($page == 'inspection') {echo 'active';} ?>" href="inspection.php">HISTORIQUE &nbsp; <i class="fas fa-history"></i></a></li>
                    </ul>
                </li>
                <?php endif; ?>
<!--                <li>-->
<!--                    <a class="" href="index.php">LOGIN</a>-->
<!--                </li>-->
            </ul>
        </nav>
    </div>
</section>
<div class="containers">
    <!--        <div class="logo">-->
    <!--            <a href="index.html"></a>-->
    <!--        </div>-->

<!--    <nav class="navbar navbar-expand-lg navbar-dark bg-light">-->
<!--        <a class="navbar-brand" href="index.php"><img id="logo" src="images/iconnew.png" alt="logo"></a>-->
<!--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"-->
<!--                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">-->
<!--            <span class="navbar-toggler-icon"></span>-->
<!--        </button>-->
<!--        <div class="collapse navbar-collapse" id="navbarNavDropdown">-->
<!--            <ul class="navbar-nav">-->
<!--                <li class="nav-item dropdown --><?php //if ($page == 'index' || $page == 'employees' || $page == 'registration' || $page == 'inspection' || $page == 'clean' || $page == 'marchandise' || $page == 'laveauto' || $page == 'secure') {echo 'active';} ?><!--">-->
<!--                    <a class="nav-link --><?php //if (isset($_SESSION['user'])) {echo 'dropdown-toggle';} ?><!--" href="index.php" --><?php //if (isset($_SESSION['user'])) {echo ' id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"';} ?><!--ACCUEIL<span class="sr-only">(current)</span></a>-->
<!--                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">-->
<!--                        --><?php //if (isset($_SESSION['user']) && $_SESSION['user']['level'] <= 2): ?>
<!--                            <li><a class="dropdown-item --><?php //if ($page == 'index') {echo 'active';} ?><!--" href="index.php">Accueil</a></li>-->
<!--                            <li class="dropdown-submenu">-->
<!--                                <a class="dropdown-item dropdown-toggle --><?php //if ($page == 'inspection' || $page == 'clean' || $page == 'marchandise' || $page == 'laveauto' || $page == 'secure') {echo 'active';} ?><!--" tabindex="-1" href="#">Inspections </a>-->
<!--                                <ul class="submenu dropdown-menu">-->
<!--			                        <li><a class="dropdown-item --><?php //if ($page == 'clean') {echo 'active';} ?><!--" href="clean.php">PROPRETÉ</a></li>-->
<!--			                        <li><a class="dropdown-item --><?php //if ($page == 'marchandise') {echo 'active';} ?><!--" href="marchandise.php">MARCHANDISE</a></li>-->
<!--			                        <li><a class="dropdown-item --><?php //if ($page == 'laveauto') {echo 'active';} ?><!--" href="laveauto.php">LAVE AUTO</a></li>-->
<!--			                        <li><a class="dropdown-item --><?php //if ($page == 'secure') {echo 'active';} ?><!--" href="secure.php">SÉCURITÉ</a></li>-->
<!--			                        <li><a class="dropdown-item --><?php //if ($page == 'inspection') {echo 'active';} ?><!--" href="inspection.php">HISTORIQUE</a></li>-->
<!--			                    </ul>-->
<!--                            </li>-->
<!--                            <li><a class="dropdown-item" href="#">Admin Menu</a></li>-->
<!--                            <li><a class="dropdown-item --><?php //if ($page == 'registration') {echo 'active';} ?><!--" href="registration.php">Registration</a></li>-->
<!--                            <li><a class="dropdown-item --><?php //if ($page == 'employees') {echo 'active';} ?><!--" href="employees.php">Employees</a></li>-->
<!---->
<!--                        --><?php //endif; ?>
<!--                        --><?php //if (isset($_SESSION['user'])): ?>
<!--                            <li><a class="dropdown-item --><?php //if ($page == 'changepass') {echo 'active';} ?><!--" href="changepass.php">Change Password</a></li>-->
<!--                            <li><a class="dropdown-item" href="logout.php">Déconnecter</a></li>-->
<!--                        --><?php //endif; ?>
<!--                    </ul>-->
<!--                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--                    --><?php //if (isset($_SESSION['user']) && $_SESSION['user']['level'] <= 2): ?>
<!--                        <a class="dropdown-item --><?php //if ($page == 'index') {echo 'active';} ?><!--" href="index.php">Accueil</a>-->
<!--                           <div class="dropdown-divider"></div>-->
<!--                        <a class="dropdown-toggle dropdown-item" data-toggle="dropdown" role="button" aria-haspopup="true"-->
<!--                           aria-expanded="false"> <span class="nav-label"></span>Service C <span class="caret"></span></a>-->
<!--                        <ul class="dropdown-menu">-->
<!--                            <li><a class="dropdown-item --><?php //if ($page == 'clean') {echo 'active';} ?><!--" href="clean.php">PROPRETÉ</a></li>-->
<!--                            <li><a class="dropdown-item --><?php //if ($page == 'marchandise') {echo 'active';} ?><!--" href="marchandise.php">MARCHANDISE</a></li>-->
<!--                            <li><a class="dropdown-item --><?php //if ($page == 'laveauto') {echo 'active';} ?><!--" href="laveauto.php">LAVE AUTO</a></li>-->
<!--                            <li><a class="dropdown-item --><?php //if ($page == 'secure') {echo 'active';} ?><!--" href="secure.php">SÉCURITÉ</a></li>-->
<!--                            <li><a class="dropdown-item --><?php //if ($page == 'inspection') {echo 'active';} ?><!--" href="inspection.php">HISTORIQUE</a></li>-->
<!--                        </ul>-->
<!--                        <a class="dropdown-item" href="#">Admin Menu</a>-->
<!--                        <a class="dropdown-item --><?php //if ($page == 'registration') {echo 'active';} ?><!--" href="registration.php">Registration</a>-->
<!--                        <a class="dropdown-item --><?php //if ($page == 'employees') {echo 'active';} ?><!--" href="employees.php">Employees</a>-->
<!--                        --><?php //if (isset($_SESSION['user'])): ?>
<!--                            <a class="dropdown-item --><?php //if ($page == 'changepass') {echo 'active';} ?><!--" href="changepass.php">Change Password</a>-->
<!--                            <a class="dropdown-item" href="logout.php">Déconnecter</a>-->
<!--                        --><?php //endif; ?>
<!--                    --><?php //endif; ?>
<!--                    </div>-->
<!---->
<!--                </li>-->
<!--                <li class="nav-item dropdown --><?php //if ($page == 'direction' || $page == 'gestion_team') {echo 'active';} ?><!--"><a id="teamdropdown" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">ÉQUIPE</a>-->
<!--                    <ul class="dropdown-menu" aria-labelledby="teamdropdown">-->
<!--                        <li><a class="dropdown-item" href="direction.php">Direction</a></li>-->
<!--                        <li><a class="dropdown-item" href="gestion_team.php">Gestion</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="nav-item dropdown --><?php //if ($page == 'anjou' || $page == 'maurice' || $page == 'Langlier' || $page == 'metropolitan' || $page == 'Jarry') {echo 'active';} ?><!--"><a id="sitedropdowm" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">SUCCURSALES</a>-->
<!--                    <ul class="dropdown-menu" aria-labelledby="sitedropdowm">-->
<!--                        <li><a class="dropdown-item --><?php //if ($page == 'maurice') {echo 'active';} ?><!--" href="maurice.php">Maurice</a></li>-->
<!--                        <li><a class="dropdown-item --><?php //if ($page == 'Langlier') {echo 'active';} ?><!--" href="Langlier.php">Langelier</a></li>-->
<!--                        <li><a class="dropdown-item --><?php //if ($page == 'metropolitan') {echo 'active';} ?><!-- "href="metropolitan.php">Métropolitain</a></li>-->
<!--                        <li><a class="dropdown-item --><?php //if ($page == 'anjou') {echo 'active';} ?><!--" href="anjou.php">Anjou</a></li>-->
<!--                        <li><a class="dropdown-item --><?php //if ($page == 'Jarry') {echo 'active';} ?><!--" href="Jarry.php">Jarry</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="nav-item"><a class="nav-link" href="mailto:shardulbhatt95@gmail.com">CARIÈRE</a></li>-->
<!--                <li class="nav-item"><a class="nav-link" href="#footer">NOUS JOINDRE</a></li>-->
<!--                <li class="nav-item --><?php //if ($page == 'about') {echo 'active';} ?><!--"><a class="nav-link" href="about.php">A PROPOS</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </nav>-->
</div>

<!-- ----------------------------------------------------------------- -->
