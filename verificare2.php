<?php
    session_start();
    require_once ("module/conectare-db.php");
    include "module/variabile.php";

    $q = "SELECT * FROM quiz2 WHERE nr='{$_SESSION['contor2']}'";
    $rez = mysqli_query($link , $q);
    while($L = mysqli_fetch_assoc($rez))
    {
        
        if(isset($_GET['rasp']) && $_GET['rasp']==$L['raspuns'])
             $_SESSION['total2']++;
    }

    $_SESSION['contor2']++;

    if($_SESSION['contor2'] <=  $_SESSION['nr2'])
    {
         $referer = "./intrebare2.php?nr={$_SESSION['contor2']}";
    }
    else
    {
        $referer = "./rezultat2.php";
    }
        
    header("Location: {$referer}");

?>
