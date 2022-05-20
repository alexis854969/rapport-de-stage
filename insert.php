<?php

$servername = 'localhost';
$username = 'root';
$password = '';

//On essaie de se connecter
try{
    $conn = new PDO("mysql:host=$servername;dbname=projet", $username, $password);
    //On définit le mode d'erreur de PDO sur Exception
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->beginTransaction();
    
    $semaine= $_GET["semaine"];
    $journee= $_GET["journee"];
    $detail = $_GET["detail"];
    
$sql = "INSERT INTO description(semaine,journee,detail)
VALUES($semaine,'".$journee."','".$detail."')";

$conn->exec($sql);
echo 'Entrée ajoutée dans la table';
}
/*On capture les exceptions si une exception est lancée et on affiche
 *les informations relatives à celle-ci*/
catch(PDOException $e){
    $conn->rollBack();
    echo "Erreur : " . $e->getMessage();
}

//on ferme la connexion
$conn =null;

header("refresh:1;url=accueil.php" );


?>