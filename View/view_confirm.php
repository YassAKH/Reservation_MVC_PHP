<!--
Created by PhpStorm.
Autor: Yassine AKHARAZE
-->

<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
          crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <!--Our CSS-->
    <link rel="stylesheet" type="text/css" href="CSS\style.css">


    <title>Confirmation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="container-fluid">

    <div class="row">
        <div class="col-md-12">
            <h1>Bogota Airlines</h1>
            <h2><b>Confirmation des billets</b></h2>
            <text>
                Votre demande &agrave; bien &eacute;t&eacute; trait&eacute;e, merci de payer celle-ci au plus vite sur notre compte.
                <br>La somme attendue est de
            </text>

            <span class="error">
            <?php
            //the pattern is similar to the view_reserv. for any explanation, check that file
                $totalprice=0;
                for ($i=1;$i<=$reservation->getPlace();$i++)
                {
                    if($reservation->getPassengers()[$i-1][1]<25)
                    {
                        $totalprice=$totalprice+10;
                    }

                    if ($reservation->getPassengers()[$i-1][1]>25)
                    {
                        $totalprice=$totalprice+20;
                    }
                }
                if($reservation->assuranceCheck()=='Yes')
                {
                    $totalprice=$totalprice+5;
                }
                echo $totalprice;
                $totalprice=0;
            ?>
            </span>

            <text>
                &euro; sur le compte <span class="positiv">123-123456-12</span>
            </text>
        </div>
    </div>

    <div class="row">
        <br>
    </div>

    <div class="row">
        <div class="col-md-12">
        <form action="index.php" method="POST">
            <input type="hidden" name="step" value="4">

            <button class="btn btn-primary" name="return" value="Retour à la page précedente" >
                Retour &agrave; la page pr&eacute;c&eacute;dente
                <span class="glyphicon glyphicon-backward"></span>
            </button>
            <button class="btn btn-warning" name="cancel" type="submit" value="Retour &agrave; la page d'accueil" >
                Retour &agrave; la page d'acceuil

                <span class="glyphicon glyphicon-fast-forward"></span>
            </button>

        </form>
        </div>
    </div>


</div>
</body>
</html>