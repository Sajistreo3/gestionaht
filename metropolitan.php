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


</style>
<div class="containers" style="margin-left: 0;">
    <div class="home">
        <h1 style="text-align: center;"> Metropolitan</h1>
        <hr style="border-top: 1px solid white;">
        <div class="slider">

            <img class="d-block w-100" src="images/stations/DSC_0872.JPG" alt="First slide">
        </div>
        <br>
        <div class="inf">
            <p class="address">
                5200 Boul Métropolitain E, Saint-Léonard, QC H1S 1A4<br>
                Phone Number : +1 (514) 725-7639
            </p>
            <p>
                Manager : <a href="team.php">Simo</a>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11170.023184279227!2d-73.589843!3d45.580376!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4d9235f10526132!2sPetro-Canada!5e0!3m2!1sen!2sca!4v1606096203106!5m2!1sen!2sca"
                width="100%" height="314"  tabindex="0"></iframe>
    </div>

</div>
<?php
include "footer.php";
?>

