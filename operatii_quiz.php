<?php
    session_start();
    $pagina = "quiz";
    require_once ("module/conectare-db.php");
    include "module/navigare.php";
    include "module/variabile.php";

    $limba = "ro";
    if(isset($_SESSION['limba']))
        $limba = $_SESSION['limba'];

    $_SESSION['numar'] = 2;

    if(isset($_POST['operatie']) && $_POST['operatie']=='adaugare')
    {
        $q = "INSERT INTO quiz3 (intrebare, v1, v2, v3, v4, raspuns) VALUES 
        ('{$_POST['intrebare']}', '{$_POST['v1']}', '{$_POST['v2']}', '{$_POST['v3']}','{$_POST['v4']}', '{$_POST['raspuns']}')";
        mysqli_query($link, $q);
        header("Location: operatii_quiz.php");
        die();
    }

    if(isset($_POST['operatie']) && $_POST['operatie']=='editare')
    {
        $q = "UPDATE quiz3  SET
            intrebare='{$_POST['intrebare']}', 
            v1 ='{$_POST['v1']}', 
            v2='{$_POST['v2']}', 
            v3 ='{$_POST['v3']}',
            v4 ='{$_POST['v4']}',
            raspuns = '{$_POST['raspuns']}'
        WHERE id='{$_POST['id']}'";
        mysqli_query($link, $q);
        header("Location: operatii_quiz.php");
        die();
    }

    $lista=[];
    $rez = mysqli_query($link, "SELECT * FROM quiz3 ORDER BY id");
    while($L=mysqli_fetch_assoc($rez))
        $lista[] = $L;
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

    h1, h3, .row{
        text-align:center;
        font-family: cambria;
    }

    a{
        text-decoration:none;
        color: white;
        display: inline;
    }

    a:hover {
        color: bisque;
    }

    th, td{
            text-align: center;
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
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="container">

        <?php
            if(isset($limba) && $limba==="ro")
            {
                $text3 = "Creează propriul tău quiz despre Agatha Christie!";
                $adaugare = "Adăugare întrebare";
                $enunt = "Enunț întrebare";
                $varianta = "Varianta";
                $raspuns ="Răspuns corect";
                $adauga = "Adaugă";
                $salvare = "Salvează";
                $modificare ="Modificare întrebare";
                $editare = "Editare";
                $nr = "Nr. crt.";
            }
            if(isset($limba) && $limba==="eng")
            {
                $text3 = "Create your own Agatha Christie quiz!";
                $adaugare = "Add question";
                $enunt = "Statement of the question";
                $varianta = "Option";
                $raspuns = "Right answer";
                $adauga = "Add";
                $salvare = "Save";
                $modificare ="Edit question";
                $editare = "Edit";
                $nr = "No.";
            }              
            if(isset($limba) && $limba==="fr")
            {
                $text3 = "Créez votre propre quiz Agatha Christie!";
                $adaugare = "Ajouter une question!";
                $enunt = "L'énoncé de la question";
                $varianta = "Option";
                $raspuns ="Bonne réponse";
                $adauga = "Ajouter";
                $salvare = "Sauver";
                $modificare ="Modifier la question";
                $editare = "Éditer";
                $nr = "No.";
            }              
            if(isset($limba) && $limba==="es")
            {
                $text3 = "¡Crea tu propio cuestionario de Agatha Christie!";
                $adaugare = "Agregar pregunta";
                $enunt = "El enunciado de la pregunta";
                $varianta = "Opción";
                $raspuns ="Respuesta correcta";
                $adauga = "Agregar";
                $salvare = "Guardar";
                $modificare ="Modificare întrebare";
                $editare = "Editar";
                $nr = "No.";
            }
        ?>

        <h1 class="p-3"><strong><?=$text3?></strong></h1>
        <button class="btn btn-dark p-2 mb-2">
            <a href="<?=basename($_SERVER['PHP_SELF'])?>?operatie=adaugare"> <?=$adaugare?> </a>
        </button>

        <?php

            if(isset($_GET['operatie']) && $_GET['operatie']=='adaugare')
            {
                ?>
                <form method="post" class="form-control" style="background-color:LightSteelBlue">
                    <h2> <?=$adaugare?> </h2>
                    <input type="hidden" name="operatie" value="adaugare">
                    <div>
                        <?=$enunt?>
                        <input name="intrebare" class="form-control">
                    </div>
                    <div>
                        <?=$varianta?> 1
                        <input name="v1" class="form-control">
                    </div>
                    <div>
                        <?=$varianta?> 2
                        <input name="v2" class="form-control">
                    </div>
                    <div>
                        <?=$varianta?> 3
                        <input name="v3" class="form-control">
                    </div>
                    <div>
                        <?=$varianta?> 4
                        <input name="v4" class="form-control">
                    </div>
                    <div>
                        <?=$raspuns?> 
                        <select id="raspuns" name="raspuns" class="form-control">
                            <option value="v1"> <?=$varianta?> 1 </option>
                            <option value="v2"> <?=$varianta?> 2</option>
                            <option value="v3"> <?=$varianta?> 3 </option>
                            <option value="v4"> <?=$varianta?> 4 </option>
                        </select>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary"> <?=$adauga?> </button>
                    </div>
                </form>
                <?php
            }

            if(isset($_GET['operatie']) && $_GET['operatie']=='editare')
            {
                $q = "SELECT * FROM quiz3 WHERE id='{$_GET['id']}'";
                $rez = mysqli_query($link, $q);
                $obiect = mysqli_fetch_assoc($rez);
                ?>
                <form method="post"  class="form-control" style="background-color:lavender">
                    <h2> <?=$modificare?> </h2>
                    <input type="hidden" name="operatie" value="editare">
                    <input type="hidden" name="id" value="<?=$obiect['id']?>">
                    <div>
                        <?=$enunt?>
                        <input name="intrebare" value="<?=$obiect['intrebare']?>" class="form-control">
                    </div>
                    <div>
                        <?=$varianta?> 1
                        <input name="v1" value="<?=$obiect['v1']?>" class="form-control">
                    </div>
                    <div>
                        <?=$varianta?> 2
                        <input name="v2" value="<?=$obiect['v2']?>" class="form-control">
                    </div>
                    <div>
                        <?=$varianta?> 3 
                        <input name="v3" value="<?=$obiect['v3']?>" class="form-control">
                    </div>
                    <div>
                        <?=$varianta?> 4
                        <input name="v4" value="<?=$obiect['v4']?>" class="form-control">
                    </div>
                    <div>
                        <?=$raspuns?> 
                        <input name="raspuns" value="<?=$obiect['raspuns']?>" class="form-control">
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-warning"> <?=$salvare?> </button>
                    </div>
                </form>
                <?php
            }
        ?>

        <table class="table  table-striped table-info">
            <tr>
                <th> <?=$nr?></th>
                <th> <?=$enunt?> </th>
                <th> <?=$varianta?> 1</th>
                <th> <?=$varianta?> 2 </th>
                <th> <?=$varianta?> 3 </th>
                <th> <?=$varianta?> 4 </th>
                <th>
                    <?php
                        if(isset($limba) && $limba==="ro")
                        {
                            ?>
                                <span> Operații </span>
                            <?php
                        }
                        if(isset($limba) && $limba==="eng")
                        {
                            ?>
                                <span> Operations</span>
                            <?php
                        }
                        if(isset($limba) && $limba==="es")
                        {
                            ?>
                                <span> Operaciones </span>
                            <?php
                        }
                        if(isset($limba) && $limba==="fr")
                        {
                            ?>
                                <span> Opérations </span>
                            <?php
                        }
                    ?>
                </th>
            </tr>

        <?php
            $cnt = 0;
            foreach ($lista as $obiect)
            {
                $cnt++;
                ?>
                    <tr>
                        <td> <?=$cnt?> </td>
                        <td> <?=$obiect['intrebare']?> </td>
                        <td> <?=$obiect['v1']?> </td>
                        <td> <?=$obiect['v2']?> </td>
                        <td> <?=$obiect['v3']?> </td>
                        <td> <?=$obiect['v4']?> </td>
                        <td> 
                            <button class="btn btn-warning">
                                <a href="<?=basename($_SERVER['PHP_SELF'])?>?operatie=editare&id=<?=$obiect['id']?>" style="color:black"> <?=$editare?> </a>
                            </button>
                        </td>
                    </tr>
                <?php
            }
        ?>

        </table>
    </div>      
    
    <?php
        include "module/footer.php";
    ?>

</body>
</html>