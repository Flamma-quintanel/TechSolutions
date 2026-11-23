<?php include "inc/infos.php"; ?>
<?php require "inc/bdd.php"; ?>

<?php
$requete = $pdo->query("SELECT prenom, nom, service FROM utilisateurs ORDER BY nom");
$equipe = $requete->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
     <title>Texte de l'onglet</title>
     <link rel="stylesheet" href="css/Style.css"
   </head>
   <body>
     <?php include "inc/menu.php"; ?>
     <p>Une équipe à votre service depuis <?php echo $creation; ?></p>
     <p>Nous vous proposons des services de qualité pour la gestion de votre informatique.</p>
    <p>Soit <?php echo $experience; ?> ans d'expérience au service des entreprises de la région.</p>
      <?php foreach ($equipe as $u) { ?>
      <tr><ul>
        <li><?php echo $u["prenom"];?> <?php echo $u["nom"]; ?> <?php echo $u["service"]; ?></li>
      </tr></ul>
      <?php } ?>
    </table>
     <?php include "inc/pied.php"; ?>
    </body>
    