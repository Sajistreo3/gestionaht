<?php
include "header.php";
?>

    <style>
        div.home{
            height: 1600px;
        }
h3
{
    text-align: center;
}
p
{
    font-size: 18px;
}

        @media only screen and (max-width: 430px) {

            div.home{
                height: 2000px;
            }

            div.cert {
                width: 263px;
            }

            div.services{
                margin-top: 70px;
            }

            div.services img{
                display: block;
                margin: 0 auto 60px;
                width: 60%;
            }




        }


        @media only screen and (max-width: 550px) {

            div.home{
                height: 2150px;
            }

            div.cert {
                width: 263px;
            }

            div.services{
                margin-top: 70px;
            }

            div.services img{
                display: block;
                margin: 0 auto 60px;
                width: 60%;
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
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="images/stations/DSC_0868.JPG" alt="First slide">

                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/stations/DSC_0871.JPG" alt="Second slide">

                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/stations/DSC_0873.JPG" alt="Third slide">

                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <br>
            <h3>MOT DE LA DIRECTION</h3>
            <p>
                Bienvenue dans la grande famille du GestionAHT. Nous sommes fiers de notre réussite et nous comptons vous transmettre notre enthousiasme<br> lors de chacune de vos visites à nos établissements.

                Toute notre équipe s’efforce à satisfaire chacun de nos clients afin que ceux-ci se sentent <br> plutôt comme des invités et non seulement comme de simples clients. Nous avons tous le même objectif :<br><br>
               <b> « Offrir un service rapide, courtois et attentionné afin que nos invités se sentent appréciés »</b><br><br>
                Fort de notre expérience de près de 30 ans dans le monde de l’alimentation de petites surfaces et des postes d’essence, nous sommes très <br>heureux de pouvoir compter sur une équipe dynamique, positive, expérimentée et passionnée.
                Toute l’équipe se joint à moi afin de vous <br>remercier pour votre confiance et nous espérons pouvoir vous compter parmi les amis fidèles de la grande famille du GestionAHT.<br>
                <br>
                Mr.Singh <br> GestionAHT <br> Petro Canada
            </p><br>
            <h3>NOS SERVICES</h3><br>
            <div class="services">
                <img src="images/Services/fierement-d'ici.png" alt="Fierement">
                <img src="images/Services/Loto-Quebec_small.png" alt="Lotto Quebec">
                <img src="images/Services/Petro-Points.png" alt="Petro Points">
                <img src="images/Services/Relais-Cafe_small.png" alt="Cafe">
                <img src="images/Services/Super-Doux_small.png" alt="Lave-Auto">
                <img src="images/Services/Super-Relais_small.png" alt="Depanneur">
                <img src="images/Services/Diesel.png" alt="Diesel">
            </div>

        </div>
    </div>
<?php
include "footer.php";
?>