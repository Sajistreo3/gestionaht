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
                <strong>Error!</strong> Le Nom D'utilisateur ou le Mot de Pass ne Correspond pas a nos Donnée!
            </div>
            <?php header("refresh:5;url=index.php");
        endif; ?>
        <form method="post" action="core.php">
            <p>Username :</p><input type="text" name="username" placeholder="Enter Username">
            <p>Password :</p><input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="SignIn" value="Login">
            <br><br>
            <a href="#">Forgot password?</a><br>
            <a href="registration.php">Don't have an account? Register.</a>
        </form>
    </div>
</div>


<?php include "footer.php" ?>
