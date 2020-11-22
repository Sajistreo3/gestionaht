<?php
include 'header.php';
?>
<div class="changepass">
    <img src="images/changepass.png" class="avatar">
    <h1>Change Password</h1>
    <form method="post" action="core.php">
        <p>Old Password :</p><input type="password" name="opass" placeholder="Enter old Password">
        <p>New Password :</p><input type="password" name="npass" placeholder="Enter new Password">
        <p>Confirm Password :</p><input type="password" name="cpass" placeholder="Retype new Password">
        <input type="submit" name="changePass" value="Change">
    </form>
</div>

<?php
include 'footer.php';
?>
