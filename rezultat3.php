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

    body {
        background-color: MistyRose; 
    }

    a:hover{
        color: white;
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

    <div class="container p-5 mt-5 mb-5" style="background-image: linear-gradient(to right, red , yellow); border-radius: 21px;">
        <div class="row">
            <div class="col-8" style="border-right: 2px solid indigo; ">

                <div style="font-size:36px">
                    <strong>
                        <?php
                             if(isset($limba) && $limba==="ro")
                             {
                                 ?>
                                    <div>Ai răspuns corect la <span style="color:white"> <?=$_SESSION['total3']?> </span> întrebări!</div>
                                 <?php
                             }
                             if(isset($limba) && $limba==="eng")
                             {
                                 ?>
                                   <div>You answered <span style="color:white"> <?=$_SESSION['total3']?> </span> questions correctly!</div>
                                 <?php
                             }
                             if(isset($limba) && $limba==="fr")
                             {
                                 ?>
                                    <div>Tu as répondu correctement à <span style="color:white"> <?=$_SESSION['total3']?> </span> questions !</div>
                                 <?php
                             }
                             if(isset($limba) && $limba==="es")
                             {
                                 ?>
                                   <div>Respondiste <span style="color:white"> <?=$_SESSION['total3']?> </span> preguntas correctamente!</div>
                                 <?php
                             }
                        ?>
                    </strong>
                </div>

                <div class="mt-3 mb-3">
                    <?php
                    if($_SESSION['total3']>=$_SESSION['nr3']*4/5+1)
                    {
                        ?>
                            <img src="imagini/9-10.gif" width="80%">
                        <?php
                    }
                    else
                    if($_SESSION['total3']>=$_SESSION['nr3']*3/5+1)
                    {
                        ?>
                            <img src="imagini/7-8.gif" width="80%">
                        <?php
                    }
                    else
                    if($_SESSION['total3']>=$_SESSION['nr3']*2/5+1)
                    {
                        ?>
                            <img src="imagini/5-6.gif" width="80%">
                        <?php
                    }
                    else
                    if($_SESSION['total3']>=$_SESSION['nr3']/5+1)
                    {
                        ?>
                            <img src="imagini/3-4.gif" width="80%">
                        <?php
                    }
                    else
                    if($_SESSION['total3']>=1)
                    {
                        ?>                   
                            <img src="imagini/1-2.gif" width="80%">
                        <?php
                    }
                    else
                    {
                        ?>
                            <img src="imagini/0.gif" width="80%">
                        <?php
                    }
                ?>
                </div>
            </div>

            <?php
                $_SESSION['contor2'] = 1;
                $_SESSION['total2'] = 0;
                $_SESSION['contor1'] = 1;
                $_SESSION['total1'] = 0;

                
                if(isset($limba) && $limba==="ro")
                    $text2 = "Testează-ți cunoștințele despre romanele scrise de Agatha Christie!";
                if(isset($limba) && $limba==="eng")
                    $text2 = "Test your knowledge of Agatha Christie's novels!";
                if(isset($limba) && $limba==="fr")
                    $text2 = "Testez vos connaissances sur les romans d'Agatha Christie!";
                if(isset($limba) && $limba==="es")
                    $text2 = "¡Pon a prueba tus conocimientos sobre las novelas de Agatha Christie!";

                if(isset($limba) && $limba==="ro")
                    $text1 = "Testează-ți cunoștințele despre viața personală a Agathei Christie!";
                if(isset($limba) && $limba==="eng")
                    $text1 = "Test your knowledge of Agatha Christie's life!";
                if(isset($limba) && $limba==="fr")
                    $text1 = "Testez vos connaissances sur la vie d'Agatha Christie !";
                if(isset($limba) && $limba==="es")
                    $text1 = "¡Pon a prueba tus conocimientos sobre la vida de Agatha Christie!";
            ?>
            <div class="col-4">
                <div class="text-center" style="background-image: linear-gradient(to right, DodgerBlue, LightSteelBlue);  border-radius: 21px;">
                    <a href="intrebare.php?id=<?=$_SESSION['contor']?>">
                        <div class="pb-3 pt-3">
                            <div class="p-2">
                                <h3 style="color: black">Quiz 1</h3>
                                <p><?=$text1?></p>
                            </div>
                            <img src="imagini\img-quiz1.jpg" class="bg-body shadow-sm mx-auto" style="width: 80%; border-radius: 21px;"></img>
                        </div>                   
                    </a>
                </div>
                <div class="text-center mt-3" style="background-image: linear-gradient(to right, #c7b0de, plum);  border-radius: 21px;">
                    <a href="intrebare2.php?id=<?=$_SESSION['contor2']?>">
                        <div class="pb-3 pt-3">
                            <div class="p-2">
                                <h3 style="color: black">Quiz 2</h3>
                                <p><?=$text2?></p>
                            </div>
                            <img src="imagini\img-quiz2.jpg" class="bg-body shadow-sm mx-auto" style="width: 80%; border-radius: 21px;"></img>
                        </div>                   
                    </a>
                </div>
            </div>


            </div>
           
        </div>
    </div>

    <?php
        include "module/footer.php";
    ?>

</body>
