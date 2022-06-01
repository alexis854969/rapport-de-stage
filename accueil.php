<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
     <link rel="stylesheet" href="style10.css"/>
      <!-- ne pas oublier de changerle nom de la feuille de style-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title> 
</head> 
 <body>
   <?php include('nav.php'); ?>
   <?php  include 'read.php'; ?>
      <article>
          <fieldset id="accueilFieldset">
             <h3>Description du projet</h3>
             <p>Un sites web qui permet de noter,lire,crée ses journée de stage. grace a un script qui note les journée sur une pages semaine</p>
             <p>Les technologie utiliser sont :</p>
             <ul id="lstTechno"> 
              <li> front-end : css3/html5  </li>
              <li> backend : php7   </li>
              <li> bdd : MySql   </li>
            </ul>
             <div id="navDescription">
              <a href="semaine1.php" ><button class="btnSemaine">semaine 1</button></a>
              <a href="semaine2.php" ><button class="btnSemaine">semaine 2</button></a>
              <a href="semaine3.php" ><button class="btnSemaine">semaine 3</button></a>
              <a href="semaine4.php" ><button class="btnSemaine">semaine 4</button></a>
              <a href="semaine5.php" ><button class="btnSemaine">semaine 5</button></a>
              <a href="ajout.php"><button id="btnAjouter">Ajouter</button></a>
            </div>
            </fieldset>
           
        </article>        
        <article>
           <fieldset>
                <h3>Presentation de l'étudiant</h3>
                <p>Je m'appele alexis Auriou , j'ai 17 ans , éleves a saint-marie du port en premier SN en profesionel </p>
                <img id="maphoto"src="" alt="ma photo">
            </fieldset>       
        </article>  
   </article>    
  </body>
</html>