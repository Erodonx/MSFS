
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>The district</title>
</head>
<body>
<div class="container-fluid parallax">
        <div id="header"></div>   
        <div class="row">
            
            <div class="col-12 d-none d-md-block py-5 align-self-center bg-dark">
                <div class="d-flex justify-content-center"><video muted autoplay class="w-25" loop>
                    <source src="../BOOTSTRAP/Assets/videos/My Burger TV Ad.mp4">
                </video>
                </div>
                <form class="form-inline justify-content-center">
                    <input class="form-control searchbar" type="search" placeholder="Parcourir le site">
                    <button class="btn text-light btn-outline-success bg-success" type="submit">Rechercher</button>
                </form>
            </div>
        </div>
        <?php
        include 'DAO.php';
        $trio=1;
        //$stmt= $conn->query("SELECT * FROM categorie where active='Yes'");
        $stmt=affiche_cat_Populaire($conn);
        while ($row = $stmt->fetch()) {
            if ($trio==1)
            {
                echo '<div class="row justify-content-center d-none d-md-flex pt-4">';
            }
            echo '<div class="col-4 d-flex justify-content-center">
                    <a href="Plat.php#'.$row['libelle'].'">
                    <div class="card bg-dark text-light d-flex">
                        <div class="card-header">
                            <p class="h5 text-center">'.$row['libelle'].'</p>
                        </div>
                        <div class="card-body">
                            <img class="card-img-bottom" src="../BOOTSTRAP/Assets/category/'.$row['image'].'"
                                alt="Card images Pinterest">
                        </div>
                    </div>
                </a>
            </div>';
            $trio++;
            if ($trio==4)
            {
                $trio=1;
                echo '</div>';
            }

        }
        $stmt=affiche_cat($conn);
        while ($row = $stmt->fetch()) {
            if ($trio==1)
            {
                echo '<div class="row justify-content-center d-none d-md-flex pt-4">';
            }
            echo '<div class="col-4 d-flex justify-content-center">
                    <a href="Plat.php#'.$row['libelle'].'">
                    <div class="card bg-dark text-light d-flex">
                        <div class="card-header">
                            <p class="h5 text-center">'.$row['libelle'].'</p>
                        </div>
                        <div class="card-body">
                            <img class="card-img-bottom" src="../BOOTSTRAP/Assets/category/'.$row['image'].'"
                                alt="Card images Pinterest">
                        </div>
                    </div>
                </a>
            </div>';
            $trio++;
            if ($trio==4)
            {
                $trio=1;
                echo '</div>';
            }

        }
        $stmt=affiche_plat($conn);
        echo '<div class="row justify-content-center d-flex row-cols-1 row-md-cols-3 py-4">';
        while ($row = $stmt->fetch())
        {

            if($trio <= 3)
                    {
            if ($row['image']!='Putin_hidden.png')
            {



            echo '<div class="col-12 col-md-4 justify-content-center d-flex">
            <a href="#">
            <div class="card bg-dark text-light">
                <div class="card-header">
                    <p class="h5 text-center">'.$row['libelle'].'</p>
                </div>
                <div class="card-body">
                    <img class="card-img-bottom" src="../BOOTSTRAP/Assets/food/resized/'.$row['image'].'"
                        alt="Card images Pinterest">
                </div>
            </div>
            </a>
        </div>';
            }else{
                echo '<div class="col-12 col-md-4 justify-content-center d-flex">
                <a href="#">
                <div class="card bg-dark text-light" id="card_putin">
                    <div class="card-header">
                        <p class="h5 text-center">'.$row['libelle'].'</p>
                    </div>
                    <div class="card-body" id="verification">
                        <img class="card-img-bottom" src="../BOOTSTRAP/Assets/food/resized/'.$row['image'].'"
                            alt="Card images Pinterest" id="img">
                    </div>
                </div>
                </a>
            </div>';
            }
            
            }
            if ($trio>3)
            {
                if ($row['image']!='Putin_hidden.png')
                {
             echo '<div class="col-12 d-md-none justify-content-center d-flex">
             <a href="#">
             <div class="card bg-dark text-light">
                 <div class="card-header">
                     <p class="h5 text-center">'.$row['libelle'].'</p>
                 </div>
                 <div class="card-body">
                     <img class="card-img-bottom" src="../BOOTSTRAP/Assets/food/resized/'.$row['image'].'"
                         alt="Card images Pinterest">
                 </div>
             </div>
             </a>
         </div>';
                }else{
                    echo '<div class="col-12 d-md-none justify-content-center d-flex">
                    <a href="#">
                    <div class="card bg-dark text-light" id="card_putin">
                        <div class="card-header">
                            <p class="h5 text-center">'.$row['libelle'].'</p>
                        </div>
                        <div class="card-body" id="verification">
                            <img class="card-img-bottom" src="../BOOTSTRAP/Assets/food/resized/'.$row['image'].'"
                                alt="Card images Pinterest" id="img">
                        </div>
                    </div>
                    </a>
                </div>';
                }
            }
        $trio++;
        }

        
        echo '</div>';
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
    <script src="../Javascript/Javascript_accueil.js"></script>
    
</body>
</html>