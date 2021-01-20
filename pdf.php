<?php
session_start();
include "dbConnection.php";
$query = $db->prepare("SELECT q.question_number, q.question,i.type, i.score, q.total_score,  i.comment, i.image, s.site_number, s.address, s.manager , u.firstname
FROM tbl_inspection i
LEFT JOIN tbl_questions q
ON q.question_number = i.question_number and q.type = i.type
JOIN tbl_sites s
ON s.id = i.tbl_sites_id 
JOIN tbl_users u
ON u.id = i.tbl_users_id
WHERE i.tbl_evaluation_id = ?");
$query->execute(array($_GET['eval_id']));
$evaluation = $query->fetchAll(PDO::FETCH_ASSOC);
$curScore =0;

foreach ($evaluation as $key) {
    $user = $key['firstname'];
    $manager = $key['manager'];
    $type = $key['type'];
    if ($type == 1) {
        $totalPer = 104;
    } elseif ($type == 2) {
        $totalPer = 100;
    } elseif ($type == 3) {
        $totalPer = 94;
    } elseif ($type == 4) {
        $totalPer = 100;
    }
    $site = $key['site_number'];
    $address = $key['address'];
    $curScore = $curScore + $key['score'];
    $curScorePer = $curScore/$totalPer*100;
}
//var_dump($evaluation);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
    <script type="text/javascript">
        <!--
        window.print();
        //-->
    </script>
    <style>
        body {
            background: rgb(204,204,204);
        }
        page {
            background: white;
            display: block;
            margin: 0 auto;
            margin-bottom: 0.5cm;
            box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
            padding: 10px 0px;
        }
        page[size="A4"] {
            width: 21cm;
            /*height: 29.7cm;*/
        }
        @media print {
            body, page {
                margin: 0;
                box-shadow: none;
            }
        }

        nav{
            position: fixed;
            width: 150px;
            height: 100%;
        }

        .nav{
            position: fixed;
            width: 150px;
            height: 100%;
        }

        .logo {
            width: 340px;
            margin: auto;
        }

        .logo img{
            width: 100%;
        }
        header {
            margin-left: 150px;
        }

        header h4{
            display: inline-flex;
            margin-bottom: 0;
        }
        header h4.eval-result{
            float: right;
            <?php if ($curScorePer >= 95):?>
                color: limegreen;
            <?php elseif ($curScorePer < 95 && $curScorePer >= 90):?>
                color: yellow;
            <?php elseif ($curScorePer < 90):?>
                color: red;
            <?php endif;?>
        }

        .eval{
            overflow: hidden;
            margin-left: 150px;
        }

        .score{
            display: inline;
            float: right;
        }

        .images{
            display: inline-block;
            width: 300px;
        }

        div.image{
            width: 100%;
        }
    </style>
</head>
<body>
<page size="A4">
    <div class="logo"><img src="images/iconnewblack.png" alt=""></div>
    <nav>
        <h4><?= date("d/m/Y", $_GET['eval_id']) ?></h4>
    </nav>
    <header>
        <h4 class="eval-type">Évaluation <?php  if ($type == 1){echo 'Propreté';} elseif ($type == 2) {echo 'Marchandise';} elseif ($type == 3) {echo 'Lave Auto';} elseif ($type == 4) {echo 'Securité';} ?></h4>
        <h4 class="eval-result"><?= $curScore ?>/<?php  if ($type == 1){echo '104';} elseif ($type == 2) {echo '100';} elseif ($type == 3) {echo '94';} elseif ($type == 4) {echo '100';} ?> (<?php  if ($type == 1){echo round($curScore/104*100, 1);} elseif ($type == 2) {echo round($curScore, 1);} elseif ($type == 3) {echo round($curScore/94*100, 1);} elseif ($type == 4) {echo round($curScore, 1);} ?>%)</h4>
    </header>
    <hr>
    <div class="nav">
        <p>
            <b>Site</b><br>
            <?= $site ?>
        </p>
        <p>
            <b>Gérant</b><br>
            <?= $manager ?>
        </p>
<!--        <p>-->
<!--            <b>Température</b><br>-->
<!--            --><?//= $address ?>
<!--        </p>-->
        <p>
            <b>Inspecté par</b><br>
            <?= $user ?>
        </p>
    </div>

    <?php foreach ($evaluation as $key): ?>
    <div class="eval">
        <p class="question">
            <?php if ($type != 3): ?>
                <b><?= $key['question_number'] ?> - <?= $key['question'] ?></b>
            <?php else: ?>
                <b><?= $key['question'] ?></b>
            <?php endif; ?>
            <span style="float: right"><?= $key['score'] ?>/<?= $key['total_score'] ?></span>
        </p>
        <p class="comment">
            Commentaire : <?= $key['comment'] ?> <br>
            <i>Voir photo(s) à la fin du rapport</i>
        </p>
    </div>
    <?php endforeach; ?>

    <br><br><br>
<div class="eval">

    <?php foreach ($evaluation as $key):
        if (!empty($key['image'])){
            foreach (explode(',',$key['image']) as $filename): ?>
    <div class="images">
                <p class="question">
                    <?php if ($type != 3): ?>
                        <b><?= $key['question_number'] ?> - <?= $key['question'] ?></b>
                    <?php else: ?>
                        <b><?= $key['question'] ?></b>
                    <?php endif; ?>
                </p>
                <div class="image">
                    <img style="width: 100%" src="images/inspections/<?= 'thumb_'.$filename ?>" alt="image">
                </div>
    </div>
            <?php endforeach; ?>
        <?php } endforeach; ?>

</div>
</page>
</body>
</html>