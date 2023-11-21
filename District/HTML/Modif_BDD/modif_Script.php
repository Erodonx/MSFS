<?php

include 'Bdd_auth.php';

$stmt = $conn->query("SELECT * FROM plat");

$stmt1 = $conn->query("SELECT * FROM categorie");

//Ajout des plats asiatiques
$id=1;
$libelle='Sushi maki';
$description='Sushis maki, un régal,
saumon frais pêché de la veille ! Pêché avec amour et soin.';
$prix=8.50;
$image='sushi_maki.jpeg'; //'i14425-recette-de-sushis.jpeg'
$id_categorie=12;
  $active='Yes';

$id1=2;
$libelle1='Boeuf caramel';
$description1='Du boeuf au caramel, sans
prétention. un régaahjkehazhrahjkhjkakjhr';
$prix1=10.50;
$image1='boeuf_caramel.jpg'; //'boeuf-caramel-final-scaled.jpg'

$id2=3;
$libelle2='Yakitori';
$description2='Yakitori, du boeuf avec du
fromage dans des belles brochettes.';
$prix2=9.00;
$image2='Yakitori.jpg'; //Yakitori-boeuf-fromage-recette-simple-et-rapide-de-brochettes-japonaises.jpg

$id3=4;
$libelle3='Riz cantonais';
$description3='Du riz cantonais, un
classique quand on veux manger asiatique.';
$prix3=12.00;
$image3='riz_cantonais.jpg';

$id_categorie1=5;
   
$id4=5;
$libelle4='Infamous Burger';
$description4='L\'infamous
burger, ce burger est extra, idéal pour les gros mangeurs et ceux qui ont
envie de se faire péter la panse.';
$prix4=7.5;
$image4='cheesburger.jpg';


$id5=6;
$libelle5='Cheeseburger';
$description5='Le classique, cheeseburger,
un burger pour ceux qui ont envie de rester sur les acquis en terme de
burger. Il contient des tomates de la salade et des oignons.';
$image5='hamburger_resized.jpg';

$id6=7;
$libelle6='Double beef Burger';
$description6='Le double beef burger, la
viande est tellement épaisse que quand vous prenez une bouchée. Elle absorbe
tout l\'espace dans la bouche, idéal pour les enfants ça les empêche de
parler la bouche pleine !';
$image6='double_beef.jpg'; //Food-Name-6340.jpg

$id7=8;
$libelle7='Wide_putin_burger';
$description7='Le Putin Burger,
une bouchée de ce délicieux burger et vous êtes pris d\'une envie
irrépressible d\'envahir l\'Ukraine et ainsi exhiber votre
gigantesque table en marbre au monde entier';
$prixShiney=82.00;
$image7='Putin_hidden.png'; //Food-Name-433.png

$id_categorie2=10;    

$id8=9;
$libelle8='Pâte crême';
$description8='Pâtes à la crème et aux
herbes, un plat subtil pour les palais affûtés, parmesan inclus a disposer
soi-même.';
$image8='pasta_cat.jpg';


$id9=10;
$libelle9='Pâtes bolognaise';
$description9='Pâtes bolognaise, un
classique, avec un petit ajout secret à la recette qui vous plaîra
certainement.';
$image9='Bôlolo.jpeg';

$id10=11;
$libelle10='Pâtes carbonara';
$description10='Pâtes carbonara, avec de la
crême onctueuse, le jaune d\'oeuf est en option si vous le souhaitez.';
$prix5=13.00;
$image10='Carbo.jpeg';

$id11=12;
$libelle11='Penne saumon';
$description11='Penne au saumon, pour ceux
qui ont envie de manger des pâtes fraîches avec du bon poisson.';
$prix6=15.00;
$image11='penne_saumon.jpg'; //pennes-saumon-creme_istock.jpg

$id_categorie3=13;

$id12=13;
$libelle12='Salade césar';
$description12='Une salade césar, avec oeufs,
poulet et une bonne petite vinaigrette!';
$image12='cesar_salad.jpg';

$id13=14;
$libelle13='Salade mystère';
$description13='Salades mystère, avec un
ingrédient secret, pour ceux qui veulent découvrir une expérience.';
$prix7=7.50;
$image13='salad1.png';

$id14=15;
$libelle14='Salade de riz';
$description14='Salade de riz, fraiche avec
du thon, idéale lors d\'une journée bien ensoleillée.';
$prix8=9.75;
$image14='Saladederiz.jpg';

$id15=16;
$libelle15='Salade de pâtes';
$description15='Une salade de pâtes fraiches,
sans prétention avec quelques légumes frais du potager.';
$image15='saladepates.jpeg';

$id_categorie4=9;

$id16=17;
$libelle16='Wraps saumon';
$description16='Wraps au saumon, avec du
fromage frais, de la bonne feta grecque.';
$image16='Saumonwrap.jpeg';

$libelle17='Wrap poulet';
$description17='wraps poulet, avec le classique salades, tomates et oignons, et ouais on fait comme au kébab ici!';
$image17='wrap_poulet.jpg'; //Food-Name-3461.jpg

$libelle18='Wrap mergez';
$description18='Wraps merguez et oeuf, celui-ci est cuit, idéal pour ceux qui veulent tenter une expérience.';
$image18='wrapsmerguez.jpg';

$libelle19='Wrap thon';
$description19='Wraps au thons avec de la crème faite maison, venez, decouvrez ce régal par vous-même!';
$image19='wrapsthons.jpeg';

$id_categorie5=4;

$libelle20='Pizza margherita';
$description20='Pizza margherita, un
classique qui saura stimuler vos papilles gustatives et vous plonger dans
une extase profonde.';
$image20='pizza-margherita.jpg';

$libelle21='Salmonellose';
$description21='La Salmonellose, une pizza
au saumon fraiche, qui saura vous combler et vous satisfaire.';
$image21='pizza-salmon.png';

$libelle22='Pizza Kebab';
$description22='Pizza kébab, un choc
culturel ainsi que gustatif, un vrai régal avec une sauce kebab indémodable.';
$image22='pizzakebab.png';

$libelle23='Pizza orientale';
$description23='Pizza orientale, avec
merguez et des bons légumes frais du potager ainsi que du fromage.';
$image23='pizzaorientale.jpg';

$cat_image1='asian_food_cat_resized.jpg';
$cat_image2='salade_cat_resized.jpg';

$none='No';


try {
    //$conn nous permettra d'accéder au connecteur PDO

      $conn->beginTransaction();

    // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie, id) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie, :id)");
    // $stmt->bindParam(':id',$id);
    // $stmt->bindParam(':libelle',$libelle);
    // $stmt->bindParam(':description',$description);
    // $stmt->bindParam(':prix',$prix);
    // $stmt->bindParam(':image',$image);
    // $stmt->bindParam(':id_categorie',$id_categorie);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie, id) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie, :id)");
    // $stmt->bindParam(':id',$id1);
    // $stmt->bindParam(':libelle',$libelle1);
    // $stmt->bindParam(':description',$description1);
    // $stmt->bindParam(':prix',$prix1);
    // $stmt->bindParam(':image',$image1);
    // $stmt->bindParam(':id_categorie',$id_categorie);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie, id) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie, :id)");
    // $stmt->bindParam(':id',$id2);
    // $stmt->bindParam(':libelle',$libelle2);
    // $stmt->bindParam(':description',$description2);
    // $stmt->bindParam(':prix',$prix2);
    // $stmt->bindParam(':image',$image2);
    // $stmt->bindParam(':id_categorie',$id_categorie);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("UPDATE plat SET libelle=:libelle, description=:description, prix=:prix, image=:image, id_categorie=:id_categorie, active=:active   WHERE id=:id");
    // $stmt->bindParam(':id',$id3);
    // $stmt->bindParam(':libelle',$libelle3);
    // $stmt->bindParam(':description',$description3);
    // $stmt->bindParam(':prix',$prix3);
    // $stmt->bindParam(':image',$image3);
    // $stmt->bindParam(':id_categorie',$id_categorie);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();


    // $stmt = $conn->prepare("UPDATE plat SET libelle=:libelle, description=:description, prix=:prix, image=:image, id_categorie=:id_categorie, active=:active   WHERE id=:id");
    // $stmt->bindParam(':id',$id4);
    // $stmt->bindParam(':libelle',$libelle4);
    // $stmt->bindParam(':description',$description4);
    // $stmt->bindParam(':prix',$prix4);
    // $stmt->bindParam(':image',$image4);
    // $stmt->bindParam(':id_categorie',$id_categorie1);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie, id) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie, :id)");
    // $stmt->bindParam(':id',$id5);
    // $stmt->bindParam(':libelle',$libelle5);
    // $stmt->bindParam(':description',$description5);
    // $stmt->bindParam(':prix',$prix);
    // $stmt->bindParam(':image',$image5);
    // $stmt->bindParam(':id_categorie',$id_categorie1);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();
    
    // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie, id) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie, :id)");
    // $stmt->bindParam(':id',$id6);
    // $stmt->bindParam(':libelle',$libelle6);
    // $stmt->bindParam(':description',$description6);
    // $stmt->bindParam(':prix',$prix1);
    // $stmt->bindParam(':image',$image6);
    // $stmt->bindParam(':id_categorie',$id_categorie1);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();
    
    // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie, id) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie, :id)");
    // $stmt->bindParam(':id',$id7);
    // $stmt->bindParam(':libelle',$libelle7);
    // $stmt->bindParam(':description',$description7);
    // $stmt->bindParam(':prix',$prixShiney);
    // $stmt->bindParam(':image',$image7);
    // $stmt->bindParam(':id_categorie',$id_categorie1);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("UPDATE plat SET libelle=:libelle, description=:description, prix=:prix, image=:image, id_categorie=:id_categorie, active=:active   WHERE id=:id");
    // $stmt->bindParam(':id',$id8);
    // $stmt->bindParam(':libelle',$libelle8);
    // $stmt->bindParam(':description',$description8);
    // $stmt->bindParam(':prix',$prix3);
    // $stmt->bindParam(':image',$image8);
    // $stmt->bindParam(':id_categorie',$id_categorie2);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();
    
    // $stmt = $conn->prepare("UPDATE plat SET libelle=:libelle, description=:description, prix=:prix, image=:image, id_categorie=:id_categorie, active=:active   WHERE id=:id");
    // $stmt->bindParam(':id',$id9);
    // $stmt->bindParam(':libelle',$libelle9);
    // $stmt->bindParam(':description',$description9);
    // $stmt->bindParam(':prix',$prix4);
    // $stmt->bindParam(':image',$image9);
    // $stmt->bindParam(':id_categorie',$id_categorie2);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie, id) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie, :id)");
    // $stmt->bindParam(':id',$id10);
    // $stmt->bindParam(':libelle',$libelle10);
    // $stmt->bindParam(':description',$description10);
    // $stmt->bindParam(':prix',$prix5);
    // $stmt->bindParam(':image',$image10);
    // $stmt->bindParam(':id_categorie',$id_categorie2);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();
    
    // $stmt = $conn->prepare("UPDATE plat SET libelle=:libelle, description=:description, prix=:prix, image=:image, id_categorie=:id_categorie, active=:active   WHERE id=:id");
    // $stmt->bindParam(':id',$id11);
    // $stmt->bindParam(':libelle',$libelle11);
    // $stmt->bindParam(':description',$description11);
    // $stmt->bindParam(':prix',$prix6);
    // $stmt->bindParam(':image',$image11);
    // $stmt->bindParam(':id_categorie',$id_categorie2);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("UPDATE plat SET libelle=:libelle, description=:description, prix=:prix, image=:image, id_categorie=:id_categorie, active=:active   WHERE id=:id");
    // $stmt->bindParam(':id',$id12);
    // $stmt->bindParam(':libelle',$libelle12);
    // $stmt->bindParam(':description',$description12);
    // $stmt->bindParam(':prix',$prix2);
    // $stmt->bindParam(':image',$image12);
    // $stmt->bindParam(':id_categorie',$id_categorie3);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("UPDATE plat SET libelle=:libelle, description=:description, prix=:prix, image=:image, id_categorie=:id_categorie, active=:active   WHERE id=:id");
    // $stmt->bindParam(':id',$id13);
    // $stmt->bindParam(':libelle',$libelle13);
    // $stmt->bindParam(':description',$description13);
    // $stmt->bindParam(':prix',$prix7);
    // $stmt->bindParam(':image',$image13);
    // $stmt->bindParam(':id_categorie',$id_categorie3);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("UPDATE plat SET libelle=:libelle, description=:description, prix=:prix, image=:image, id_categorie=:id_categorie, active=:active   WHERE id=:id");
    // $stmt->bindParam(':id',$id14);
    // $stmt->bindParam(':libelle',$libelle14);
    // $stmt->bindParam(':description',$description14);
    // $stmt->bindParam(':prix',$prix8);
    // $stmt->bindParam(':image',$image14);
    // $stmt->bindParam(':id_categorie',$id_categorie3);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("UPDATE plat SET libelle=:libelle, description=:description, prix=:prix, image=:image, id_categorie=:id_categorie, active=:active   WHERE id=:id");
    // $stmt->bindParam(':id',$id15);
    // $stmt->bindParam(':libelle',$libelle15);
    // $stmt->bindParam(':description',$description15);
    // $stmt->bindParam(':prix',$prix3);
    // $stmt->bindParam(':image',$image15);
    // $stmt->bindParam(':id_categorie',$id_categorie3);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();
    
    // $stmt = $conn->prepare("UPDATE plat SET libelle=:libelle, description=:description, prix=:prix, image=:image, id_categorie=:id_categorie, active=:active   WHERE id=:id");
    // $stmt->bindParam(':id',$id16);
    // $stmt->bindParam(':libelle',$libelle16);
    // $stmt->bindParam(':description',$description16);
    // $stmt->bindParam(':prix',$prix6);
    // $stmt->bindParam(':image',$image16);
    // $stmt->bindParam(':id_categorie',$id_categorie4);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie)");
    // $stmt->bindParam(':libelle',$libelle17);
    // $stmt->bindParam(':description',$description17);
    // $stmt->bindParam(':prix',$prix4);
    // $stmt->bindParam(':image',$image17);
    // $stmt->bindParam(':id_categorie',$id_categorie4);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();
    // $plat_id = $conn->lastInsertId();


    // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie)");
    // $stmt->bindParam(':libelle',$libelle18);
    // $stmt->bindParam(':description',$description18);
    // $stmt->bindParam(':prix',$prix4);
    // $stmt->bindParam(':image',$image18);
    // $stmt->bindParam(':id_categorie',$id_categorie4);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();
    // $plat_id = $conn->lastInsertId();

    // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie)");
    // $stmt->bindParam(':libelle',$libelle19);
    // $stmt->bindParam(':description',$description19);
    // $stmt->bindParam(':prix',$prix4);
    // $stmt->bindParam(':image',$image19);
    // $stmt->bindParam(':id_categorie',$id_categorie4);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();
    // $plat_id = $conn->lastInsertId();


    // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie)");
    // $stmt->bindParam(':libelle',$libelle20);
    // $stmt->bindParam(':description',$description20);
    // $stmt->bindParam(':prix',$prix1);
    // $stmt->bindParam(':image',$image20);
    // $stmt->bindParam(':id_categorie',$id_categorie5);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();
    // $plat_id = $conn->lastInsertId();
    
    // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie)");
    // $stmt->bindParam(':libelle',$libelle21);
    // $stmt->bindParam(':description',$description21);
    // $stmt->bindParam(':prix',$prix2);
    // $stmt->bindParam(':image',$image21);
    // $stmt->bindParam(':id_categorie',$id_categorie5);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();
    // $plat_id = $conn->lastInsertId();

    // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie)");
    // $stmt->bindParam(':libelle',$libelle22);
    // $stmt->bindParam(':description',$description22);
    // $stmt->bindParam(':prix',$prix2);
    // $stmt->bindParam(':image',$image22);
    // $stmt->bindParam(':id_categorie',$id_categorie5);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();
    // $plat_id = $conn->lastInsertId();

    // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie)");
    // $stmt->bindParam(':libelle',$libelle23);
    // $stmt->bindParam(':description',$description23);
    // $stmt->bindParam(':prix',$prix3);
    // $stmt->bindParam(':image',$image23);
    // $stmt->bindParam(':id_categorie',$id_categorie5);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();
    // $plat_id = $conn->lastInsertId();



    $stmt1 = $conn->PREPARE("UPDATE categorie SET active=:active,image=:image where id=:id");
    $stmt1-> bindParam(':active',$active);
    $stmt1-> bindParam(':image',$cat_image1);
    $stmt1-> bindParam(':id',$id11);
    $stmt1->execute();

    $stmt1 = $conn->PREPARE("UPDATE categorie SET active=:active where id=:id");
    $stmt1-> bindParam(':active',$none);
    $stmt1-> bindParam(':id',$id13);
    $stmt1->execute();

    $stmt1 = $conn->PREPARE("UPDATE categorie SET active=:active where id=:id");
    $stmt1-> bindParam(':active',$none);
    $stmt1-> bindParam(':id',$id10);
    $stmt1->execute();

    $stmt1 = $conn->PREPARE("UPDATE categorie SET image=:image where id=:id");
    $stmt1-> bindParam(':image',$cat_image2);
    $stmt1->bindParam(':id',$id12);
    $stmt1->execute();




    
    $conn->commit();

    echo 'Modification dans la base de donnée effectué ! :)';
} catch (PDOException $e) {
    // En cas d'erreur, annuler la transaction
    $conn->rollback();
    echo "Erreur : " . $e->getMessage();
}






?>