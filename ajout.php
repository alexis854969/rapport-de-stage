<!DOCTYPE html>
<html lang="fr">
<head>
    </div>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style10.css" /><!--
            ne pas oublier de changerle nom de la feuille de style
        -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('nav.php'); 
    ?>
     <h1>Ajout</h1>
     <form action="insert.php" method="GET">
        <fieldset>
            <label>Semaine</label><input class="formEnvoie" type="number" name ="semaine" placeholder="indiquez 1 pour semaine 1, 2 pour semaine, 2 etc.">
            <label>Jour</label><input  class="formEnvoie"type="text" name="journee" placeholder="Lundi, Mardi, Mercredi, Jeudi ou Vendredi">
            <label>Détail</label><input  class="formEnvoie" type="text" name="detail" placeholder="détailler votre journée">
            <input type="submit" id="btnEnvoyer" class="formEnvoie">
        </fieldset>
    </form>
</body>
</html>