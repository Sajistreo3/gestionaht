<?php

include 'header.php';
?>
<div class="main" style="margin-left: 0;">
    <p class="title">ACUEILLE</p>
    <hr>
    <div class="register">
        <img src="images/login.png" class="avatar">
        <h1>Registration</h1>
        <?php if (isset($_GET['error']) and $_GET['error'] == "emptyfields"): ?>
            <div class="alert alert-danger">
                <strong>Error!</strong> S.V.P Veuillez remplir le(s) donnée(s) nécessaire!
            </div>
            <?php header("refresh:5;url=registration.php");
        elseif (isset($_GET['error']) and $_GET['error'] == "username"): ?>
            <div class="alert alert-danger">
                <strong>Error!</strong> Le Nom d'utilisateur existe déjà!
            </div>
            <?php header("refresh:3;url=registration.php");
        elseif (isset($_GET['error']) and $_GET['error'] == "cpass"): ?>
            <div class="alert alert-danger">
                <strong>Error!</strong> La comfirmation du mot de pass ne se resemble pas!
            </div>
            <?php header("refresh:3;url=registration.php");
        endif; ?>
        <form method="post" action="core.php">
            <p>First Name :</p><input type="text" name="firstname" placeholder="Enter Your First Name">
            <p>Last Name :</p><input type="text" name="lastname" placeholder="Enter Your Last Name">
            <p>Email :</p><input type="email" name="email" placeholder="Enter Your Email">
            <p>Username :</p><input type="text" name="username" placeholder="Enter Your Username">
            <p>Password :</p><input type="password" name="password" placeholder="Enter the Password">
            <p>Confirm Password :</p><input type="password" name="cpassword" placeholder="Retype the Password">
            <?php if (isset($_SESSION['user']) && $_SESSION['user']['level'] <= 2): ?>
                <select class="level" name="level">
                    <option value="" hidden>Select a Level</option>
                    <option value="3">Inspector</option>
                    <option value="4">Manager</option>
                    <option value="5">Assistant Manager</option>
                    <option value="6">PSI</option>
                    <option value="7">Customer</option>
                </select>
            <?php endif; ?>
            <input type="submit" name="register" value="Register">
            <br><br>
        </form>
    </div>
</div>
<?php include "footer.php" ?>
