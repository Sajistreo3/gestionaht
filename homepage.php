<style>

    div.home{
        height: 1550px;
    }
    .home p{
        text-align: center;
    }
    .petrologo{
        width: 100px;
    }
    div.services img{
        margin: 0 5%;
    }
    .stationName{
        display: inline;
    }

    div.cert {
        display: block;
        width: 500px;
        height: 180px;
        margin: auto;
    }
    div.cert img
    {
        display: block;
        /*float: left;*/
        width: 130px;
        margin: 0 auto 20px;
    }


    div.cert div p
    {
        float: right;
        font-size: 20px;
    }

    div.carousel-caption h5{
        color: #EE1123;
    }

    div.carousel-caption p{
        color: #9E0B17;
    }

    ol.carousel-indicators li{
        background-color: #EE1123;
    }


    @media only screen and (max-width: 430px) {

        div.home{
            height: 2000px;
        }

        div.cert{
           width: 263px;
        }

        div.cert a img{
            width: 130px;
        }

        div.services{
            margin-top: 70px;
        }

        div.services img{
           display: block;
            margin: 0 auto 60px;
            width: 60%;
        }

        #piclogo{
            width: 100%;
        }

        .stationName{
            display: block;
        }


    }


    @media only screen and (max-width: 550px) {

        div.home{
            height: 2150px;
        }

        div.cert{
            width: 263px;
        }

        div.cert a img{
            width: 130px;
        }

        div.services{
            margin-top: 70px;
        }

        div.services img{
            display: block;
            margin: 0 auto 60px;
            width: 60%;
        }

        #piclogo{
            width: 100%;
        }

        .stationName{
            display: block;
        }


    }


</style>

<div class="containers" style="margin-left: 0;">
    <div class="home">
        <h1 style="text-align: center;"><?php if ($page == 'index') {echo 'ACCUEIL';} else {echo 'A PROPOS';}  ?></h1>
        <hr style="border-top: 1px solid white;">
        <div class="slider">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2">
                    <li data-target="#carouselExampleIndicators" data-slide-to="3">
                    <li data-target="#carouselExampleIndicators" data-slide-to="4">
                    </li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/stations/DSC_0868.JPG" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><i class="fa fa-map-marker"></i> Maurice-Duplessis</h5>
                            <p>7667 Boulevard Maurice-Duplessis, Montréal, QC H1E 5M9</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/stations/DSC_0871.JPG" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><i class="fa fa-map-marker"></i> Anjou</h5>
                            <p>6901 Boulevard des Galeries d'Anjou, Anjou, QC H1M 2W1</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/stations/DSC_0873.JPG" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><i class="fa fa-map-marker"></i> Langelier</h5>
                            <p>8050 Boul Langelier, Saint-Léonard, QC H1P 3A4</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/stations/Lacordaire-Jarry.JPG" alt="Fourth slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><i class="fa fa-map-marker"></i> Jarry- Lacordaire</h5>
                            <p>7979 Boulevard Lacordaire, Saint-Léonard, QC H1R 2A1</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/stations/Métropolitain_night.JPG" alt="Fifth slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><i class="fa fa-map-marker"></i> Metropolitan</h5>
                            <p>5200 Boul Métropolitain E, Saint-Léonard, QC H1S 1A4</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span style="color: #EE1123;" class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span style="color: #EE1123;" class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <br>
        <p>
            Nous offrirons un charité rapide, agréable et prévenant grâce à que nos invités se sentent appréciés
        </p>
        <p>
            Toujours sur votre route.
            Visitez un établissement Petro‑CanadaMC pour faire le plein. Certains établissements offrent du carburant de remplacement, le remplissage de bouteille de propane et un lave-auto.
        </p>
        <br>
        <div class="cert">
<!--            <img src="images/trophy.jpg" alt="trophy">-->
            <a href="images/trophy.jpg" data-lightbox="roadtrip"><img src="images/trophy.jpg" alt="trophy"></a>
                <p>
                    Ce certificat est une preuve que nous fournissons l'un des meilleurs services de lavage de voiture au Québec.
                </p>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="services">
            <p>
            <div class="stationName">
                <i class='fab fa-canadian-maple-leaf' style='font-size:48px;color:red'></i> <a class="contactlink" href="maurice.php">MURICE-DUPLESIS</a>
            </div>
            <div class="stationName">
                <i class='fab fa-canadian-maple-leaf' style='font-size:48px;color:red'></i> <a class="contactlink" href="anjou.php">GALERIES D'ANJOU</a>
            </div>
            <div class="stationName">
                <i class='fab fa-canadian-maple-leaf' style='font-size:48px;color:red'></i> <a class="contactlink" href="Langlier.php">LANGELIER</a>
            </div>
            <div class="stationName">
                <i class='fab fa-canadian-maple-leaf' style='font-size:48px;color:red'></i> <a class="contactlink" href="Jarry.php">JARRY LACORDAIRE</a>
            </div>
            <div class="stationName">
                <i class='fab fa-canadian-maple-leaf' style='font-size:48px;color:red'></i> <a class="contactlink" href="metropolitan.php">METROPOLITAN</a>
            </div>
            </p>
            <br>
            <img src="images/Services/fierement-d'ici.png" alt="Fierement">
            <img id="piclogo" width="300" src="images/iconnew.png" alt="Fierement">
            <img class="petrologo" src="images/Services/Petro-Canada.png" alt="Lotto Quebec">
            <img class="petrologo" src="images/Services/Petro-Points.png" alt="Petro Points">
        </div>

    </div>
</div>
