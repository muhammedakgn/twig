<?php

require_once "database.php";
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('views');
$twig = new \Twig\Environment($loader);


$template = $twig->load('home.twig');
$sql = "SELECT id, adi, fiyat, img FROM urun ";
$result = $con->query($sql);

while($row = $result->fetch_assoc()) {
   $results []=$row;
  }



echo $template->render(array('users' => $results));



?>