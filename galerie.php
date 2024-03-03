<?php
    include_once "module/functii.php";
    session_start();
    $pagina = "galerie";
    
    $limba = "ro";
    if(isset($_SESSION['limba']))
        $limba = $_SESSION['limba'];

    $lista_imagini = []; 
    $dir = opendir("imagini_galerie");
    while($nf = readdir($dir)) 
    {
        if(is_file("imagini_galerie/{$nf}") && EsteImagine($nf))
            $lista_imagini[] = "imagini_galerie/{$nf}";
    }
    closedir($dir);
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
    body {
        background-color: MistyRose; 
    }
    body{
        min-height:1000px;
    }

    .footer {
        padding: 8px;
        left: 0;
        bottom: 0;
        width: 100%;
        background-image: linear-gradient(to right, mistyrose , black,  mistyrose);
        color: white;
        text-align: center;
    }

    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <div>
        <?php
            include "module/navigare.php";
        ?>
   </div>

   <div class="d-flex flex-column justify content-between">
            <div class="container p-3">
                <div class="row">
                <?php
                    foreach($lista_imagini as $I)
                    {
                        ?>
                        <div class="col p-1">
                            <img src="<?=$I?>" width="300px" height="300px">
                        </div>
                        <?php
                    }
                ?>
                </div>
                <hr>
                <div class="pt-2">
                    <?php
                        if(isset($limba) && $limba==="ro")
                        {
                            ?>
                                <h3> Încarcă imagine </h3>
                            <?php
                        }
                        if(isset($limba) && $limba==="eng")
                        {
                            ?>
                                <h3> Upload image </h3>
                            <?php
                        }
                        if(isset($limba) && $limba==="es")
                        {
                            ?>
                                <h3> Cargar foto </h3>
                            <?php
                        }
                        if(isset($limba) && $limba==="fr")
                        {
                            ?>
                                <h3> Télécharger une image </h3>
                            <?php
                        }
                    ?>

                </div>
                <form class="row mb-5" method="post" enctype="multipart/form-data" action="post-incarcare-imagine.php">
                    <div class="col">
                        <label for="fisier">
                            <div class="btn border border-secondary" style="background-color: lightgray">
                                <?php
                                    if(isset($limba) && $limba==="ro")
                                    {
                                        ?>
                                            <span> Adaugă imagine </span>
                                        <?php
                                    }
                                    if(isset($limba) && $limba==="eng")
                                    {
                                        ?>
                                            <span> Add image</span>
                                        <?php
                                    }
                                    if(isset($limba) && $limba==="es")
                                    {
                                        ?>
                                            <span> Añadir imagen</span>
                                        <?php
                                    }
                                    if(isset($limba) && $limba==="fr")
                                    {
                                        ?>
                                            <span> Ajouter une image </span>
                                        <?php
                                    }
                                ?>
                            </div>
                        </label>
                   
                        <button type="submit" class="btn btn-dark">
                        <?php
                            if(isset($limba) && $limba==="ro")
                            {
                                ?>
                                    <span> Încarcă </span>
                                <?php
                            }
                            if(isset($limba) && $limba==="eng")
                            {
                                ?>
                                    <span> Upload</span>
                                <?php
                            }
                            if(isset($limba) && $limba==="es")
                            {
                                ?>
                                    <span> Cargar </span>
                                <?php
                            }
                            if(isset($limba) && $limba==="fr")
                            {
                                ?>
                                    <span> Télécharger </span>
                                <?php
                            }
                        ?>
                        </button>
                        <input type="file" name="imagine" id="fisier" style="visibility:hidden;">
                    </div>
                </form>
            </div>
        </div>
    
   <?php
        include "module/footer.php";
    ?>

</body>
</html>