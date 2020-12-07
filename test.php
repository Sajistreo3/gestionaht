<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
    <style>
        body {margin:0;font-family:Arial}

        .topnav {
            overflow: hidden;
            background-color: #252628;
        }

        .topnav a.topnavlink {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 21px;

        }

        .active {
            background-color: #B44B35;
            color: white;
        }

        .topnav .icon {
            display: none;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 21px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: #252628;
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .topnav a.topnavlink:hover, .dropdown:hover .dropbtn {
            background-color: #555;
            color: #f98080;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
            color: black;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child), .dropdown .dropbtn {
                display: none;
            }
            .topnav a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 600px) {
            .topnav.responsive {position: relative;}
            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }
            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
            .topnav.responsive .dropdown {float: none;}
            .topnav.responsive .dropdown-content {position: relative;}
            .topnav.responsive .dropdown .dropbtn {
                display: block;
                width: 100%;
                text-align: left;
            }
        }
    </style>
</head>
<body>

<!--<div class="containers">-->
    <div class="topnav" id="myTopnav">
<!--        <a href="#home" class="active">Home</a>-->
        <a style="float: left; padding-top: 10px;" class="navbar-brand" href="index.php"><img width="300" id="logo" src="images/iconnew.png" alt="logo"></a>
        <div class="dropdown">
            <button class="dropbtn">ACCUEIL
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a class="" href="#">Admin Menu</a>
                <a class="" href="registration.php">Registration</a>
                <a class="" href="employees.php">Employees</a>
                <a class="" href="changepass.php">Change Password</a>
                <a class="" href="logout.php">Déconnecter</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">ÉQUIPE
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a class="" href="direction.php">Direction</a>
                <a class="" href="gestion_team.php">Gestion</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">SUCCURSALES
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a class="" href="maurice.php">Maurice</a>
                <a class="" href="Langlier.php">Langelier</a>
                <a class="" href="metropolitan.php">Métropolitain</a>
                <a class="" href="anjou.php">Anjou</a>
                <a class="" href="Jarry.php">Jarry</a>
            </div>
        </div>
        <a class="topnavlink" href="mailto:shardulbhatt95@gmail.com">CARIÈRE</a>
        <a class="topnavlink" href="#footer">NOUS JOINDRE</a>
        <a class="topnavlink" href="about.php">A PROPOS</a>
        <div class="dropdown">
            <button class="dropbtn">Inspection
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a class="" href="clean.php">PROPRETÉ</a>
                <a class="" href="marchandise.php">MARCHANDISE</a>
                <a class="" href="laveauto.php">LAVE AUTO</a>
                <a class="" href="secure.php">SÉCURITÉ</a>
                <a class="" href="inspection.php">HISTORIQUE</a>
            </div>
        </div>
        <a  href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
<!--</div>-->


</body>
</html>