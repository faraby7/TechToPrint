<?php
session_start();

$monfichier = fopen('compteur.txt', 'r+');

$ligne = fgets($monfichier);
if($ligne == "9"){

    $ligne=0;
}
$ligne=$ligne+1;

fseek($monfichier, 0);
fputs($monfichier, $ligne);
fclose($monfichier);

$ligneString = strval($ligne);
$_SESSION['id_image'] = $ligneString .".jpg";

$data = $_REQUEST['base64data'];
$image = explode('base64,',$data);
file_put_contents($_SESSION['id_image'],base64_decode($image[1]));

?>

