<?php
    session_start();
    $pagina = "agatha";

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <title>Agatha Christie</title>
    <style>

      .header{
        position: relative;
      }
      .text {
            position: absolute;
            top: 30px;
            right: 50px;
            color: white;
        }

        body{
            background-color: black;
        }

        a:hover {
            color: red;
        }
        
        a{
            color:white;
            text-decoration: none;
        }

    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <?php
        $selectare="";
        $biografie="";
        $carti="";
        $personaje="";
        $galerie="";
        if(isset($limba) && $limba==="ro")
        {
            $selectare="Selectează limba";
            $biografie="Biografie";
            $carti="Cărți";
            $personaje="Personaje";
            $galerie="Galerie";
        }
        else
        if (isset($limba) && $limba==="eng")
        {
            $selectare="Select language";
            $biografie="Biography";
            $carti="Books";
            $personaje="Characters";
            $galerie="Galery";
        }
        else
        if (isset($limba) && $limba==="fr")
        {
            $selectare="Choisir la langue";
            $biografie="Biographie";
            $carti="Livres";
            $personaje="Personnages";
            $galerie="Galerie d'images";
        }
        else
        if (isset($limba) && $limba==="es")
        {
            $selectare="Seleccione el idioma";
            $biografie="Biografía";
            $carti="Libros";
            $personaje="Personajes";
            $galerie="Galería de imágenes";
        }
    ?>  
    
    <div class="header">
        <a href="index.php">
            <?php
                 if (isset($limba) && $limba==="eng")
                 {
                     ?>
                        <img src="imagini\queen_of_crime.png" width = "100%" alt="logo" class="logo">
                     <?php
                 }
                 if (isset($limba) && $limba==="ro")
                 {
                     ?>
                        <img src="imagini\reginacrimei.png" width = "100%" alt="logo" class="logo">
                     <?php
                 }
                 if (isset($limba) && $limba==="es")
                 {
                     ?>
                        <img src="imagini\reina_del_crimen.png" width = "100%" alt="logo" class="logo">
                     <?php
                 }
                 if (isset($limba) && $limba==="fr")
                 {
                     ?>
                        <img src="imagini\reine_du_crime.png" width = "100%" alt="logo" class="logo">
                     <?php
                 }
            ?>
           
        </a>
        <div class="text" style="font-family: cambria;">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white">
               <?=$selectare?>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark bg-dark" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="limba.php?limba=ro">Română</a></li>
                    <li><a class="dropdown-item" href="limba.php?limba=eng">English</a></li>        
                    <li><a class="dropdown-item" href="limba.php?limba=es">Español</a></li>
                    <li><a class="dropdown-item" href="limba.php?limba=fr">Français</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row pb-5">
            <div class="col-md-2 col-sm-1">
            </div>
            <div class="col-md-4 col-sm-6">
                <img src= "imagini/agathaChristie.jpg" width="100%">
            </div>
            <div class="col-1">
            </div>
            <div class="d-grid gap-2 col-md-3 col-sm-4 p-3">
                <button class="btn btn-lg rounded-pill border border-light border-3" > <a href="biografie.php"><?=$biografie?></a></button>
                <button class="btn btn-lg rounded-pill border border-light border-3" > <a href="carti.php"><?=$carti?></a></button>
                <button class="btn btn-lg rounded-pill border border-light border-3" > <a href="personaje.php"><?=$personaje?></a></button>
                <button class="btn btn-lg rounded-pill border border-light border-3" > <a href="galerie.php" ><?=$galerie?></a></button>
                <button class="btn btn-lg rounded-pill border border-light border-3" > <a href="quiz.php">Quiz</a></button>
            </div>
        </div>
    </div>
</body>
</html>