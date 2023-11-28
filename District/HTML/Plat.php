<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Nos plats</title>
</head>
<body>
    <div class="container-fluid parallax overflow-hidden">
    <div id="header"></div>
    <div class="row background" id="platbg"></div>
    
    <?php 
          include('Modif_BDD/Bdd_auth.php');
          $verif=false;
          $stmt = $conn->query("SELECT categorie.libelle as catname,plat.description as descrip, plat.image as image, plat.id as platid from categorie join plat where plat.id_categorie=categorie.id and categorie.active='Yes' Order by categorie.libelle");
          $quadrio=1;
          $cat=0;
          while ($row=$stmt->fetch())
          { 
           if ($quadrio==1)
            {
             echo '<div class="row">
                    <div class="col-12">
                 <p class="h2 text-center px-5 pt-2 text-light" id="'.$row['catname'].'">'.$row['catname'].'</p>
                    </div>
                    <div class="row pt-2 mx-0">
                    <div class="row px-5">
                    <div class="row row-cols-1 row-md-cols-2 pt-4">';
            }
          if ($quadrio%2!=0&&$quadrio!=1&&$quadrio!=5)
          {
            
            echo '</div><div class="row row-cols-1 row-md-cols-2 pt-4">';
          }
          if ($row['image']!='Putin_hidden.png')
          {
           echo '<div class="col-12 col-lg-6 px-4 pb-4 justify-content-right">
           <div class="card bg-dark rounded">
               <div class="card-body">
                   <div class="row">
                       <div class="col-4">
                           <img class="card-img-bottom"
                               src="../BOOTSTRAP/Assets/food/resized/'.$row['image'].'"
                               alt="Card images Pinterest">
                       </div>
                       <div class="col-8 px-5 px-lg-0 pr-5 pb-3 position-static">
                           <p class="card-text text-light text-left">'.$row['descrip'].'</p>
                           <a href="Commande.php?id='.$row['platid'].'" class="btn btn-primary text-center position-absolute commands"
                               >Commander</a>
                       </div>
                   </div>
               </div>
           </div>
       </div>';
    }else
       {
        echo '<div class="col-12 col-lg-6 px-4 pb-4 justify-content-right">
        <div class="card bg-dark rounded" id="card_putin">
            <div class="card-body" id="verification">
                <div class="row">
                    <div class="col-4">
                        <img class="card-img-bottom"
                            src="../BOOTSTRAP/Assets/food/resized/'.$row['image'].'"
                            alt="Card images Pinterest" id="img">
                    </div>
                    <div class="col-8 px-5 px-lg-0 pr-5 pb-3 position-static">
                        <p class="card-text text-light text-left">'.$row['descrip'].'</p>
                        <a href="Commande.php?id='.$row['platid'].'" class="btn btn-primary text-center position-absolute commands"
                            >Commander</a>
                    </div>
                </div>
            </div>
        </div>
    </div>';
       }
            

        $quadrio++;
        $cat++;
        if ($quadrio==5&&$cat!=6)
        {
            $quadrio=1;
            echo '</div></div>
            </div></div>';
        }
    }
        //echo '</div>';

    ?>


    <span id="putin"></span>
    <div id="footer"></div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script> 
    <script src="../Javascript/Javascript_platphp.js" defer></script>
</body>
</html>