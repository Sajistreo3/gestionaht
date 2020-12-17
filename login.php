<?php include "header.php";

?>

<div class="containers">
    <div class="frame">
        <img src="images/login.png" class="avatar">
        <h1>Login</h1>
        <?php if (isset($_GET['error']) and $_GET['error'] == "incorrect credentials"): ?>
            <style>
                div.frame{
                    height: 650px;
                }
            </style>
            <div class="alert alert-danger">
                <strong>Erreur!</strong> Le Nom D'utilisateur ou le Mot de Pass ne Correspond pas a nos Donnée!
            </div>
            <?php //header("refresh:5;url=index.php");
        elseif (isset($_GET['error']) and $_GET['error'] == "emailnotvalidated"): ?>
            <style>
                div.frame{
                    height: 650px;
                }
            </style>
            <div class="alert alert-danger">
                <strong>Erreur!</strong> Votre Courriel n'est pas validé encore. Verifiez Votre Courriel,
                <a style="color: blue;" href="http://localhost/Gestion_AHT/core.php?user=retryvalidation">Clickez Ici</a> pour Recevoir le Courriel a nouveau.
            </div>
            <?php //header("refresh:3;url=login.php");
        elseif (isset($_GET['success']) and $_GET['success'] == "emailvalidated"): ?>
            <style>
                div.frame{
                    height: 650px;
                }
            </style>
            <div class="alert alert-success">
                <strong>Succès!</strong> Votre Compt est validé, Vous pouvez vous Connecter.
            </div>
        <?php //header("refresh:3;url=login.php");
        elseif (isset($_GET['success']) and $_GET['success'] == "email_sent"): ?>
            <style>
                div.frame{
                    height: 650px;
                }
            </style>
            <div class="alert alert-success">
                <strong>Succès!</strong> Le Courriel a été envoyé!
            </div>
        <?php //header("refresh:3;url=login.php");
        elseif (isset($_GET['success']) and $_GET['success'] == "created"): ?>
            <style>
                div.frame{
                    height: 650px;
                }
            </style>
            <div class="alert alert-success">
                <strong>Succès!</strong> Votre Compt est Cree, S.V.P Verifiez Votre Courriel pour valider le Compt.
            </div>
        <?php //header("refresh:3;url=login.php");
        endif; ?>
        <form method="post" action="core.php">
            <p>Username :</p><input type="text" name="username" placeholder="Enter Username">
            <p>Password :</p><input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="SignIn" value="Login">
            <br><br>
        </form>
            <a type="submit" href="">Forgot password?</a><br>
            <a href="registration.php">Don't have an account? Register.</a>
    </div>
</div>


<?php include "footer.php" ?>
