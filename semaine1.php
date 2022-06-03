<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style10.css" /><!--
            ne pas oublier de changerle nom de la feuille de style
        -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('nav.php');?>

    <article>
        <fieldset>
            <h3>lundi </h3>
            <?php include 'read11.php'?>
            <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
            <p><?php echo htmlspecialchars($row['detail']); ?></p>
            <?php endwhile; ?>
        </fieldset>
    </article>

    <article>
        <fieldset>
            <h3>Mardi </h3>
            <?php include 'read12.php'?>
            <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
            <p><?php echo htmlspecialchars($row['detail']); ?></p>
            <?php endwhile; ?>
        </fieldset>
    </article>

    <article>
        <fieldset>
            <h3>Mercredi </h3>
            <?php include 'read13.php'?>
            <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
            <p><?php echo htmlspecialchars($row['detail']); ?></p>
            <?php endwhile; ?>
        </fieldset>
    </article>

    <article>
        <fieldset>
            <h3>Jeudi </h3>
            <?php include 'read14.php'?>
            <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
            <p><?php echo htmlspecialchars($row['detail']); ?></p>
            <?php endwhile; ?>
        </fieldset>
    </article>

    <article>
        <fieldset>
            <h3>Vendredi </h3>
            <?php include 'read15.php'?>
            <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
            <p><?php echo htmlspecialchars($row['detail']); ?></p>
            <?php endwhile; ?>
        </fieldset>
    </article>
     
        


        
</body>
</html>