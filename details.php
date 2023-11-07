<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Details</title>
</head>
<body>
<?php
$vari=$_GET['disc_id'];
include 'pdo_login.php';
$stmt = $conn->query("SELECT * FROM artist join disc ON disc.artist_id=artist.artist_id WHERE disc_id = ".$vari."");
?>
<div class="container-fluid">
<div class="row"><h2>Details du disque</h2></div>
    <?php 
    while ($row = $stmt->fetch())
    {
    echo '      <div class="row pt-5">
                    <div class="col-12">
                        <label for="title">Title</label><br><input readonly class="w-100" type="text" name="title"
                            value="'.$row['disc_title'].'">
                        <span class="text-danger" id="defaultname"></span>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-12">
                        <label for="artist">Artist</label><br><input readonly class="w-100" type="text" name="artist"
                        value="'.$row['artist_name'].'">
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-12">
                        <label for="year">Year</label><br><input readonly class="w-100" type="text" name="year"
                            value="'.$row['disc_year'].'">
                        <span class="text-danger" id="defaultname"></span>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-12">
                        <label for="genre">Genre</label><br><input readonly class="w-100" type="text" name="genre"
                            value="'.$row['disc_genre'].'">
                        <span class="text-danger" id="defaultname"></span>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-12">
                        <label for="label">Label</label><br><input readonly class="w-100" type="text" name="label"
                           value="'.$row['disc_label'].'">
                        <span class="text-danger" id="defaultname"></span>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-12">
                        <label for="price">Price</label><br><input readonly class="w-100" type="text" name="price"
                            value="'.$row['disc_price'].'">
                        <span class="text-danger" id="defaultname"></span>
                    </div>
                </div>
                <div class="row d-none d-lg-flex py-5">

                </div>
                
                <div class="row d-none d-lg-flex pt-5 pb-5">

                </div>
                <div class="row pb-5">
                    <div class="col-4 d-flex justify-content-center">
                        <a href="update_form.php?disc_id='.$vari.'" class="btn btn-secondary btn-lg d-inline">Modifier</a>
                    </div>
                    <div class="col-4 d-flex justify-content-center">
                        <a href=delete_script.php?disc_id='.$vari.'" class="btn btn-secondary btn-lg d-inline">Supprimer</a>
                    </div>
                    <div class="col-4 d-flex justify-content-center">
                        <button type="reset" class="btn btn-secondary btn-lg d-inline">Annuler</button>
                    </div>
                </div>
</div>
';
    }
?>
  
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
</body>
</html>
