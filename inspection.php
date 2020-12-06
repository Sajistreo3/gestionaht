<?php
include "header.php";

//$evaluations = $db->query("SELECT tbl_evaluation_id FROM tbl_inspection GROUP BY tbl_evaluation_id;")->fetchAll(PDO::FETCH_ASSOC);
$evaluations = $db->query("select tbl_inspection.id,tbl_inspection.type,tbl_inspection.question_number,tbl_inspection.score, tbl_inspection.comment, tbl_inspection.tbl_evaluation_id,
tbl_inspection.tbl_sites_id,tbl_users.firstname,tbl_users.lastname, tbl_sites.site_number, tbl_sites.address from tbl_inspection
INNER join tbl_users ON tbl_inspection.tbl_users_id = tbl_users.id
INNER join tbl_sites ON tbl_inspection.tbl_sites_id = tbl_sites.id GROUP BY tbl_evaluation_id;")->fetchAll(PDO::FETCH_ASSOC);

if (isset($_GET['eval_id']) && !empty($_GET['eval_id']) && isset($_GET['types']) && !empty($_GET['types'])) {
    $query = $db->prepare("SELECT * FROM tbl_questions WHERE type = :type;");
    $query->execute(array('type' => $_GET['types']));
    $quetions = $query->fetchAll(PDO::FETCH_ASSOC);
    //$query = $db->prepare("SELECT * FROM tbl_inspection WHERE tbl_evaluation_id = ? AND type = ?");
    $query = $db->prepare("select tbl_inspection.id,tbl_inspection.type,tbl_inspection.question_number,tbl_inspection.score, tbl_inspection.comment, tbl_inspection.tbl_evaluation_id,
tbl_inspection.tbl_sites_id,tbl_inspection.image, tbl_users.firstname,tbl_users.lastname, tbl_sites.site_number, tbl_sites.address from tbl_inspection
INNER join tbl_users ON tbl_inspection.tbl_users_id = tbl_users.id
INNER join tbl_sites ON tbl_inspection.tbl_sites_id = tbl_sites.id
WHERE tbl_evaluation_id = ? AND type = ?;");
    $query->execute([$_GET['eval_id'], $_GET['types']]);
    $evaluation = $query->fetchAll(PDO::FETCH_ASSOC);


    $result = array();
    array_walk($evaluation, function (&$value, $key) use (&$result) {
        $result[$value['question_number']] = $value;
    });
    //var_dump($evaluations);
    //var_dump($quetions);
    //var_dump($_GET['types']);
    //var_dump($result);
    $_SESSION['evalresult'] = $result;
}
//var_dump($evaluations);


//$imgs = ["q1" => 'icon.png,logo.png,login.png',"q2" => 'icon.png,logo.png,login.png',"q3" => 'icon.png,logo.png,login.png',"q4" => 'icon.png,logo.png,login.png',"q5" => 'icon.png,logo.png,login.png',]


?>

<!--<form action="">-->
<!--    <select name="type" id="">-->
<!--        <option value="">Select Type</option>-->
<!--        <option value="1">Netoyage</option>-->
<!--        <option value="2">Marchendise</option>-->
<!--    </select>-->
<!--    <select name="evaluation" id="">-->
<!--        <option value="">Select Inspection</option>-->
<!--        --><?php //foreach ($evaluations as $eval) : ?>
<!--            <option value="--><? //= $eval['tbl_evaluation_id'] ?><!--"> --><? //= date("Y-m-d h:i:sa", $eval['tbl_evaluation_id']) ?><!--</option>-->
<!--        --><?php //endforeach; ?>
<!--    </select>-->
<!--    <input type="submit">-->
<!--</form>-->

<div class="tab-content">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link  active" href="#clean" role="tab" data-toggle="tab"
               aria-selected="true">Propreté</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#goods" role="tab" data-toggle="tab">Marchendise</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#carwash" role="tab" data-toggle="tab">Lave Auto</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#secure" role="tab" data-toggle="tab">Sécurité</a>
        </li>
    </ul>


    <div role="tabpanel" class="tab-pane active" id="clean">
        <table class="table table-hover table-dark">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Date & Time</th>
                <th scope="col">Site</th>
                <th scope="col">Inspector</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($evaluations as $key => $eval): ?>
                <tr>
                    <?php if ($evaluations[$key]['type'] == 1): ?>
                        <th scope="row"><?= $eval['tbl_evaluation_id'] ?></th>
                        <td><?= date("Y-m-d h:i:s a", $eval['tbl_evaluation_id']) ?></td>
                        <td><?= $eval['site_number'] ?></td>
                        <td><?= $eval['firstname'] ?></td>
                        <td>
                            <form action="">
                                <input type="hidden" name="eval_id" value="<?= $eval['tbl_evaluation_id'] ?>">
                                <input type="hidden" name="types" value="<?= $evaluations[$key]['type'] ?>">
                                <input class="btn btn-primary editBtn" type="submit" name="open" value="Open">
                                <a class="btn btn-success" href="http://gestionaht.ca/generate_pdf.php">Open PDF</a>
                            </form>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div role="tabpanel" class="tab-pane active" id="goods">
        <table class="table table-hover table-dark">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Date & Time</th>
                <th scope="col">Site</th>
                <th scope="col">Inspector</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($evaluations as $key => $eval): ?>
                <tr>
                    <?php if ($evaluations[$key]['type'] == 2): ?>
                        <th scope="row"><?= $eval['tbl_evaluation_id'] ?></th>
                        <td><?= date("Y-m-d h:i:s a", $eval['tbl_evaluation_id']) ?></td>
                        <td><?= $eval['site_number'] ?></td>
                        <td><?= $eval['firstname'] ?></td>
                        <td>
                            <form action="">
                                <input type="hidden" name="eval_id" value="<?= $eval['tbl_evaluation_id'] ?>">
                                <input type="hidden" name="types" value="<?= $evaluations[$key]['type'] ?>">
                                <input class="btn btn-primary editBtn" type="submit" name="open" value="Open">
                                <a class="btn btn-success" href="http://gestionaht.ca/generate_pdf.php">Open PDF</a>
                            </form>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div role="tabpanel" class="tab-pane active" id="carwash">
        <table class="table table-hover table-dark">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Date & Time</th>
                <th scope="col">Site</th>
                <th scope="col">Inspector</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($evaluations as $key => $eval): ?>
                <tr>
                    <?php if ($evaluations[$key]['type'] == 3): ?>
                        <th scope="row"><?= $eval['tbl_evaluation_id'] ?></th>
                        <td><?= date("Y-m-d h:i:s a", $eval['tbl_evaluation_id']) ?></td>
                        <td><?= $eval['site_number'] ?></td>
                        <td><?= $eval['firstname'] ?></td>
                        <td>
                            <form action="">
                                <input type="hidden" name="eval_id" value="<?= $eval['tbl_evaluation_id'] ?>">
                                <input type="hidden" name="types" value="<?= $evaluations[$key]['type'] ?>">
                                <input class="btn btn-primary editBtn" type="submit" name="open" value="Open">
                                <a class="btn btn-success" href="http://gestionaht.ca/generate_pdf.php">Open PDF</a>
                            </form>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div role="tabpanel" class="tab-pane active" id="secure">
        <table class="table table-hover table-dark">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Date & Time</th>
                <th scope="col">Site</th>
                <th scope="col">Inspector</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($evaluations as $key => $eval): ?>
                <tr>
                    <?php if ($evaluations[$key]['type'] == 4): ?>
                        <th scope="row"><?= $eval['tbl_evaluation_id'] ?></th>
                        <td><?= date("Y-m-d h:i:s a", $eval['tbl_evaluation_id']) ?></td>
                        <td><?= $eval['site_number'] ?></td>
                        <td><?= $eval['firstname'] ?></td>
                        <td>
                            <form action="">
                                <input type="hidden" name="eval_id" value="<?= $eval['tbl_evaluation_id'] ?>">
                                <input type="hidden" name="types" value="<?= $evaluations[$key]['type'] ?>">
                                <input class="btn btn-primary editBtn" type="submit" name="open" value="Open">
                                <a class="btn btn-success" href="http://gestionaht.ca/generate_pdf.php">Open PDF</a>

                            </form>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<?php
if (isset($_GET['eval_id']) && !empty($_GET['eval_id']) && isset($_GET['types']) && !empty($_GET['types'])) :
//    var_dump($_GET['eval_id']);
//    var_dump($_GET['types']);
    ?>
    <div class="main">
        <div style="height: 35px">


        <?php if ($_GET['types'] == 1): ?>
            <p class="title">PROPERTE</p>
        <?php elseif ($_GET['types'] == 2): ?>
            <p class="title">MARCHENDISE</p>
        <?php elseif ($_GET['types'] == 3): ?>
            <p class="title">LAVE AUTO</p>
        <?php elseif ($_GET['types'] == 4): ?>
            <p class="title">SECURETE</p>
        <?php endif; ?>
        <h4 style="float: right ; color: white">Total Score : 24 /90 </h4>
        </div>
        <hr class="hrs">
        <form action="core.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="type" value="<?= $_GET['types'] ?>">
            <input type="hidden" name="evaluation" value="<?= $_GET['eval_id'] ?>">
            <?php foreach ($quetions

            as $quetion): ?>
            <input type="hidden" name="question[]" value="<?= $quetion['id'] ?>">
            <div class="questions">
                <h3><?= $quetion['question_number'] . " - " . $quetion['question'] ?></h3>
                <div class="rselect">
                    <p><?= $result[$quetion['question_number']]['score'] ?> / <?= $quetion['total_score'] ?></p>
                </div>
                <br><br><br>
                <div style="display: inline-block; width: 100%;">
                <p class="comment">Commataire : </p><input class="comment" type="text" name="comment[]"
                                                           value="<?= $result[$quetion['question_number']]['comment'] ?>"
                                                           placeholder="(Optional)">
                </div>
                <br><br>

                <div>
                    <!--                    <a href="images/logo.png" data-lightbox="image-1" data-title="My caption">Test</a>-->
                    <?php foreach (explode(',', $result[$quetion['question_number']]['image']) as $filename):
                        ?>
                        <?php if ($filename != ''): ?>
                            <a href="images/<?= $filename ?>" data-lightbox="roadtrip"><img width="126" src="images/<?= $filename ?>" alt="images"></a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

                <!--                    <div class="col-md-10 offset-md-1 qimg">-->
                <!--                    <table>-->
                <!--                        <tbody>-->
                <!--                        <tr>-->
                <!--                            --><?php //foreach (explode(',',$result[$quetion['question_number']]['image']) as $filename): ?>
                <!--                              <td>-->
                <!--                                  --><?php //if ($filename != ''): ?>
                <!--                                  <img src="images/--><? //= $filename ?><!--" alt="images">-->
                <!--                                  --><?php //endif; ?>
                <!--                              </td>-->
                <!--                            --><?php //endforeach; ?>
                <!--                        </tr>-->
                <!--                        </tbody>-->
                <!--                    </table>-->
                <!--                </div>-->
                <?php endforeach; ?>
        </form>
    </div>
<?php endif; ?>

<?php
/*if (isset($_GET['eval_id']) && !empty($_GET['eval_id']) && isset($_GET['types']) && !empty($_GET['types'])) :
    var_dump($_GET['eval_id']);
    var_dump($_GET['types']);
    */ ?><!--
    <div class="main">
        <p class="title">MARCHANDISE</p>
        <hr>
        <form action="core.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="type" value="<? /*= $_GET['types'] */ ?>">
            <input type="hidden" name="evaluation" value="<? /*= $_GET['eval_id'] */ ?>">
            <?php /*foreach ($quetions as $quetion): */ ?>
                <input type="hidden" name="question[]" value="<? /*= $quetion['id'] */ ?>">
                <div class="questions">
                    <h3><? /*= $quetion['question_number'] . " - " . $quetion['question'] */ ?></h3>
                    <div class="rselect">
                        <p><? /*= $result[$quetion['question_number']]['score'] */ ?> / <? /*= $quetion['total_score'] */ ?></p>
                    </div>
                    <br><br><br>
                    <p class="comment">Commataire : </p><input class="comment" type="text" name="comment[]"
                                                               value="<? /*= $result[$quetion['question_number']]['comment'] */ ?>"
                                                               placeholder="(Optional)">
                    <br><br>
                    <img src="images/<? /*= $result[$quetion['question_number']]['image'] */ ?>" alt="images" width="350">
                </div>
            <?php /*endforeach; */ ?>
        </form>
    </div>
--><?php /*endif; */ ?>

<?php include "footer.php" ?>
