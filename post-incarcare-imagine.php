<?php
    session_start();
    $pagina = "galerie";
    include_once "module/functii.php";

    $limba = "ro";
    if(isset($_SESSION['limba']))
        $limba = $_SESSION['limba'];

    $erori = [];
    if(!isset($_FILES['imagine']))
    {
        if(isset($limba) && $limba==="ro")
            $erori[] = "Nu ai încărcat fișier.";
        if(isset($limba) && $limba==="eng")
            $erori[] = "You have not uploaded any files.";
        if(isset($limba) && $limba==="fr")
            $erori[] = "Vous n'avez téléchargé aucune photo.";
        if(isset($limba) && $limba==="es")
            $erori[] ="No has subido ninguna foto.";
    }
    else
    {
        if($_FILES['imagine']['error'] != 0)
        {
            if(isset($limba) && $limba==="ro")
                $erori[] = "Eroare la încărcare. Ai ales fișier?";
            if(isset($limba) && $limba==="eng")
                $erori[] = "Loading error. Have you chosen a file?";
            if(isset($limba) && $limba==="fr")
                $erori[] = "Erreur de chargement. Avez-vous choisi un fichier?";
            if(isset($limba) && $limba==="es")
                $erori[] ="Error de carga. ¿Elegiste un archivo?";
        }
        else
        {
            if(!EsteImagine($_FILES['imagine']['name']))
            {
                if(isset($limba) && $limba==="ro")
                    $erori[] = "Fișierul încărcat nu este imagine.";
                if(isset($limba) && $limba==="eng")
                    $erori[] = "Uploaded file is not an image.";
                if(isset($limba) && $limba==="fr")
                    $erori[] = "Le fichier téléchargé n'est pas une image.";
                if(isset($limba) && $limba==="es")
                    $erori[] ="El archivo subido no es una imagen.";
            }
            else
            {
                if($_FILES['imagine']['size'] > 512 * 1024)
                {
                    if(isset($limba) && $limba==="ro")
                        $erori[] = "Fișierul încărcat este prea mare.";
                    if(isset($limba) && $limba==="eng")
                        $erori[] = "The uploaded file is too large.";
                    if(isset($limba) && $limba==="fr")
                        $erori[] = "Le fichier téléchargé est trop volumineux.";
                    if(isset($limba) && $limba==="es")
                        $erori[] ="El archivo subido es demasiado grande.";
                }
                else
                {
                    $nume = NumeNou($_FILES['imagine']['name']);
                    if(!move_uploaded_file($_FILES['imagine']['tmp_name'] , "imagini_galerie/{$nume}"))
                    {
                        if(isset($limba) && $limba==="ro")
                            $erori[] = "Fișierul nu a putut fi copiat.";
                        if(isset($limba) && $limba==="eng")
                            $erori[] = "The file could not be copied.";
                        if(isset($limba) && $limba==="fr")
                            $erori[] = "Le fichier n'a pas pu être copié.";
                        if(isset($limba) && $limba==="es")
                            $erori[] ="No se pudo copiar el archivo.";
                    }
                }
            }
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Agatha Christie</title>
    <style>
        body {
            background-color: MistyRose; 
        }
        .header{
            position: relative;
        }
        .text {
            position: absolute;
            top: 75px;
            right: 100px;
            color: white;
        }
    </style>
</head>
<body>
    <div>
        <?php
            include "module/navigare.php";
        ?>
    </div>

    <div class="container">
        <?php
            if(Count($erori) == 0)
            {
                ?>
                    <div class="alert alert-success">
                        <?php
                            if(isset($limba) && $limba==="ro")
                            {
                                ?>
                                    <span> Fișierul a fost încărcat. </span>
                                <?php
                            }
                            if(isset($limba) && $limba==="eng")
                            {
                                ?>
                                    <span> The file has been uploaded. </span>
                                <?php
                            }
                            if(isset($limba) && $limba==="es")
                            {
                                ?>
                                    <span> El archivo ha sido subido. </span>
                                <?php
                            }
                            if(isset($limba) && $limba==="fr")
                            {
                                ?>
                                    <span> Le fichier a été téléchargé. </span>
                                <?php
                            }
                        ?>
                    </div>
                    <div class="bg-secondary p-5 my-5 text-center">
                        <img src="imagini_galerie/<?=$nume?>" class="img-fluid">
                    </div>
                    <div class="p-5 my-5 text-center">
                        <a href="galerie.php" class="btn btn-success">
                            <?php
                                if(isset($limba) && $limba==="ro")
                                {
                                    ?>
                                        <span> Înapoi la imagini </span>
                                    <?php
                                }
                                if(isset($limba) && $limba==="eng")
                                {
                                    ?>
                                        <span> Back to galery </span>
                                    <?php
                                }
                                if(isset($limba) && $limba==="es")
                                {
                                    ?>
                                        <span> Volver a las fotos </span>
                                    <?php
                                }
                                if(isset($limba) && $limba==="fr")
                                {
                                    ?>
                                        <span> Retour aux images </span>
                                    <?php
                                }
                            ?>
                        </a>
                    </div>
                <?php
            }
            else
            {
                foreach($erori as $E)
                {
                    ?>
                        <div class="alert alert-danger">
                            <?=$E?>
                        </div>
                    <?php
                }
                ?>
                    <div class="p-5 my-5 text-center">
                        <a href="galerie.php" class="btn btn-danger">
                            <?php
                                if(isset($limba) && $limba==="ro")
                                {
                                    ?>
                                        <span> Înapoi la imagini </span>
                                    <?php
                                }
                                if(isset($limba) && $limba==="eng")
                                {
                                    ?>
                                        <span> Back to galery </span>
                                    <?php
                                }
                                if(isset($limba) && $limba==="es")
                                {
                                    ?>
                                        <span> Volver a las fotos </span>
                                    <?php
                                }
                                if(isset($limba) && $limba==="fr")
                                {
                                    ?>
                                        <span> Retour aux images </span>
                                    <?php
                                }
                            ?>
                        </a>
                    </div>
                <?php
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
