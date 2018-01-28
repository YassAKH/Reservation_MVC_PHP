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


    <title>Validation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="container-fluid">

    <div class="row">
        <div class="col-md-12">
            <h1>Bogota Airlines</h1>
            <h2><b>Validation des R&eacute;servations</b></h2>
            <text>
                Nous vous prions de bien reconsulter vos donn&eacute;es afin d'&ecirc;tre sur qu'elle soient exacte.
                <br>Si vous constatez un probl&egrave;me, veuillez contacter l'administrateur.
            </text>
            <br>
            <br>
        </div>
    </div>

    <!--To apply CSS by use of the id "detail" ang define the size and the color of our form -->
    <div id="detail">
        <form action="index.php" method="POST">
            <div class="row">
                <div class="col-md-12">
                    <table class="table" style="text-align:center">
                        <label for="exampleInputName1">Récapitulatif</label>  <!--To make the title for the table-->
                        <tr>
                            <!--To make the title for the column-->
                            <th style="text-align:center">Destination:</th>
                            <th style="text-align:center">Nombre de places:</th>
                        </tr>

                        <tbody>
                        <tr>
                            <td>
                                <?php echo $reservation->getDestination(); ?>
                            </td>
                            <td>
                                <?php echo $reservation->getPlace(); ?>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table class="table" style="text-align:center">
                        <label for="exampleInputName1">Personnes</label>  <!--To make the title for the table-->
                        <tr>
                            <!--To make the title for the column-->
                            <th style="text-align:center">Nom:</th>
                            <th style="text-align:center">Age:</th>
                        </tr>

                        <tbody>
                        <tr>
                            <td>
                                <?php
                                //the pattern is similar to the view_reserv. for any explanation, check that file
                                    $people=$reservation->getPassengers();
                                    for ($i=1;$i<=$reservation->getPlace();$i++)
                                    {
                                        echo "<p >".$reservation->getPassengers()[$i-1][0]."</p>";
                                    }
                                ?>
                            </td>
                            <td>
                                <?php
                                    $people=$reservation->getPassengers();
                                    for ($i=1;$i<=$reservation->getPlace();$i++)
                                    {
                                        echo "<p >".$reservation->getPassengers()[$i-1][1]."</p>";
                                    }
                                ?>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <span class="positiv">
                <?php
                    if ($reservation->assuranceCheck()=='Yes')
                    {
                        echo 'Avec assurance annulation.';
                    }
                ?>
            </span>
            <span class="error">
                <?php
                    if ($reservation->assuranceCheck()!=='Yes')
                    {
                        echo 'Sans assurance annulation.';
                    }
                ?>
            </span>

            <div class="row">
                <br>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <input type="hidden" name="step" value="3">

                    <button class="btn btn-primary" name="return" type="submit" value="Retour à la page précedente">
                        <span class="glyphicon glyphicon-step-backward"></span>
                        Retour à la page précedente
                    </button>
                    <button class="btn btn-primary" name="submit" type="submit">
                        Confirmer
                        <span class="glyphicon glyphicon-thumbs-up"></span>
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-danger" name="cancel" type="submit" value="Annuler la réservation">
                        Annuler la réservation
                        <span class="glyphicon glyphicon-alert"></span>
                    </button>
                </div>
            </div>

        </form>

    </div>

</div>
</body>
</html>