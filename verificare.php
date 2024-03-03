<?php
    session_start();
    require_once ("module/conectare-db.php");
    include "module/variabile.php";

    $q = "SELECT * FROM quiz WHERE nr='{$_SESSION['contor']}'";
    $rez = mysqli_query($link , $q);
    while($L = mysqli_fetch_assoc($rez))
    {
        
        if(isset($_GET['rasp']) && $_GET['rasp']==$L['raspuns'])
             $_SESSION['total']++;
    }

    $_SESSION['contor']++;

    if($_SESSION['contor'] <=  $_SESSION['nr1'])
    {
         $referer = "./intrebare.php?nr={$_SESSION['contor']}";
    }
    else
    {
        $referer = "./rezultat.php";
    }
        
    header("Location: {$referer}");

?>
