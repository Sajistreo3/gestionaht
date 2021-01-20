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
        border-radius: 20px;
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
        <h1 style="text-align: center;"> Jarry</h1>
        <hr style="border-top: 1px solid white;">
        <div class="slider">

            <img class="d-block w-100" src="images/stations/Lacordaire-Jarry.JPG" alt="First slide">
        </div>
        <br>
        <div class="inf">
            <p class="address">
                7979 Boulevard Lacordaire, Saint-Léonard, QC H1R 2A1<br>
                Phone Number : +1 (514) 323-6122
            </p>
            <p>
                Manager : <a href="gestion_team.php">Patrick</a>
            </p>
        </div>
        <div class="services">
            <img src="images/Services/fierement-d'ici.png" alt="Fierement">
            <img src="images/Services/Loto-Quebec_small.png" alt="Lotto Quebec">
            <img src="images/Services/Petro-Points.png" alt="Petro Points">
            <img src="images/Services/Relais-Cafe_small.png" alt="Cafe">
            <img src="images/Services/Super-Relais_small.png" alt="Depanneur">
            <img src="images/Services/Diesel.png" alt="Diesel">
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11169.31731028916!2d-73.5911827!3d45.583924!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd4473f415bfafc4e!2sPetro-Canada!5e0!3m2!1sen!2sca!4v1606094357759!5m2!1sen!2sca"
                width="100%" height="314" frameborder="0"  aria-hidden="false" tabindex="0"></iframe>
    </div>

</div>
<?php
include "footer.php";
?>

