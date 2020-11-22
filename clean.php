<?php
include "header.php";
$quetions = $db->query("SELECT * FROM tbl_questions WHERE type = '1';")->fetchAll(PDO::FETCH_ASSOC);
?>
<?php include "sidenav.php"; ?>
<div class="containers">
    <?php include "sidenavswitch.php"; ?>
    <p class="title">PROPRETÉ</p><br>
    <hr class="hrs">
    <form class="inspectios" action="core.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="type" value="1">
        <input type="hidden" name="evaluation" value="<?= time() ?>">
        <input type="hidden" name="site">
        <?php foreach ($quetions as  $keys => $quetion): ?>
            <input type="hidden" name="question[]" value="<?= $quetion['question_number'] ?>">
            <div class="questions">
                <h3><?= $quetion['question_number'] . " - " . $quetion['question'] ?></h3>
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
                </div><br>
                <input class="fileupload" style="color: white" type="file" name="photo_<?= $keys ?>[]" multiple>
                <br><br>
            </div>
        <?php endforeach; ?>
        <br><br>
        <input class="btn btn-danger" style="float: right" type="submit" name="action" value="Inspection Propeté">

    </form>
</div>
<?php include 'footer.php'; ?>
