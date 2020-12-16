<?php
include "header.php";
?>
<style>
    div.home{
        height: 1500px;
    }
    div.services{
        text-align: center;
        margin-bottom: 40px;
    }
    div.services img{
        margin: 0 3%;
    }

    iframe
    {
        border-radius: 20px  ;
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
        <h1 style="text-align: center;"> Anjou</h1>
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
                        <img class="d-block w-100" src="images/stations/DSC_0873.JPG" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                          <img class="d-block w-100" src="images/stations/DSC_0877.JPG" alt="Second slide">
                          <div class="carousel-caption d-none d-md-block">

                          </div>
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100" src="images/stations/DSC_0878.JPG" alt="Third slide">
                          <div class="carousel-caption d-none d-md-block">

                          </div>
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
        <div class="inf">
        <p class="address">
            6901 Boulevard des Galeries d'Anjou, Anjou, QC H1M 2W1<br>
            Phone Number : +15143520079
        </p>
        <p>
          Manager : <a href="team.php">Mathieu</a>
        </p>
        </div>
        <div class="services">
            <img src="images/Services/fierement-d'ici.png" alt="Fierement">
            <img src="images/Services/Loto-Quebec_small.png" alt="Lotto Quebec">
            <img src="images/Services/Petro-Points.png" alt="Petro Points">
            <img src="images/Services/Relais-Cafe_small.png" alt="Cafe">
            <img src="images/Services/Super-Doux_small.png" alt="Lave-Auto">
            <img src="images/Services/Super-Relais_small.png" alt="Depanneur">
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2791.748637866023!2d-73.55891838443817!3d45.5955975791027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91e7ebf3abb97%3A0x4aa5235d97849506!2sPetro-Canada%20et%20Lave-Auto!5e0!3m2!1sen!2sca!4v1606089525218!5m2!1sen!2sca"
                width="100%" height="314"  allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    
</div>
<?php
include "footer.php";
?>

