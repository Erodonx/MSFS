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
    <div class="container-fluid parallax">
      <div id="header"></div>
        <div class="row align-self-center d-flex justify-content-center bg-light">
            <form action="Contact_script.php" class="w-75 m-5" id="form1" name="form1" method="post">
                <!--onsubmit="return checkForm(this);"-->

                <div class="row pt-5">
                    <div class="col-6">
                        <label for="nom">Nom</label><br><input class="w-100" type="text" name="nom" id="nom"
                            placeholder="Dubois">
                        <span class="text-danger" id="defaultname"></span>
                    </div>
                    <div class="col-6">
                        <label for="prenom">Prénom</label><br><input class="w-100" type="text" name="prenom" id="prenom"
                            placeholder="Marc">
                        <span class="text-danger" id="defaultprenom"></span>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-6">
                        <label for="Email">Email</label><br><input class="w-100" type="text" name="mail" id="email"
                            placeholder="Marcdubois@afpa.fr">
                        <span class="text-danger" id="defaultmail"></span>
                    </div>
                    <div class="col-6">
                        <label for="Téléphone">Téléphone</label><input class="w-100" type="text" name="telephone" id="telephone"
                            placeholder="0X.XX.XX.XX.XX">
                        <span class="text-danger" id="defaultnumero"></span>
                    </div>
                </div>
                <div class="row pt-5">
                    <label for="demande">Votre demande</label>
                </div>
                <div class="row pb-5">
                    <textarea class="w-100" name="demande" id="demande"> </textarea>
                    <span class="text-danger" id="defaultdemande"></span>
                </div>
                <div class="row d-none d-lg-flex py-5">

                </div>
                
                <div class="row d-none d-lg-flex pt-5 pb-5">

                </div>
                <div class="row pb-5">
                    <div class="col-6 d-flex justify-content-center">
                        <button type="submit" class="btn btn-secondary btn-lg d-inline">Envoyer</button>
                    </div>
                    <div class="col-6 d-flex justify-content-center">
                        <button type="reset" class="btn btn-secondary btn-lg d-inline">Annuler</button>
                    </div>
                </div>
        </div>
      <div id="footer"></div>
    </div>

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
    <script src="../Javascript/Javascript_contact.js" defer></script>
</body>
</html>