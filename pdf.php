<?php
$evaluations = $db->prepare("SELECT q.question_number, q.question, CONCAT(i.score,'/', q.total_score) as score,  i.comment, i.image, S.site_number, S.address, S.manager 
FROM tbl_inspection i
JOIN tbl_questions q
ON q.question_number = i.question_number and q.type = i.type
JOIN tbl_sites s
ON S.id = I.tbl_sites_id 
WHERE i.tbl_evaluation_id = ?")->fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
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
        }

        .eval{
            margin-left: 150px;
        }

        .score{
            display: inline;
            float: right;
        }
    </style>
</head>
<body>
<page size="A4">
    <div class="logo"><img src="images/iconnewblack.png" alt=""></div>
    <nav>
        <h4>13/02/2020</h4>
    </nav>
    <header>

        <h4 class="eval-type">Évaluation Propreté</h4>
        <h4 class="eval-result">56,5/73 (77,4%)</h4>
    </header>
    <hr>
    <div class="nav">
        <p>
            <b>Site</b><br>
            12177 - Maurice - Duplessis (MTL)
        </p>
        <p>
            <b>Gérant</b><br>
            Pratik
        </p>
        <p>
            <b>Température</b><br>
            7455 Lacordaire
        </p>
        <p>
            <b>P.S.I.</b><br>
            Shajeed
        </p>
        <p>
            <b>Inspecté par</b><br>
            Martin Laporte
        </p>
    </div>

    <div class="eval">
        <p class="question">
            <b>1 - Les panneaux de stainless des pompes sont-ils propres ?</b>
            <span style="float: right">1/2</span>
        </p>
        <p class="comment">
            Commentaire : P <br>
            <i>Voir photo(s) à la fin du rapport</i>
        </p>
    </div>




</page>

</body>
</html>