<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Document</title>
</head>

<body>
    <?php
include ("DAO.php");
$stmt=commande($conn);
$vari=$_GET['id'];
while ($row = $stmt->fetch())
{
    if ($row['image']!='Putin_hidden.png')
    {
echo '<div class="container-fluid bg-light">
<div id="header"></div>
<div class="row justify-content-center d-flex pt-5 bg-light">
<div class="col-12 col-md-6">
    <div class="card bg-dark rounded">
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <img class="card-img-bottom" src="../BOOTSTRAP/Assets/food/resized/'.$row['image'].'"
                         alt="Plat commandé">
                </div>
                <div class="col-8 px-5 px-lg-0 pr-5 pb-3 position-static">
                    <p class="card-text text-light text-left">'.$row['description'].'</p>
                </div>
                <div class="position-absolute number d-flex justify-content-left">
                <p class="text-light">prix : </p><p class="text-light" id="prix">'.$row['prix'].'</p> <p class="text-light">  €</p>
                </div>
                <div class="position-absolute commands d-flex justify-content-end">
                                    <label for="quantité" class="text-light">quantité</label>
                                    <input type="number" min="1" max="10" value="1" id="number" class="w-25">
                                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="row align-self-center d-flex justify-content-center bg-light">
    <form class="w-75 m-5" id="form1" name="form1" action="Commande_script.php" method="post">
        <!--onsubmit="return checkForm(this);"-->

        <div class="row pt-5">
            <div class="col-12">
                <label for="np">Nom et prénom</label><br><input class="w-100" type="text" name="nomprenom"
                    id="np" placeholder="Dubois Marc">
                    <span class="text-danger" id="defaultnp"></span>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-6">
        <label for="Email">Email</label><br><input class="w-100" type="text" name="email" id="email" placeholder="Marcdubois@afpa.fr">
        <span class="text-danger" id="defaultmail"></span></div>
        <div class="col-6">
        <label for="Téléphone">Téléphone</label><input class="w-100" type="text" name="telephone" id="telephone" placeholder="0X.XX.XX.XX.XX">
        <span class="text-danger" id="defaultnumero"></span></div>
        <input type="hidden" value="0" id="nombreco" name="nombreco">
        <input type="hidden" value="'.$vari.'" name="idplat">
        <input type="hidden" value="'.$row['libelle'] . '" name="nomplat">
    </div>
        <div class="row pt-5">
        <label for="adresse">Votre adresse</label>
        </div>
        <div class="row pb-5">
        <textarea class="w-100" id="adresse" name="adresse"> </textarea><span class="text-danger" id="defaultadresse"></span>
    </div>
        <input type="submit" value="Envoyer" id="idSubForm1" name="subForm1">
        <input type="reset" value="Annuler">
</div>
<div id="footer"></div>
</div>';
}else{
    echo '<div class="container-fluid bg-light">
<div id="header"></div>
<div class="row justify-content-center d-flex pt-5 bg-light">
<div class="col-12 col-md-6">
    <div class="card bg-dark rounded" id="card_putin">
        <div class="card-body" id="verification">
            <div class="row">
                <div class="col-4">
                    <img class="card-img-bottom" src="../BOOTSTRAP/Assets/food/resized/'.$row['image'].'"
                         alt="Plat commandé" id="img">
                </div>
                <div class="col-8 px-5 px-lg-0 pr-5 pb-3 position-static">
                    <p class="card-text text-light text-left">'.$row['description'].'</p>
                </div>
                <div class="position-absolute number d-flex justify-content-left">
                <p class="text-light">prix : </p><p class="text-light" id="prix">'.$row['prix'].'</p> <p class="text-light">  €</p>
                </div>
                <div class="position-absolute commands d-flex justify-content-end">
                                    <label for="quantité" class="text-light">quantité</label>
                                    <input type="number" min="1" max="10" value="1" id="number" class="w-25">
                                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="row align-self-center d-flex justify-content-center bg-light">
    <form class="w-75 m-5" id="form1" name="form1" action="Commande_script.php" method="post">
        <!--onsubmit="return checkForm(this);"-->

        <div class="row pt-5">
            <div class="col-12">
                <label for="np">Nom et prénom</label><br><input class="w-100" type="text" name="nomprenom"
                    id="np" placeholder="Dubois Marc">
                    <span class="text-danger" id="defaultnp"></span>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-6">
        <label for="Email">Email</label><br><input class="w-100" type="text" name="email" id="email" placeholder="Marcdubois@afpa.fr">
        <span class="text-danger" id="defaultmail"></span></div>
        <div class="col-6">
        <label for="Téléphone">Téléphone</label><input class="w-100" type="text" name="telephone" id="telephone" placeholder="0X.XX.XX.XX.XX">
        <span class="text-danger" id="defaultnumero"></span></div>
        <input type="hidden" value="0" id="nombreco" name="nombreco">
        <input type="hidden" value="'.$vari.'" name="idplat">
        <input type="hidden" value="'.$row['libelle'].'" name="nomplat">
    </div>
    <span id="putin"></span>
        <div class="row pt-5">
        <label for="adresse">Votre adresse</label>
        </div>
        <div class="row pb-5">
        <textarea class="w-100" id="adresse" name="adresse"> </textarea><span class="text-danger" id="defaultadresse"></span>
    </div>
        <input type="submit" value="Envoyer" id="idSubForm1" name="subForm1">
        <input type="reset" value="Annuler">
</div>
<div id="footer"></div>
</div>';
}}
?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
    <script src="../Javascript/Javascript_commande.js" defer></script>
</body>

</html>
