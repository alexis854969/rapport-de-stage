<?php

$host = 'localhost';
$dbname = 'projet';
$username = 'root';
$password = '';
  
$dsn = "mysql:host=$host;dbname=$dbname"; 
// récupérer tous les utilisateurs
$sql = "SELECT * FROM description WHERE journee='mardi' AND semaine=1";
try{
 $pdo = new PDO($dsn, $username, $password);
 $stmt = $pdo->query($sql);
 
 if($stmt === false){
  die("Erreur");
 }
 
}catch (PDOException $e){
  echo $e->getMessage();
}

$conn =null;

?>