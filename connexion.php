<?php include "inc/infos.php"; ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
     <title>Texte de l'onglet</title>
     <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
    <?php include "inc/menu.php"; ?>
    <h1>espace salarié</H1>
    <p>Connectez-vous avec votre identifiant</p>
    <form action="verifier.php" method="post">
      <p>
        <label for="identifiant">Identifiant</label><br>
        <input type="text" id="identifiant" name="identifiant" required>
      </p>
      <p>
        <label for="motdepasse">Mot de passe</label><br>
        <input type="password" id="motdepasse" name="motdepasse" required>
      </p>
      <p>
        <button type="submit">Se connecter</button>
      </p>
    </form> <?php include "inc/pied.php"; ?>