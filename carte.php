<?php
    session_start();
    $pagina = "carti";
    require_once ("module/conectare-db.php");
    include "module/navigare.php";
    include "module/variabile.php";

    $limba = "ro";
    if(isset($_SESSION['limba']))
        $limba = $_SESSION['limba'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="imagini/a.png">
    <title>Agatha Christie</title>
    <style>

    .header{
        position: relative;
    }

    .text {
        position: absolute;
        top: 75px;
        right: 100px;
        color: white;
    }

    h1{
        text-align:center;
    }

    body{
        min-height:1000px;
    }

    .footer {
        padding: 8px;
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-image: linear-gradient(to right, mistyrose , black,  mistyrose);
        color: white;
        text-align: center;
    }


    </style>
</head>
<body style="background-color: mistyrose ">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <?php
            $seria="";
            $an="";
            if(isset($limba) && $limba==="ro")
            {
              $seria="Seria";
              $an="Anul publicării";
            }
            else
            if (isset($limba) && $limba==="eng")
            {
              $seria="Collection";
              $an="First published";
            }
            else
            if (isset($limba) && $limba==="fr")
            {
              $seria="Collection";             
              $an="Année de publication";
            }
            else
            if (isset($limba) && $limba==="es")
            {
              $seria="Colección";
              $an="Año de publicacion";
            }
         

    /// romana 

  
    if(isset($limba) && $limba==="ro")
    {
        ?>
        <div>
                <?php
                    $q = "SELECT * FROM carti WHERE id='{$_GET['id']}'";
                    $rez = mysqli_query($link , $q);
                    while($L = mysqli_fetch_assoc($rez))
                    {
                        ?>
                            <div class="container">
                                <div class="card m-3 p-2" style="width: 100%;  background-color: SeaShell ">                                      
                                    <div class="row g-0 p-3">
                                        <div class="col-md-3">
                                            <img src="<?=$L['imagine_ro']?>" style="width: 95%"; class="img-fluid rounded-start" alt="Imaginea nu s-a putut încărca.">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <h1 class="card-title pt-2 pb-4"><?=$L['nume_ro']?></h1>
                                                <hr>
                                                <div class="row" style="text-align: center">
                                                    <div class="col"><em><?=$an?>:</em> <?=$L['data']?></div>
                                                    <div class="col"><em><?=$seria?>:</em> <?=$L['seria']?></div>
                                                </div>
                                                <hr>
                                                <div class="p-2 ">
                                                    <h4> Descriere: </h4>
                                                    <div style="text-align: justify; font-size:18px">
                                                    &emsp;&emsp; <?=$L['descriere_ro']?><div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                                                            
                                </div>  
                            </div>   
                        <?php
                    }
                ?>
            </div>
        <?php
    }

    /// engleza
    if(isset($limba) && $limba==="eng")
    {
        ?>
            <div>
                <?php
                    $q = "SELECT * FROM carti WHERE id='{$_GET['id']}'";
                    $rez = mysqli_query($link , $q);
                    while($L = mysqli_fetch_assoc($rez))
                    {
                        ?>
                            <div class="container">
                                <div class="card m-3 p-2" style="width: 100%;  background-color: SeaShell ">                                      
                                    <div class="row g-0 p-3">
                                        <div class="col-md-3">
                                            <img src="<?=$L['imagine']?>" style="width: 95%"; class="img-fluid rounded-start" alt="Imaginea nu s-a putut încărca.">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <h1 class="card-title pt-2 pb-4"><?=$L['nume']?></h1>
                                                <hr>
                                                <div class="row" style="text-align: center">
                                                    <div class="col"><em><?=$an?>:</em> <?=$L['data']?></div>
                                                    <div class="col"><em><?=$seria?>:</em> <?=$L['seria']?></div>
                                                </div>
                                                <hr>
                                                <div class="p-2 ">
                                                    <h4> Description: </h4>
                                                    <div style="text-align: justify; font-size:18px">
                                                    &emsp;&emsp; <?=$L['descriere']?><div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                                                            
                                </div>  
                            </div>   
                        <?php
                    }
                ?>
            </div>
        <?php
    }
    

    /// franceza
    if(isset($limba) && $limba==="fr")
    {
        ?>
        <div>
                <?php
                    $q = "SELECT * FROM carti WHERE id='{$_GET['id']}'";
                    $rez = mysqli_query($link , $q);
                    while($L = mysqli_fetch_assoc($rez))
                    {
                        ?>
                            <div class="container">
                                <div class="card m-3 p-2" style="width: 100%;  background-color: SeaShell ">                                      
                                    <div class="row g-0 p-3">
                                        <div class="col-md-3">
                                            <img src="<?=$L['imagine_fr']?>" style="width: 95%"; class="img-fluid rounded-start" alt="Imaginea nu s-a putut încărca.">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <h1 class="card-title pt-2 pb-4"><?=$L['nume_fr']?></h1>
                                                <hr>
                                                <div class="row" style="text-align: center">
                                                    <div class="col"><em><?=$an?>:</em> <?=$L['data']?></div>
                                                    <div class="col"><em><?=$seria?>:</em> <?=$L['seria']?></div>
                                                </div>
                                                <hr>
                                                <div class="p-2 ">
                                                    <h4> Description: </h4>
                                                    <div style="text-align: justify; font-size:18px">
                                                    &emsp;&emsp; <?=$L['descriere_fr']?><div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                                                            
                                </div>  
                            </div>   
                        <?php
                    }
                ?>
            </div>
        <?php
    }

    /// spaniola
    if(isset($limba) && $limba==="es")
    {
        ?>
        <div>
                <?php
                    $q = "SELECT * FROM carti WHERE id='{$_GET['id']}'";
                    $rez = mysqli_query($link , $q);
                    while($L = mysqli_fetch_assoc($rez))
                    {
                        ?>
                            <div class="container">
                                <div class="card m-3 p-2" style="width: 100%;  background-color: SeaShell ">                                      
                                    <div class="row g-0 p-3">
                                        <div class="col-md-3">
                                            <img src="<?=$L['imagine_es']?>" style="width: 95%"; class="img-fluid rounded-start" alt="Imaginea nu s-a putut încărca.">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <h1 class="card-title pt-2 pb-4"><?=$L['nume_es']?></h1>
                                                <hr>
                                                <div class="row" style="text-align: center">
                                                    <div class="col"><em><?=$an?>:</em> <?=$L['data']?></div>
                                                    <div class="col"><em><?=$seria?>:</em> <?=$L['seria']?></div>
                                                </div>
                                                <hr>
                                                <div class="p-2 ">
                                                    <h4> Descripción: </h4>
                                                    <div style="text-align: justify; font-size:18px">
                                                    &emsp;&emsp; <?=$L['descriere_es']?><div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                                                            
                                </div>  
                            </div>   
                        <?php
                    }
                ?>
            </div>
        <?php
    }

    ?>


    <?php
        include "module/footer.php";
    ?>
    
</body>

</html>