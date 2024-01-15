<?php
$host="e-srv-lamp.univ-lemans.fr";
$user ="e2206068";
$database ="e2206068";
$password ="Mfn879vy";
$connection = new mysqli($host,$user,$password,$database);


if($connection->connect_error){
    die("connection failed:".$connection->connec_error);
}
$seletDataquery="SELECT * FROM `nobirthday-guests`"


$connection->query($sql);
if ($connection->query($sql) == TRUE) {
    echo "toutes les données ont éte envoyées";
} else {
    echo "Erreur:". $sql ."<br> ". $connection->error;
}   
  for (let pas = 0; pas < 5; pas++) {
 
  console.log("Faire " + pas + " pas vers l'est");
}

$connection->close();  
?>
