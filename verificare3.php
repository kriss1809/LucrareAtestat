<?php
    session_start();
    require_once ("module/conectare-db.php");
    include "module/variabile.php";

    $q = "SELECT * FROM quiz3 WHERE id='{$_SESSION['contor3']}'";
    $rez = mysqli_query($link , $q);
    while($L = mysqli_fetch_assoc($rez))
    {
        
        if(isset($_GET['rasp']) && $_GET['rasp']==$L['raspuns'])
             $_SESSION['total3']++;
    }

    $_SESSION['contor3']++;

    if($_SESSION['contor3'] <=  $_SESSION['nr3'])
    {
         $referer = "./intrebare3.php?id={$_SESSION['contor3']}";
    }
    else
    {
        $referer = "./rezultat3.php";
    }
        
    header("Location: {$referer}");

?>
