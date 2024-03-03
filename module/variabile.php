<?php
    require_once ("module/conectare-db.php");
    $link =  mysqli_connect($server , $user , $parola , $baza_de_date);
    $text = "";
    if(isset($_GET['text']))
      $text = mysqli_escape_string($link, $_GET['text']);
?>