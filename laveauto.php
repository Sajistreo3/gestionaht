<?php
 include 'header.php';
$quetions = $db->query("SELECT * FROM tbl_questions WHERE type = '3';")->fetchAll(PDO::FETCH_ASSOC);
// include 'sidenav.php';
?>
<?php include "sidenav.php"; ?>
    <div class="containers">
        <?php include "sidenavswitch.php"; ?>
        <p class="title">LAVE-AUTO</p><br>
        <hr class="hrs">
        <form class="inspectios" action="core.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="type" value="3">
            <input type="hidden" name="evaluation" value="<?= time() ?>">
            <input type="hidden" name="site">
            <?php foreach ($quetions as $keys => $quetion): ?>
                <input type="hidden" name="question[]" value="<?= $quetion['question_number'] ?>">
                <div class="questions">
                    <h3><?= $quetion['question'] ?></h3>
                    <br><br><br>
                    <div style="display: inline-block; width: 100%;">
                        <p style="float: left" class="comment">Commataire : </p><input style="" class="comment" type="text" name="comment[]" value="" placeholder="(Optional)">
                    </div>
                    <div class="rselect">
                        <!-- <p class="total">/2</p> -->
                        <select class="result" name="result[]">
                            <?php for ($i = 0; $i <= ($quetion['total_score']); $i = $i + 0.5): ?>
                                <option value="<?= $i ?>"><?= $i . "/" . $quetion['total_score'] ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <br><br>
                    <input class="fileupload" style="color: white" type="file" name="photo_<?= $keys ?>[]" multiple><br><br>
                </div>
            <?php endforeach; ?>
            <br><br>
            <input class="btn btn-danger" style="float: right" type="submit" name="action" value="Inspecter Lave Auto" <?php if(!isset($_SESSION["site"])) {echo "disabled";} ?>>
        </form>
    </div>

<?php include "footer.php" ?>