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
    //var_dump($quetions); vb
    //var_dump($_GET['types']);
    //var_dump($result);
    $_SESSION['evalresult'] = $result;
}
//var_dump($evaluations);

$curScore = 0.0;
$currID = 0;

//$imgs = ["q1" => 'icon.png,logo.png,login.png',"q2" => 'icon.png,logo.png,login.png',"q3" => 'icon.png,logo.png,login.png',"q4" => 'icon.png,logo.png,login.png',"q5" => 'icon.png,logo.png,login.png',]

?>


<style>
    ul.nav-tabs li.nav-item a{
        transition: 0.2s;
    }

    a.nav-link{
        color: white!important;
    }
    .rselect p{
        font-size: 32px;
    }

    @media only screen and (min-width: 1200px) {
        .main {
            padding: 50px 50px!important;
        }
    }
</style>
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
        <div class="card-body instable">
            <div class="table-responsive">
                <table id="type-one" class="table table-striped table-bordered" style="width:100%">
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
                        <?php if ($evaluations[$key]['type'] == 1): ?>
                            <tr>

                                <th scope="row"><?= $eval['tbl_evaluation_id'] ?></th>
                                <td><?= date("Y-m-d h:i:s a", $eval['tbl_evaluation_id']) ?></td>
                                <td><?= $eval['site_number'] ?></td>
                                <td><?= $eval['firstname'] ?></td>
                                <td style="text-align: center;">
                                    <form action="">
                                        <input type="hidden" name="eval_id" value="<?= $eval['tbl_evaluation_id'] ?>">
                                        <input type="hidden" name="types" value="<?= $evaluations[$key]['type'] ?>">
                                        <input type="hidden" name="site" value="<?= $evaluations[$key]['site_number'] ?>">
                                        <input type="hidden" name="inspector" value="<?= $evaluations[$key]['firstname'] ?>">
                                        <input class="btn btn-primary editBtn" type="submit" name="open" value="Open">
                                        <!--                                <a class="btn btn-success" href="pdf.php?eval_id=--><?//= $currID ?><!--">Open PDF</a>-->
                                    </form>
                                </td>

                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Date & Time</th>
                        <th scope="col">Site</th>
                        <th scope="col">Inspector</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="goods">
        <div class="card-body instable">
            <div class="table-responsive">
                <table id="type-two" class="table table-striped table-bordered" style="width:100%">
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
                        <?php if ($evaluations[$key]['type'] == 2): ?>
                            <tr>
                                <th scope="row"><?= $eval['tbl_evaluation_id'] ?></th>
                                <td><?= date("Y-m-d h:i:s a", $eval['tbl_evaluation_id']) ?></td>
                                <td><?= $eval['site_number'] ?></td>
                                <td><?= $eval['firstname'] ?></td>
                                <td style="text-align: center;">
                                    <form action="">
                                        <input type="hidden" name="eval_id" value="<?= $eval['tbl_evaluation_id'] ?>">
                                        <input type="hidden" name="types" value="<?= $evaluations[$key]['type'] ?>">
                                        <input type="hidden" name="site" value="<?= $evaluations[$key]['site_number'] ?>">
                                        <input type="hidden" name="inspector" value="<?= $evaluations[$key]['firstname'] ?>">
                                        <input class="btn btn-primary editBtn" type="submit" name="open" value="Open">
                                        <!--                                <a class="btn btn-success" href="pdf.php?eval_id=--><?//= $currID ?><!--">Open PDF</a>-->
                                    </form>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Date & Time</th>
                        <th scope="col">Site</th>
                        <th scope="col">Inspector</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="carwash">
        <div class="card-body instable">
            <div class="table-responsive">
                <table id="type-three" class="table table-striped table-bordered" style="width:100%">
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
                        <?php if ($evaluations[$key]['type'] == 3): ?>
                            <tr>
                                <th scope="row"><?= $eval['tbl_evaluation_id'] ?></th>
                                <td><?= date("Y-m-d h:i:s a", $eval['tbl_evaluation_id']) ?></td>
                                <td><?= $eval['site_number'] ?></td>
                                <td><?= $eval['firstname'] ?></td>
                                <td style="text-align: center;">
                                    <form action="">
                                        <input type="hidden" name="eval_id" value="<?= $eval['tbl_evaluation_id'] ?>">
                                        <input type="hidden" name="types" value="<?= $evaluations[$key]['type'] ?>">
                                        <input type="hidden" name="site" value="<?= $evaluations[$key]['site_number'] ?>">
                                        <input type="hidden" name="inspector" value="<?= $evaluations[$key]['firstname'] ?>">
                                        <input class="btn btn-primary editBtn" type="submit" name="open" value="Open">
                                        <!--                                <a class="btn btn-success" href="pdf.php?eval_id=--><?//= $currID ?><!--">Open PDF</a>-->
                                    </form>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Date & Time</th>
                        <th scope="col">Site</th>
                        <th scope="col">Inspector</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="secure">
        <div class="card-body instable">
            <div class="table-responsive">
                <table id="type-four" class="table table-striped table-bordered" style="width:100%">
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
                        <?php if ($evaluations[$key]['type'] == 4): ?>
                            <tr>
                                <th scope="row"><?= $eval['tbl_evaluation_id'] ?></th>
                                <td><?= date("Y-m-d h:i:s a", $eval['tbl_evaluation_id']) ?></td>
                                <td><?= $eval['site_number'] ?></td>
                                <td><?= $eval['firstname'] ?></td>
                                <td style="text-align: center;">
                                    <form action="">
                                        <input type="hidden" name="eval_id" value="<?= $eval['tbl_evaluation_id'] ?>">
                                        <input type="hidden" name="types" value="<?= $evaluations[$key]['type'] ?>">
                                        <input type="hidden" name="site" value="<?= $evaluations[$key]['site_number'] ?>">
                                        <input type="hidden" name="inspector" value="<?= $evaluations[$key]['firstname'] ?>">
                                        <input class="btn btn-primary editBtn" type="submit" name="open" value="Open">
                                        <!--                                <a class="btn btn-success" href="pdf.php?eval_id=--><?//= $currID ?><!--">Open PDF</a>-->
                                    </form>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Date & Time</th>
                        <th scope="col">Site</th>
                        <th scope="col">Inspector</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>


<?php
if (isset($_GET['eval_id']) && !empty($_GET['eval_id']) && isset($_GET['types']) && !empty($_GET['types'])) :
//    var_dump($_GET['eval_id']);
//    var_dump($_GET['types']);
    ?>
    <div class="main">
        <div style="height: 35px">


<?php
foreach ($result as $quetion) {

    $curScore = $curScore + $result[$quetion['question_number']]['score'];
    $currID = $result[$quetion['question_number']]['tbl_evaluation_id'];
}
//$_SESSION['ins_type'] = $_GET['types'];
?>

        <?php if ($_GET['types'] == 1): ?>
            <p class="title">PROPERTE - <?= $currID ?></>
                <h4 class="totalresult">Total Score : <?= $curScore ?> /104 </h4>
        <?php elseif ($_GET['types'] == 2): ?>
            <p class="title">MARCHENDISE - <?= $currID ?></p>
            <h4 class="totalresult">Total Score : <?= $curScore ?> /100 </h4>
        <?php elseif ($_GET['types'] == 3): ?>
            <p class="title">LAVE AUTO - <?= $currID ?></p>
            <h4 class="totalresult">Total Score : <?= $curScore ?> /94 </h4>
        <?php elseif ($_GET['types'] == 4): ?>
            <p class="title">SECURETE - <?= $currID ?></p>
            <h4 class="totalresult">Total Score : <?= $curScore ?> /100 </h4>
        <?php endif; ?>
        </div>
        <br>
        <hr class="hrs">
        <form action="core.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="type" value="<?= $_GET['types'] ?>">
            <input type="hidden" name="evaluation" value="<?= $_GET['eval_id'] ?>">
            <a class="btn btn-success" href="pdf.php?eval_id=<?= $currID ?>">Open PDF</a>
            <br><br>
            <?php foreach ($quetions as $quetion):
                if(empty($result[$quetion['question_number']]))
                    continue;
            ?>

<!--            <input type="hidden" name="question[]" value="--><?//= $quetion['id'] ?><!--">-->
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
                    <?php foreach (explode(',', $result[$quetion['question_number']]['image']) as $filename):
                        ?>
                        <?php if ($filename != ''): ?>
                            <a href="images/inspections/thumb_<?= $filename ?>" data-lightbox="roadtrip"><img width="126" src="images/inspections/thumb_<?= $filename ?>" alt="images"></a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <?php endforeach; ?>
        </form>
    </div>
<?php endif; ?>


<?php include "footer.php" ?>
