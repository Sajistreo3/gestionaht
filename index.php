<?php include "header.php";

//test code1:

//echo '<html><body>';
//set_time_limit(1);
//$i = 0;
//while(++$i < 100000001){
//    if($i % 100000 == 0){
//        echo $i / 100000, "<br/>\n";
//    }
//}
//echo "done.<br/>\n";
// will not echo 'done.'.

//test code2:

//echo '<html><body>';
//set_time_limit(1);
//$i = 0;
//while(++$i < 100000001){
//    if($i % 100000 == 0){
//         set_time_limit(1);
//        echo $i / 100000, "<br/>\n";
//    }
//}
//echo "done.<br/>\n";
 //will echo 'done.'



?>
<div class="containers" style="margin-left: 0;">
    <p class="title">ACCUEIL</p>
    <hr class="hrs">
    <?php if(!isset($_SESSION['user'])): ?>
        <?php 
            include "homepage.php";
            include "login.php";
        ?>
    <?php endif; ?>
  </div>
  <?php include "footer.php" ?>
