<?php include "inc/infos.php"; ?>
<?php
include "inc/infos.php";
require "inc/bdd.php";

$requete = $pdo->query("SELECT prenom, nom, service, role FROM utilisateurs ORDER BY nom");
$utilisateurs = $requete->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
         <title>Gestion des utilisateurs</title>
         <link rel="stylesheet" href="css/style.css">
     </head>
     <body>
        <?php include "inc/menu.php"; ?>
        <h1>Gestion des utilisateurs</h1>
        <p>Bienvenue sur la page de gestion des utilisateurs.</p>
        <p>ici vous pouvez gérer les comptes du personnel</p>
        <table>
      <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Service</th>
        <th>Rôle</th>
      </tr>
      <?php foreach ($utilisateurs as $u) { ?>
      <tr>
        <td><?php echo $u["prenom"]; ?></td>
        <td><?php echo $u["nom"]; ?></td>
        <td><?php echo $u["service"]; ?></td>
        <td><?php echo $u["role"]; ?></td>
      </tr>
      <?php } ?>
    </table>