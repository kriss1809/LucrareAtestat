<?php
     session_start();
     $pagina = "quiz";
     require_once ("module/conectare-db.php");
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
    h3, .row{
        text-align:center;
        font-family: cambria;
    }

    a{
        text-decoration:none;
        color: white;
    }

    label, label div{
        width: 100%;
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

    <div>
        <?php
            include "module/navigare.php";
        ?>
   </div>

    <?php
        $q = "SELECT * FROM quiz3 WHERE id='{$_SESSION['contor3']}'";
        $rez = mysqli_query($link , $q);
        while($L = mysqli_fetch_assoc($rez))
        {
            ?>
            <div class="container mt-5 p-3 col-9" style="background-image: linear-gradient(to bottom right, LightSteelBlue, PaleTurquoise); border-radius: 21px;">
                <form method="get" action="verificare3.php?id=<?=$_SESSION['contor3']?>">
                <h3 class="pt-3"><?=$L['id']?>. <?=$L['intrebare']?> </h3>
                <div class="row p-2">
                    <div class="col-4">
                    </div>
                    <div class="col-4 form-check">
                        <input class="form-check-input" type="radio" name="rasp" id="a" value="v1">
                        <label class="form-check-label" for="a">
                        <div class="btn btn-light"><?=$L['v1']?></div>
                        </label>                                   
                    </div>
                    <div class="col-4">
                </div>
                </div>

                <div class="row p-2">
                    <div class="col-4">
                    </div>
                    <div class="col-4 form-check">
                        <input class="form-check-input" type="radio" name="rasp" id="b" value="v2">
                        <label class="form-check-label" for="b">
                        <div class="btn btn-light"><?=$L['v2']?></div>
                        </label>                                   
                    </div>
                    <div class="col-4">
                </div>
                </div>

                <div class="row p-2">
                    <div class="col-4">
                    </div>
                    <div class="col-4 form-check">
                    <input class="form-check-input" type="radio" name="rasp"id="c" value="v3">
                    <label class="form-check-label" for="c">
                            <div class="btn btn-light"><?=$L['v3']?></div>
                    </label>                                   
                </div>
                    <div class="col-4">
                </div>
                </div>

                <div class="row p-2">
                    <div class="col-4">
                    </div>
                    <div class="col-4 form-check">
                        <input class="form-check-input" type="radio" name="rasp" id="d" value="v4">
                        <label class="form-check-label" for="d">
                            <div class="btn btn-light"><?=$L['v4']?></div>
                        </label>                                   
                    </div>
                    <div class="col-4">
                    </div>
                </div>


                <?php
                    $next = "Următoarea întrebare";
                    $result = "Vezi rezultat";
                    if(isset($_SESSION['limba']) && $_SESSION['limba']=="ro")
                    {
                        $next = "Următoarea întrebare";
                        $result = "Vezi rezultat";
                    } 
                    if(isset($_SESSION['limba']) && $_SESSION['limba']=="eng")
                    {
                        $next = "Next question"; 
                        $result = "See result";
                    }
                    if(isset($_SESSION['limba']) && $_SESSION['limba']=="fr")
                    {
                        $next = "Question suivante"; 
                        $result = "Voir le résultat";
                    }
                    if(isset($_SESSION['limba']) && $_SESSION['limba']=="es")
                    {
                        $next = "Próxima pregunta"; 
                        $result = "Ver resultado";
                    }
                        
                ?>

                <div class="text-end">
                    <button class="btn btn-dark" type="submit"> 
                        <?php
                            if($_SESSION['contor3']<$_SESSION['nr3'])
                            {
                                ?>
                                    <div> <?=$next?> </div>
                                <?php
                            }
                            else
                            {
                                ?>
                                   <div> <?=$result?> </div>
                                <?php
                            }
                        ?>
                        
                    </button>
                </div>
            </form>
        </div>
        <?php
    }
    ?>

    <?php
        include "module/footer.php";
    ?>

</body>