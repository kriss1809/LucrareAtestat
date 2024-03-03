<?php
    session_start();
    if(isset($_GET['limba']))
        if(in_array($_GET['limba'] , ['eng', 'ro', 'fr', 'es']))
            $_SESSION['limba'] = $_GET['limba'];
        
    $referrer = "index.php";
    if(isset($_SERVER['HTTP_REFERER']) && ! empty($_SERVER['HTTP_REFERER']))
        $referrer = $_SERVER['HTTP_REFERER'];
    header("Location: {$referrer}");

?>