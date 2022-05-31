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
        <article>
           <fieldset>
                <h3>Dérnière journée</h3>
                <?php 
        include 'read.php'
        ?>
    <table>
   <thead>
     <tr>
       <th>Semaine</th>
       <th>Journée</th>
       <th>Détail</th>
     </tr>
   </thead>
   <tbody>
     <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td><?php echo htmlspecialchars($row['semaine']); ?></td>
       <td><?php echo htmlspecialchars($row['journee']); ?></td>
       <td><?php echo htmlspecialchars($row['detail']); ?></td>
     </tr>
     <?php endwhile; ?>
   </tbody>
    </table>
            <a href="ajout.php"><button>Ajouter</button></a>
                </fieldset>
        </article>
        <article>
           <fieldset>
                <h3>Description du projet</h3>
                <p>ici Description projet</p>
            </fieldset>
        </article>        
        <article>
           <fieldset>
                <h3>Presentation de l'étudiant</h3>
                <p>Je m'appele alexis Auriou , j'ai 17 ans , éleves a saint-marie du port en premier SN en profesionel </p>
                <img id="maphoto"src="" alt="ma photo">
            </fieldset>
        </article>    
</body>
</html>