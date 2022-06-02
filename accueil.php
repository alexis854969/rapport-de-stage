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
   <nav> 
    <ul>
        <li>
            <a href="accueil.php">Accueil</a>
        </li>
        <li class="menu-deroulant">
            <a href=#>Semaines</a>
            <ul class="sous-menu">
                <li>
                    <a href="semaine1.php">Semaine 1</a>
                </li>
                <li>
                    <a href="semaine2.php">Semaine 2</a>
                </li>
                <li>
                    <a href="semaine3.php">Semaine 3</a>
                </li>
                <li>
                    <a href="semaine4.php">Semaine 4</a>
                </li>
                <li>
                    <a href="semaine5.php">Semaine 5</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="ajout.php">Ajouter</a>
        </li>
        <li>
            <a href="bilan.php">Bilan</a>
        </li>
        <li>
            <a href="entreprise.php">Entreprise</a>
        </li>
        <li>
            <a href="source.php">Source</a>
        </li>
    </ul>
</nav>
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
   </article>    
      <table>
     <thead>
       <tr>
         <th>Semaine</th>
         <th>Journée</th>
         <th>Détail</th>
       <article>
     <fieldset>
     <h3>Liste des journée</h3>
     </tr>
    </thead>
      <tbody>
                <tr>
          <td>1</td>
          <td>lundi</td>
          <td>Visite et explication de la société Innlog 11h exercices de programmation 14h J’ai commencé à développer un site en HTML sur l’utilisation du code 16h Entraînement avec des exercices de programmation  Notes : J’ai commencé à apprendre HTML grâce à des exercices et appris la base du CSS. Je me suis documenté</td>
        </tr>
             </tbody>
     </table>
  </body>
</html>