<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mon anniversaire</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
   
    <h1> AUDIGE LEONIDE vous invite</h1>

    <h2> THEME DE LA SOIREE : OLD SCHOOL</h2>
    <p> Total Guests:<?php.include'count_guests.php';?></p>
    <button id ="savoirplus" onclick="displayExplanations()">en savoir plus</button>
   <p  id ="savoirplus1"> le thème de la fete a été choisi par vote depuis le 2 janvier 2023,<br> pour ceux qui voudraient apporter leur contribution à la réalisation de mon aniversaire,<br> vous etes prié de bien vouloir m'écrire en inbox.<br>Au plaisir de vous recevoir ce jour.</p>
  
<div class = shadowbox>
   
        <p>le samedi 24 février 2023 dès 19h 30 précises</p>


        <p> <a href="https://www.lemans.fr/dynamique/la-proximite/les-salles-municipales/le-
descriptif-des-salles-municipales/la-salle-du-jardin-des-plantes">lien pourla réservation</a></p>
   
</div>

</p>
<form  method="post"action="register.php">

      <label for="nom">nom</label>
      <input type="text" id="nom" name="nom" />
   
      <label for="nombre">nombre</label>
      <input type="number" id="nombre" name="nombre" />


      


     <input type ="submit" name ="submit" value ="send">
</form>


    <script src ="script.js"> </script>   
</body>
</html>
