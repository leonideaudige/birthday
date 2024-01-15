<?php
$host="e-srv-lamp.univ-lemans.fr";
$user ="e2206068";
$database ="e2206068";
$password ="Mfn879vy";
$connection = new mysqli($host,$user,$password,$database);


if($connection->connect_error){
    die("connection failed:".$connection->connec_error);
}
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $nom=$_POST['nom'];
    $nombre=$_POST['nombre'];
  
    $sql="INSERT INTO `nobirthday-guests`(nom,nombre)VALUES('$nom','$nombre')";
    $connection->query($sql);
    if ($connection->query($sql) == TRUE) {
        echo "nouvel invité enregistré";
    } else {
        echo "Erreur:". $sql ."<br> ". $connection->error;
    }   
}    

$connection->close();  
?>