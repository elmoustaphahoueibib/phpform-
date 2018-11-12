<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RECUP</title> <!-- titre de la page -->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>

<body>




<?php
/**
 * Created by PhpStorm.
 * User: comgoon
 * Date: 8/9/18
 * Time: 10:36 AM
 */

echo "<p align='center'>RECAP DE VOTRE COMMANDE:</p>";
$fname = $_POST['nom'];
$lname = $_POST['prenom'];
echo " Hello! {$fname}, {$lname}<br>Merci d'avoir commander chez nous !";


$nbrSand = $_POST['nbrSand'];
$addresse = $_POST['addresse'];
$viandeType = $_POST['viandeType'];

?>



<ul class="list-group">
    <li class="list-group-item">
        <?php echo "{$nbrSand}";?>
        Sandwitch(s)
    </li>

    <li class="list-group-item">
        A l'Addresse: <?php echo "{$addresse}";?>
    </li>

    <li class="list-group-item">
        Le(s) sandwitch(s) est/sont avec du/de : <?php echo "{$viandeType}";?>
    </li>

<?php
if ($nbrSand >=10){
    $addition  = ($nbrSand * 4) - (10*($nbrSand * 4)/100). " dt". " <i>(vous beneficiez d'une remise de 10%)</i>";
}else{
    $addition  = $nbrSand * 4;
}
?>
<div  class="alert alert-primary" role="alert">
    Votre addition est en DT :
    <?php echo $addition?>
</div>

<br>

<div class="alert alert-success"> <strong>Note: </strong>Les sandwitch(s) seront prêt(s) dans: <strong>5mn</strong> </div>


<?PHP
echo "<br>";
$cardName = $_FILES['card']['name'];
$cardName = pathinfo($cardName, PATHINFO_FILENAME);
$newCardName = $cardName . date("Y m d h i s a");
?>
<div class="alert alert-info">
    <?php
    echo "<br>Votre commande a pour nom unique: $newCardName";
    ?>

</div>

</body>
</html>

