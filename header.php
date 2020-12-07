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
    <script type="text/javascript">
        //currDate();
        // jquery ready start
    $(document).ready(function() {
        // jQuery code

        //////////////////////// Prevent closing from click inside dropdown
        $(document).on('click', '.dropdown-menu', function (e) {
        e.stopPropagation();
        });

        // make it as accordion for smaller screens
        if ($(window).width() < 992) {
            $('.dropdown-menu a').click(function(e){
                e.preventDefault();
                if($(this).next('.submenu').length){
                    $(this).next('.submenu').toggle();
                }
                $('.dropdown').on('hide.bs.dropdown', function () {
                $(this).find('.submenu').hide();
                })
            });
        }
        
    }); // jquery end
    </script>
    <script src="plugins/lightbox2-2.11.1/src/js/lightbox.js"></script>
    <title>Gestion A.H.T</title>
    <style>
       @media (min-width: 992px){
		.dropdown-menu .dropdown-toggle:after{
			border-top: .3em solid transparent;
		    border-right: 0;
		    border-bottom: .3em solid transparent;
		    border-left: .3em solid;
		}

		.dropdown-menu .dropdown-menu{
			margin-left:0; margin-right: 0;
		}

		.dropdown-menu li{
			position: relative;
		}
		.nav-item .submenu{ 
			display: none;
			position: absolute;
			left:100%; top:-7px;
		}
		.nav-item .submenu-left{ 
			right:100%; left:auto;
		}

		.dropdown-menu > li:hover{ background-color: #f1f1f1 }
		.dropdown-menu > li:hover > .submenu{
			display: block;
		}
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


</head>

<body>
<div class="container">
    <!--        <div class="logo">-->
    <!--            <a href="index.html"></a>-->
    <!--        </div>-->

    <nav class="navbar navbar-expand-lg navbar-dark bg-light">
        <a class="navbar-brand" href="index.php"><img id="logo" src="images/iconnew.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown <?php if ($page == 'index' || $page == 'employees' || $page == 'registration' || $page == 'inspection' || $page == 'clean' || $page == 'marchandise' || $page == 'laveauto' || $page == 'secure') {echo 'active';} ?>">
                    <a class="nav-link <?php if (isset($_SESSION['user'])) {echo 'dropdown-toggle';} ?>" href="index.php" <?php if (isset($_SESSION['user'])) {echo ' id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"';} ?>>ACCUEIL<span class="sr-only">(current)</span></a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <?php if (isset($_SESSION['user']) && $_SESSION['user']['level'] <= 2): ?>
                            <li><a class="dropdown-item <?php if ($page == 'index') {echo 'active';} ?>" href="index.php">Accueil</a></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle <?php if ($page == 'inspection' || $page == 'clean' || $page == 'marchandise' || $page == 'laveauto' || $page == 'secure') {echo 'active';} ?>" tabindex="-1" href="#">Inspections </a>
                                <ul class="submenu dropdown-menu">
			                        <li><a class="dropdown-item <?php if ($page == 'clean') {echo 'active';} ?>" href="clean.php">PROPRETÉ</a></li>
			                        <li><a class="dropdown-item <?php if ($page == 'marchandise') {echo 'active';} ?>" href="marchandise.php">MARCHANDISE</a></li>
			                        <li><a class="dropdown-item <?php if ($page == 'laveauto') {echo 'active';} ?>" href="laveauto.php">LAVE AUTO</a></li>
			                        <li><a class="dropdown-item <?php if ($page == 'secure') {echo 'active';} ?>" href="secure.php">SÉCURITÉ</a></li>
			                        <li><a class="dropdown-item <?php if ($page == 'inspection') {echo 'active';} ?>" href="inspection.php">HISTORIQUE</a></li>
			                    </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">Admin Menu</a></li>
                            <li><a class="dropdown-item <?php if ($page == 'registration') {echo 'active';} ?>" href="registration.php">Registration</a></li>
                            <li><a class="dropdown-item <?php if ($page == 'employees') {echo 'active';} ?>" href="employees.php">Employees</a></li>

                        <?php endif; ?>
                        <?php if (isset($_SESSION['user'])): ?>
                            <li><a class="dropdown-item <?php if ($page == 'changepass') {echo 'active';} ?>" href="changepass.php">Change Password</a></li>
                            <li><a class="dropdown-item" href="logout.php">Déconnecter</a></li>
                        <?php endif; ?>
                    </ul>
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

                </li>
                <li class="nav-item dropdown <?php if ($page == 'direction' || $page == 'gestion_team') {echo 'active';} ?>"><a id="teamdropdown" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">ÉQUIPE</a>
                    <ul class="dropdown-menu" aria-labelledby="teamdropdown">
                        <li><a class="dropdown-item" href="direction.php">Direction</a></li>
                        <li><a class="dropdown-item" href="gestion_team.php">Gestion</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown <?php if ($page == 'anjou' || $page == 'maurice' || $page == 'Langlier' || $page == 'metropolitan' || $page == 'Jarry') {echo 'active';} ?>"><a id="sitedropdowm" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">SUCCURSALES</a>
                    <ul class="dropdown-menu" aria-labelledby="sitedropdowm">
                        <li><a class="dropdown-item <?php if ($page == 'maurice') {echo 'active';} ?>" href="maurice.php">Maurice</a></li>
                        <li><a class="dropdown-item <?php if ($page == 'Langlier') {echo 'active';} ?>" href="Langlier.php">Langelier</a></li>
                        <li><a class="dropdown-item <?php if ($page == 'metropolitan') {echo 'active';} ?> "href="metropolitan.php">Métropolitain</a></li>
                        <li><a class="dropdown-item <?php if ($page == 'anjou') {echo 'active';} ?>" href="anjou.php">Anjou</a></li>
                        <li><a class="dropdown-item <?php if ($page == 'Jarry') {echo 'active';} ?>" href="Jarry.php">Jarry</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="mailto:shardulbhatt95@gmail.com">CARIÈRE</a></li>
                <li class="nav-item"><a class="nav-link" href="#footer">NOUS JOINDRE</a></li>
                <li class="nav-item <?php if ($page == 'about') {echo 'active';} ?>"><a class="nav-link" href="about.php">A PROPOS</a></li>

            </ul>
        </div>
    </nav>
</div>

<!-- ----------------------------------------------------------------- -->
