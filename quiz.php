<?php
    session_start();
    $pagina = "quiz";
    require_once ("module/conectare-db.php");

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
    body {
        background-color: MistyRose; 
    }

    h3, .row{
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div>
        <?php
            include "module/navigare.php";
            include "module/variabile.php";
        ?>
   </div>

    <?php
            $q1 = "SELECT * FROM quiz";
            $rez1 = mysqli_query($link, $q1);
            $_SESSION['nr1'] = mysqli_num_rows($rez1);  
           
            $q2 = "SELECT * FROM quiz2";
            $rez2 = mysqli_query($link, $q2);
            $_SESSION['nr2'] = mysqli_num_rows($rez2);
            
            $q3 = "SELECT * FROM quiz3";
            $rez3 = mysqli_query($link, $q3);
            $_SESSION['nr3'] = mysqli_num_rows($rez3);// memoram numarul intrebarilor din quiz
            

            $_SESSION['contor'] = 1;
            $_SESSION['total'] = 0;
            $_SESSION['contor2'] = 1;
            $_SESSION['total2'] = 0;
            $_SESSION['contor3'] = 1;
            $_SESSION['total3'] = 0;

            if(isset($limba) && $limba==="ro")
                $text1 = "Testează-ți cunoștințele despre viața personală a Agathei Christie!";
            if(isset($limba) && $limba==="eng")
                $text1 = "Test your knowledge of Agatha Christie's life!";
            if(isset($limba) && $limba==="fr")
                $text1 = "Testez vos connaissances sur la vie d'Agatha Christie !";
            if(isset($limba) && $limba==="es")
                $text1 = "¡Pon a prueba tus conocimientos sobre la vida de Agatha Christie!";

            if(isset($limba) && $limba==="ro")
                $text2 = "Testează-ți cunoștințele despre romanele scrise de Agatha Christie!";
            if(isset($limba) && $limba==="eng")
                $text2 = "Test your knowledge of Agatha Christie's novels!";
            if(isset($limba) && $limba==="fr")
                $text2 = "Testez vos connaissances sur les romans d'Agatha Christie!";
            if(isset($limba) && $limba==="es")
                $text2 = "¡Pon a prueba tus conocimientos sobre las novelas de Agatha Christie!";

            if(isset($limba) && $limba==="ro")
                $text3 = "Creează propriul tău quiz despre Agatha Christie!";
            if(isset($limba) && $limba==="eng")
                $text3 = "Create your own Agatha Christie quiz!";
            if(isset($limba) && $limba==="fr")
                $text3 = "Créez votre propre quiz Agatha Christie!";
            if(isset($limba) && $limba==="es")
                $text3 = "¡Crea tu propio cuestionario de Agatha Christie!";

    ?>

    <div class="container p-5">
        <div class="row">
            <div class="text-center col-6" style="background-image: linear-gradient(to right, DodgerBlue, LightSteelBlue); border-radius: 21px;">
                <a href="intrebare.php?nr=<?=$_SESSION['contor']?>">
                    <div class="pb-5 pt-3">
                        <div class="p-3">
                            <h2 style="color: black">Quiz 1</h2>
                            <p><?=$text1?></p>
                        </div>
                        <img src="imagini\img-quiz1.jpg" class="bg-body shadow-sm mx-auto" style="width: 80%; border-radius: 21px;"></img>
                    </div>                   
                </a>
            </div>
            <div class="text-center col-6" style="background-image: linear-gradient(to right, #c7b0de, plum);  border-radius: 21px;">
                <a href="intrebare2.php?nr=<?=$_SESSION['contor2']?>">
                    <div class="pb-5 pt-3">
                        <div class="p-3">
                            <h2 style="color: black">Quiz 2</h2>
                            <p><?=$text2?></p>
                        </div>
                        <img src="imagini\img-quiz2.jpg" class="bg-body shadow-sm mx-auto" style="width: 80%; border-radius: 21px;"></img>
                    </div>                   
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="text-center col-6 pb-3" style="background-image: linear-gradient(to right, red , yellow); border-radius: 21px;">
                <a href="intrebare3.php?id=<?=$_SESSION['contor3']?>">
                    <div class="pb-4 pt-3">
                        <div class="p-3">
                            <h2 style="color: black">Quiz 3</h2>
                            <p><?=$text3?></p>
                        </div>
                        <img src="imagini\img-quiz3.jpg" class="bg-body shadow-sm mx-auto" style="width: 80%; border-radius: 21px;"></img>
                    </div>                   
                </a>
                <a href="operatii_quiz.php" style="background-color:black" class="p-2"> 
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
                </a>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    
    <?php
        include "module/footer.php";
    ?>

</body>
</html>