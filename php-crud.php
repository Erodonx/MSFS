<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    
    <title>Disque baby</title>
</head>
<body>
<div class="container-fluid">
<div class="row">
<?php
$pair=0;
include 'pdo_login.php';
$stmt = $conn->query("SELECT * FROM disc JOIN artist ON disc.artist_id=artist.artist_id");
$stmt2 = $conn->query("SELECT * FROM disc");        
$bite= $stmt2->fetchALL(PDO::FETCH_OBJ);
echo '<h1>LISTES LES DISQUES('.count($bite).')</h1><a href="add_form.php" class="btn btn-primary d-flex text-center position-absolute commands2">Ajouter</a></div><div class="row">';
while ($row = $stmt->fetch()) {
    $pair=$pair+1;
    echo '<div class="col-6">
    <div class="card bg-dark rounded">
    <div class="card-body">
    <div class="row">
    <div class="col-6">
    <img src="disc_picture/'.$row['disc_picture'].'"></div>
    <div class="col-6 px-5 px-lg-0 pr-5 pb-3 position-static"> 
    <p class="card-text text-light text-right font-weight-bold">'.$row['disc_title'].'</p>
    <p class="card-text text-light text-right">'.$row['artist_name'].'</p>
    <p class="card-text text-light text-right">Label : '.$row['disc_label'].'</p>
    <p class="card-text text-light text-right">Year : '.$row['disc_year'].'</p>
    <p class="card-text text-light text-right">Genre : '.$row['disc_genre'].'</p>'.
    //<form action="details.php" method="POST">
    //<input type="hidden" name="secret" value="'.$row['disc_id'].'">
    '<a href="details.php?disc_id='.$row['disc_id'].'" class="btn btn-primary text-center position-absolute commands">Détails</a></div> </div> </div></div></div>';
    //<input type="submit" class="btn btn-primary text-center position-absolute commands" value="Détails"></form></div> </div> </div></div></div>';
    if($pair%2==0)
    {
     echo '</div> <div class="row mt-5">';
    }

}
?>
</div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
        <script src="js.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>
       
</body>
</html>
