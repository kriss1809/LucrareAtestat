<?php
    session_start();
    $pagina = "carti";
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
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
            include "module/variabile.php";
        ?>
    </div>

    <?php
      $placeholder="";
      $sortare="";
      $cronologic="";
      $alfabetic="";
      $seria="";
      $toate="";
      $an="";
      if(isset($limba) && $limba==="ro")
      {
        $placeholder="Căutare";
        $sortare="Ordonează";
        $cronologic="cronologic";
        $alfabetic="alfabetic";
        $seria="Seria";
        $toate="Toate";
        $an="Anul publicării";
      }
      else
      if (isset($limba) && $limba==="eng")
      {
        $placeholder="Search";
        $sortare="Order";
        $cronologic="chronologically";
        $alfabetic="alphabetically";
        $seria="Collection";
        $toate="All";
        $an="First published";
      }
      else
      if (isset($limba) && $limba==="fr")
      {
        $placeholder="Rechercher";
        $sortare="Ordre";
        $cronologic="chronologique";
        $alfabetic="alphabétique";
        $seria="Collection";
        $toate="Toutes";
        $an="Année de publication";
      }
      else
      if (isset($limba) && $limba==="es")
      {
        $placeholder="Buscar";
        $sortare="Ordenar";
        $cronologic="cronológicamente";
        $alfabetic="alfabéticamente";
        $seria="Colección";
        $toate="Todas";
        $an="Año de publicacion";
      }
    ?>

    <?php

    /// romana

    if(isset($limba) && $limba==="ro")
    {
      ?>
        <div class="container p-4">
          <div class="row">

            <div class="col-9">
                <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Sortează și filtrează

            </button>
            <div class="dropdown-menu p-3" aria-labelledby="dropdownMenuButton1" style="background-color: OldLace">
        
                <form method = "get">
                    <div class="text-center"><strong><?=$sortare?></strong></div>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ordonare" id="cronologic" value="cronologic"  checked >
                        <label class="form-check-label" for="cronologic"><?=$cronologic?></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ordonare" id="alfabetic" value="alfabetic" <?= (isset($_GET['ordonare']) && $_GET['ordonare'] == 'alfabetic')?"checked":""?> >
                        <label class="form-check-label" for="alfabetic"><?=$alfabetic?></label>
                    </div>
                    <hr>

                    <div class="text-center"><strong><?=$seria?></strong></div>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="serie" id="none" value="toate" checked >
                        <label class="form-check-label" for="none"><?=$toate?></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="serie" id="ac" value="ac" <?=(isset($_GET['serie']) && $_GET['serie'] == 'ac')?"checked":""?> >
                        <label class="form-check-label" for="ac">Agatha Christie</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="serie" id="hp" value="hp" <?=(isset($_GET['serie']) && $_GET['serie'] == 'hp')?"checked":""?> >
                        <label class="form-check-label" for="hp">Hercule Poirot</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="serie" id="mw" value="mw" <?=(isset($_GET['serie']) && $_GET['serie'] == 'mw')?"checked":""?> >
                        <label class="form-check-label" for="mw">Mary Westmacott</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="serie" id="mm" value="mm" <?=(isset($_GET['serie']) && $_GET['serie'] == 'mm')?"checked":""?> >
                        <label class="form-check-label" for="mm">Miss Marple</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="serie" id="tt" value="tt" <?=(isset($_GET['serie']) && $_GET['serie'] == 'tt')?"checked":""?> >
                        <label class="form-check-label" for="tt">Tommy & Tuppence</label>
                    </div>
                    <br>

                    <div class="text-end">
                        <button type="submit" class="btn btn-dark">Salvează</button>
                    </div>
                    </form>
              </div>
            </div>
          </div>

            <div class="col-3">
                <form class="d-flex">
                    <input type="hidden" name="pagina" value="carti"> 
                    <input class="form-control" style="background-color: SeaShell" name="text" type="search" placeholder="<?=$placeholder?>" value="<?=htmlspecialchars($text)?>" style="width:100%">
                    <button class="btn btn-dark" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            <div>

        </div>
        </div>

        <div class="container">
          <?php
            $q = "SELECT * FROM carti WHERE nume_ro LIKE '%{$text}%'";
            $rez = mysqli_query($link , $q);
            if(! $rez)
            {
              ?>
                <div class="text-danger">
                  Eroare la interogare.
                </div>
              <?php
            }
            else
            {
              if(mysqli_num_rows($rez) == 0)
              {
                ?>
                  <div class="alert alert-info">
                      Nicio carte.
                  </div>
                <?php
              }
              else
              {
                ?>
                  <div class ="container">
                    <div class="row">
                        <?php
                          if(isset($_GET['ordonare']) && $_GET['ordonare'] == 'alfabetic')
                          {                                
                              $serie="";                                   
                                    
                              if(isset($_GET['serie']) && $_GET['serie'] == 'ac')
                                  $serie = 'Agatha Christie';
                              if(isset($_GET['serie']) && $_GET['serie'] == 'hp')
                                  $serie ='Hercule Poirot';
                              if(isset($_GET['serie']) && $_GET['serie'] == 'mm')
                                  $serie ='Miss Marple';
                              if(isset($_GET['serie']) && $_GET['serie'] == 'tt')
                                  $serie ='Tommy & Tuppence';  
                              if(isset($_GET['serie']) && $_GET['serie'] == 'mw')
                                  $serie ='Mary Westmacott';  
                                    
                              if($serie!="")
                                  $q = "SELECT *  FROM carti WHERE seria='{$serie}' ORDER BY `nume_ro`";
                              else
                                  $q = "SELECT *  FROM carti ORDER BY `nume_ro`";
                                    
                              $rez = mysqli_query($link , $q);
                          }

                          if(isset($_GET['ordonare']) && $_GET['ordonare'] == 'cronologic')
                          {                                 
                              $serie="";
                                    
                              if(isset($_GET['serie']) && $_GET['serie'] == 'ac')
                                  $serie = 'Agatha Christie';
                              if(isset($_GET['serie']) && $_GET['serie'] == 'hp')
                                  $serie ='Hercule Poirot';
                              if(isset($_GET['serie']) && $_GET['serie'] == 'mm')
                                  $serie ='Miss Marple';
                              if(isset($_GET['serie']) && $_GET['serie'] == 'tt')
                                  $serie ='Tommy & Tuppence';  
                              if(isset($_GET['serie']) && $_GET['serie'] == 'mw')
                                  $serie ='Mary Westmacott';  
                                                                                                         
                              if($serie!="")
                                  $q = "SELECT *  FROM carti WHERE seria='{$serie}' ORDER BY `data`";
                              else                                    
                                  $q = "SELECT *  FROM carti ORDER BY `data`"; 

                              $rez = mysqli_query($link , $q);
                          }

                          if(mysqli_num_rows($rez) == 0)
                          {
                            ?>
                              <div class="alert alert-info mt-3">
                                  Nicio carte.                                
                              </div>
                            <?php
                          }

                          while($L = mysqli_fetch_assoc($rez))
                          {
                            ?>
                              <div class="card m-3 p-2" style="max-width: 30%; background-color: SeaShell ">
                                <a href="./carte.php?id=<?=$L['id']?>" style="text-decoration:none; color:black">
                                  <div class="row g-0">
                                    <div class="col-md-4">
                                      <img src="<?=$L['imagine_ro']?>" class="img-fluid rounded-start" alt="Imaginea nu s-a putut încărca.">
                                    </div>
                                    <div class="col-md-8">
                                      <div class="card-body" style="text-align:center">
                                        <h5 class="card-title"><?=$L['nume_ro']?></h5>
                                        <hr>
                                        <p class="card-text" style="font-size:14px"><em><?=$an?>:</em> <?=$L['data']?></p>
                                        <hr>
                                        <p class="card-text" style="font-size:14px"><em><?=$seria?>:</em> <?=$L['seria']?></p>
                                      </div>
                                    </div>
                                  </div>   
                                </a>                                       
                              </div>             
                            <?php
                          }
                        ?>
                    </div>
                  </div>
                <?php
              }
        
          ?>
        </div>

      <?php
    }
  }

  /// engleza

  if(isset($limba) && $limba==="eng")
    {
      ?>
        <div class="container p-4">
          <div class="row">

            <div class="col-9">
                <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Sort and filter

            </button>
            <div class="dropdown-menu p-3" aria-labelledby="dropdownMenuButton1" style="background-color: OldLace">
        
                <form method = "get">
                    <div class="text-center"><strong><?=$sortare?></strong></div>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ordonare" id="cronologic" value="cronologic"  checked >
                        <label class="form-check-label" for="cronologic"><?=$cronologic?></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ordonare" id="alfabetic" value="alfabetic" <?= (isset($_GET['ordonare']) && $_GET['ordonare'] == 'alfabetic')?"checked":""?> >
                        <label class="form-check-label" for="alfabetic"><?=$alfabetic?></label>
                    </div>
                    <hr>

                    <div class="text-center"><strong><?=$seria?></strong></div>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="serie" id="none" value="toate" checked >
                        <label class="form-check-label" for="none"><?=$toate?></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="serie" id="ac" value="ac" <?=(isset($_GET['serie']) && $_GET['serie'] == 'ac')?"checked":""?> >
                        <label class="form-check-label" for="ac">Agatha Christie</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="serie" id="hp" value="hp" <?=(isset($_GET['serie']) && $_GET['serie'] == 'hp')?"checked":""?> >
                        <label class="form-check-label" for="hp">Hercule Poirot</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="serie" id="mw" value="mw" <?=(isset($_GET['serie']) && $_GET['serie'] == 'mw')?"checked":""?> >
                        <label class="form-check-label" for="mw">Mary Westmacott</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="serie" id="mm" value="mm" <?=(isset($_GET['serie']) && $_GET['serie'] == 'mm')?"checked":""?> >
                        <label class="form-check-label" for="mm">Miss Marple</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="serie" id="tt" value="tt" <?=(isset($_GET['serie']) && $_GET['serie'] == 'tt')?"checked":""?> >
                        <label class="form-check-label" for="tt">Tommy & Tuppence</label>
                    </div>
                    <br>

                    <div class="text-end">
                        <button type="submit" class="btn btn-dark">Save</button>
                    </div>
                    </form>
              </div>
            </div>
          </div>

            <div class="col-3">
                <form class="d-flex">
                    <input type="hidden" name="pagina" value="carti"> 
                    <input class="form-control" style="background-color: SeaShell" name="text" type="search" placeholder="<?=$placeholder?>" value="<?=htmlspecialchars($text)?>" style="width:100%">
                    <button class="btn btn-dark" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            <div>

        </div>
        </div>

        <div class="container">
          <?php
            $q = "SELECT * FROM carti WHERE nume LIKE '%{$text}%'";
            $rez = mysqli_query($link , $q);
            if(! $rez)
            {
              ?>
                <div class="text-danger">
                  Query error.
                </div>
              <?php
            }
            else
            {
              if(mysqli_num_rows($rez) == 0)
              {
                ?>
                  <div class="alert alert-info">
                      No books.
                  </div>
                <?php
              }
              else
              {
                ?>
                  <div class ="container">
                    <div class="row">
                        <?php
                          if(isset($_GET['ordonare']) && $_GET['ordonare'] == 'alfabetic')
                          {                                
                              $serie="";                                   
                                    
                              if(isset($_GET['serie']) && $_GET['serie'] == 'ac')
                                  $serie = 'Agatha Christie';
                              if(isset($_GET['serie']) && $_GET['serie'] == 'hp')
                                  $serie ='Hercule Poirot';
                              if(isset($_GET['serie']) && $_GET['serie'] == 'mm')
                                  $serie ='Miss Marple';
                              if(isset($_GET['serie']) && $_GET['serie'] == 'tt')
                                  $serie ='Tommy & Tuppence';  
                              if(isset($_GET['serie']) && $_GET['serie'] == 'mw')
                                  $serie ='Mary Westmacott';  
                                    
                              if($serie!="")
                                  $q = "SELECT *  FROM carti WHERE seria='{$serie}' ORDER BY `nume`";
                              else
                                  $q = "SELECT *  FROM carti ORDER BY `nume`";
                                    
                              $rez = mysqli_query($link , $q);
                          }

                          if(isset($_GET['ordonare']) && $_GET['ordonare'] == 'cronologic')
                          {                                 
                              $serie="";
                                    
                              if(isset($_GET['serie']) && $_GET['serie'] == 'ac')
                                  $serie = 'Agatha Christie';
                              if(isset($_GET['serie']) && $_GET['serie'] == 'hp')
                                  $serie ='Hercule Poirot';
                              if(isset($_GET['serie']) && $_GET['serie'] == 'mm')
                                  $serie ='Miss Marple';
                              if(isset($_GET['serie']) && $_GET['serie'] == 'tt')
                                  $serie ='Tommy & Tuppence';  
                              if(isset($_GET['serie']) && $_GET['serie'] == 'mw')
                                  $serie ='Mary Westmacott';  
                                                                                                         
                              if($serie!="")
                                  $q = "SELECT *  FROM carti WHERE seria='{$serie}' ORDER BY `data`";
                              else                                    
                                  $q = "SELECT *  FROM carti ORDER BY `data`"; 

                              $rez = mysqli_query($link , $q);
                          }

                          if(mysqli_num_rows($rez) == 0)
                          {
                            ?>
                              <div class="alert alert-info mt-3">
                                  No books.                                
                              </div>
                            <?php
                          }

                          while($L = mysqli_fetch_assoc($rez))
                          {
                            ?>
                              <div class="card m-3 p-2" style="max-width: 30%; background-color: SeaShell ">
                                <a href="./carte.php?id=<?=$L['id']?>" style="text-decoration:none; color:black">
                                  <div class="row g-0">
                                    <div class="col-md-4">
                                      <img src="<?=$L['imagine']?>" class="img-fluid rounded-start" alt="Imaginea nu s-a putut încărca.">
                                    </div>
                                    <div class="col-md-8">
                                      <div class="card-body" style="text-align:center">
                                        <h5 class="card-title"><?=$L['nume']?></h5>
                                        <hr>
                                        <p class="card-text" style="font-size:14px"><em><?=$an?>:</em> <?=$L['data']?></p>
                                        <hr>
                                        <p class="card-text" style="font-size:14px"><em><?=$seria?>:</em> <?=$L['seria']?></p>
                                      </div>
                                    </div>
                                  </div>   
                                </a>                                       
                              </div>             
                            <?php
                          }
                        ?>
                    </div>
                  </div>
                <?php
              }
        
          ?>
        </div>

      <?php
    }
  }

  /// franceza

  if(isset($limba) && $limba==="fr")
    {
      ?>
        <div class="container p-4">
          <div class="row">

            <div class="col-9">
                <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Trier et filtrer

            </button>
            <div class="dropdown-menu p-3" aria-labelledby="dropdownMenuButton1" style="background-color: OldLace">
        
                <form method = "get">
                    <div class="text-center"><strong><?=$sortare?></strong></div>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ordonare" id="cronologic" value="cronologic"  checked >
                        <label class="form-check-label" for="cronologic"><?=$cronologic?></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ordonare" id="alfabetic" value="alfabetic" <?= (isset($_GET['ordonare']) && $_GET['ordonare'] == 'alfabetic')?"checked":""?> >
                        <label class="form-check-label" for="alfabetic"><?=$alfabetic?></label>
                    </div>
                    <hr>

                    <div class="text-center"><strong><?=$seria?></strong></div>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="serie" id="none" value="toate" checked >
                        <label class="form-check-label" for="none"><?=$toate?></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="serie" id="ac" value="ac" <?=(isset($_GET['serie']) && $_GET['serie'] == 'ac')?"checked":""?> >
                        <label class="form-check-label" for="ac">Agatha Christie</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="serie" id="hp" value="hp" <?=(isset($_GET['serie']) && $_GET['serie'] == 'hp')?"checked":""?> >
                        <label class="form-check-label" for="hp">Hercule Poirot</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="serie" id="mw" value="mw" <?=(isset($_GET['serie']) && $_GET['serie'] == 'mw')?"checked":""?> >
                        <label class="form-check-label" for="mw">Mary Westmacott</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="serie" id="mm" value="mm" <?=(isset($_GET['serie']) && $_GET['serie'] == 'mm')?"checked":""?> >
                        <label class="form-check-label" for="mm">Miss Marple</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="serie" id="tt" value="tt" <?=(isset($_GET['serie']) && $_GET['serie'] == 'tt')?"checked":""?> >
                        <label class="form-check-label" for="tt">Tommy & Tuppence</label>
                    </div>
                    <br>

                    <div class="text-end">
                        <button type="submit" class="btn btn-dark">Sauver</button>
                    </div>
                    </form>
              </div>
            </div>
          </div>

            <div class="col-3">
                <form class="d-flex">
                    <input type="hidden" name="pagina" value="carti"> 
                    <input class="form-control" style="background-color: SeaShell" name="text" type="search" placeholder="<?=$placeholder?>" value="<?=htmlspecialchars($text)?>" style="width:100%">
                    <button class="btn btn-dark" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            <div>

        </div>
        </div>

        <div class="container">
          <?php
            $q = "SELECT * FROM carti WHERE nume_fr LIKE '%{$text}%'";
            $rez = mysqli_query($link , $q);
            if(! $rez)
            {
              ?>
                <div class="text-danger">
                  Erreur de requête.
                </div>
              <?php
            }
            else
            {
              if(mysqli_num_rows($rez) == 0)
              {
                ?>
                  <div class="alert alert-info">
                      Pas de livres.
                  </div>
                <?php
              }
              else
              {
                ?>
                  <div class ="container">
                    <div class="row">
                        <?php
                          if(isset($_GET['ordonare']) && $_GET['ordonare'] == 'alfabetic')
                          {                                
                              $serie="";                                   
                                    
                              if(isset($_GET['serie']) && $_GET['serie'] == 'ac')
                                  $serie = 'Agatha Christie';
                              if(isset($_GET['serie']) && $_GET['serie'] == 'hp')
                                  $serie ='Hercule Poirot';
                              if(isset($_GET['serie']) && $_GET['serie'] == 'mm')
                                  $serie ='Miss Marple';
                              if(isset($_GET['serie']) && $_GET['serie'] == 'tt')
                                  $serie ='Tommy & Tuppence';  
                              if(isset($_GET['serie']) && $_GET['serie'] == 'mw')
                                  $serie ='Mary Westmacott';  
                                    
                              if($serie!="")
                                  $q = "SELECT *  FROM carti WHERE seria='{$serie}' ORDER BY `nume_fr`";
                              else
                                  $q = "SELECT *  FROM carti ORDER BY `nume_fr`";
                                    
                              $rez = mysqli_query($link , $q);
                          }

                          if(isset($_GET['ordonare']) && $_GET['ordonare'] == 'cronologic')
                          {                                 
                              $serie="";
                                    
                              if(isset($_GET['serie']) && $_GET['serie'] == 'ac')
                                  $serie = 'Agatha Christie';
                              if(isset($_GET['serie']) && $_GET['serie'] == 'hp')
                                  $serie ='Hercule Poirot';
                              if(isset($_GET['serie']) && $_GET['serie'] == 'mm')
                                  $serie ='Miss Marple';
                              if(isset($_GET['serie']) && $_GET['serie'] == 'tt')
                                  $serie ='Tommy & Tuppence';  
                              if(isset($_GET['serie']) && $_GET['serie'] == 'mw')
                                  $serie ='Mary Westmacott';  
                                                                                                         
                              if($serie!="")
                                  $q = "SELECT *  FROM carti WHERE seria='{$serie}' ORDER BY `data`";
                              else                                    
                                  $q = "SELECT *  FROM carti ORDER BY `data`"; 

                              $rez = mysqli_query($link , $q);
                          }

                          if(mysqli_num_rows($rez) == 0)
                          {
                            ?>
                              <div class="alert alert-info mt-3">
                                  Pas de livres.                               
                              </div>
                            <?php
                          }

                          while($L = mysqli_fetch_assoc($rez))
                          {
                            ?>
                              <div class="card m-3 p-2" style="max-width: 30%; background-color: SeaShell ">
                                <a href="./carte.php?id=<?=$L['id']?>" style="text-decoration:none; color:black">
                                  <div class="row g-0">
                                    <div class="col-md-4">
                                      <img src="<?=$L['imagine_fr']?>" class="img-fluid rounded-start" alt="Imaginea nu s-a putut încărca.">
                                    </div>
                                    <div class="col-md-8">
                                      <div class="card-body" style="text-align:center">
                                        <h5 class="card-title"><?=$L['nume_fr']?></h5>
                                        <hr>
                                        <p class="card-text" style="font-size:14px"><em><?=$an?>:</em> <?=$L['data']?></p>
                                        <hr>
                                        <p class="card-text" style="font-size:14px"><em><?=$seria?>:</em> <?=$L['seria']?></p>
                                      </div>
                                    </div>
                                  </div>   
                                </a>                                       
                              </div>             
                            <?php
                          }
                        ?>
                    </div>
                  </div>
                <?php
              }
        
          ?>
        </div>

      <?php
    }
  }

  /// spaniola

  if(isset($limba) && $limba==="es")
    {
      ?>
        <div class="container p-4">
          <div class="row">

            <div class="col-9">
                <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Ordenar y filtrar

            </button>
            <div class="dropdown-menu p-3" aria-labelledby="dropdownMenuButton1" style="background-color: OldLace">
        
                <form method = "get">
                    <div class="text-center"><strong><?=$sortare?></strong></div>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ordonare" id="cronologic" value="cronologic"  checked >
                        <label class="form-check-label" for="cronologic"><?=$cronologic?></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ordonare" id="alfabetic" value="alfabetic" <?= (isset($_GET['ordonare']) && $_GET['ordonare'] == 'alfabetic')?"checked":""?> >
                        <label class="form-check-label" for="alfabetic"><?=$alfabetic?></label>
                    </div>
                    <hr>

                    <div class="text-center"><strong><?=$seria?></strong></div>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="serie" id="none" value="toate" checked >
                        <label class="form-check-label" for="none"><?=$toate?></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="serie" id="ac" value="ac" <?=(isset($_GET['serie']) && $_GET['serie'] == 'ac')?"checked":""?> >
                        <label class="form-check-label" for="ac">Agatha Christie</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="serie" id="hp" value="hp" <?=(isset($_GET['serie']) && $_GET['serie'] == 'hp')?"checked":""?> >
                        <label class="form-check-label" for="hp">Hercule Poirot</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="serie" id="mw" value="mw" <?=(isset($_GET['serie']) && $_GET['serie'] == 'mw')?"checked":""?> >
                        <label class="form-check-label" for="mw">Mary Westmacott</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="serie" id="mm" value="mm" <?=(isset($_GET['serie']) && $_GET['serie'] == 'mm')?"checked":""?> >
                        <label class="form-check-label" for="mm">Miss Marple</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="serie" id="tt" value="tt" <?=(isset($_GET['serie']) && $_GET['serie'] == 'tt')?"checked":""?> >
                        <label class="form-check-label" for="tt">Tommy & Tuppence</label>
                    </div>
                    <br>

                    <div class="text-end">
                        <button type="submit" class="btn btn-dark">Salvar</button>
                    </div>
                    </form>
              </div>
            </div>
          </div>

            <div class="col-3">
                <form class="d-flex">
                    <input type="hidden" name="pagina" value="carti"> 
                    <input class="form-control" style="background-color: SeaShell" name="text" type="search" placeholder="<?=$placeholder?>" value="<?=htmlspecialchars($text)?>" style="width:100%">
                    <button class="btn btn-dark" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            <div>

        </div>
        </div>

        <div class="container">
          <?php
            $q = "SELECT * FROM carti WHERE nume_es LIKE '%{$text}%'";
            $rez = mysqli_query($link , $q);
            if(! $rez)
            {
              ?>
                <div class="text-danger">
                  Error de consulta.
                </div>
              <?php
            }
            else
            {
              if(mysqli_num_rows($rez) == 0)
              {
                ?>
                  <div class="alert alert-info">
                    Ningún libro.
                  </div>
                <?php
              }
              else
              {
                ?>
                  <div class ="container">
                    <div class="row">
                        <?php
                          if(isset($_GET['ordonare']) && $_GET['ordonare'] == 'alfabetic')
                          {                                
                              $serie="";                                   
                                    
                              if(isset($_GET['serie']) && $_GET['serie'] == 'ac')
                                  $serie = 'Agatha Christie';
                              if(isset($_GET['serie']) && $_GET['serie'] == 'hp')
                                  $serie ='Hercule Poirot';
                              if(isset($_GET['serie']) && $_GET['serie'] == 'mm')
                                  $serie ='Miss Marple';
                              if(isset($_GET['serie']) && $_GET['serie'] == 'tt')
                                  $serie ='Tommy & Tuppence';  
                              if(isset($_GET['serie']) && $_GET['serie'] == 'mw')
                                  $serie ='Mary Westmacott';  
                                    
                              if($serie!="")
                                  $q = "SELECT *  FROM carti WHERE seria='{$serie}' ORDER BY `nume_es`";
                              else
                                  $q = "SELECT *  FROM carti ORDER BY `nume_es`";
                                    
                              $rez = mysqli_query($link , $q);
                          }

                          if(isset($_GET['ordonare']) && $_GET['ordonare'] == 'cronologic')
                          {                                 
                              $serie="";
                                    
                              if(isset($_GET['serie']) && $_GET['serie'] == 'ac')
                                  $serie = 'Agatha Christie';
                              if(isset($_GET['serie']) && $_GET['serie'] == 'hp')
                                  $serie ='Hercule Poirot';
                              if(isset($_GET['serie']) && $_GET['serie'] == 'mm')
                                  $serie ='Miss Marple';
                              if(isset($_GET['serie']) && $_GET['serie'] == 'tt')
                                  $serie ='Tommy & Tuppence';  
                              if(isset($_GET['serie']) && $_GET['serie'] == 'mw')
                                  $serie ='Mary Westmacott';  
                                                                                                         
                              if($serie!="")
                                  $q = "SELECT *  FROM carti WHERE seria='{$serie}' ORDER BY `data`";
                              else                                    
                                  $q = "SELECT *  FROM carti ORDER BY `data`"; 

                              $rez = mysqli_query($link , $q);
                          }

                          if(mysqli_num_rows($rez) == 0)
                          {
                            ?>
                              <div class="alert alert-info mt-3">
                                Ningún libro.                             
                              </div>
                            <?php
                          }

                          while($L = mysqli_fetch_assoc($rez))
                          {
                            ?>
                              <div class="card m-3 p-2" style="max-width: 30%; background-color: SeaShell ">
                                <a href="./carte.php?id=<?=$L['id']?>" style="text-decoration:none; color:black">
                                  <div class="row g-0">
                                    <div class="col-md-4">
                                      <img src="<?=$L['imagine_es']?>" class="img-fluid rounded-start" alt="Imaginea nu s-a putut încărca.">
                                    </div>
                                    <div class="col-md-8">
                                      <div class="card-body" style="text-align:center">
                                        <h5 class="card-title"><?=$L['nume_es']?></h5>
                                        <hr>
                                        <p class="card-text" style="font-size:14px"><em><?=$an?>:</em> <?=$L['data']?></p>
                                        <hr>
                                        <p class="card-text" style="font-size:14px"><em><?=$seria?>:</em> <?=$L['seria']?></p>
                                      </div>
                                    </div>
                                  </div>   
                                </a>                                       
                              </div>             
                            <?php
                          }
                        ?>
                    </div>
                  </div>
                <?php
              }
        
          ?>
        </div>

      <?php
    }
  }

  ?>

  <?php
      include "module/footer.php";
  ?>


</body>
</html>