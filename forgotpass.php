<?php include "header.php";

?>
    <div class="containers">
        <div class="frame">
            <form action="enter_email.php" method="post">
                <img src="images/login.png" class="avatar">
                <h1>Reset password</h1>
                <div class="form-group">
                    <label>Your email address</label>
                    <input type="email" name="email">
                </div>
                <div class="form-group">
                    <button type="submit" name="reset-password" class="login-btn">Submit</button>
                </div>
            </form>
        </div>
    </div>


<?php include "footer.php" ?>