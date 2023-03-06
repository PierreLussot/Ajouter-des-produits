<?php
if (isset($_POST['btn-ajouter'])) {
    require 'connexion_bdd.php';
    extract($_POST);
    if (isset($titre) && isset($description) && $titre != "" && $description != "") {
        $req1 = mysqli_query($connexion, "SELECT titre,description FROM produit WHERE titre = '$titre' AND description = '$description' ");
        if (mysqli_num_rows($req1) > 0) {
            $message = '<p style="color: red;">Le produit existe deja</p>';
        } else {
            if (isset($_FILES['image'])) {
                //si une image a été télécharger
                $img_nom = $_FILES['image']['name']; // on recupere le nom de l'image
                $tmp_nom = $_FILES['image']['tmp_name']; // nous définisson un nom temporaire
                $time = time(); // on recupere l'heure actuelle
                //on renomme l'image 
                $nouveau_nom_img = $time . $img_nom;
                //on deplace l'image dans un dossier
                $deplacer_img = move_uploaded_file($tmp_nom, "image_bdd/" . $nouveau_nom_img);
                if ($deplacer_img) {
                    $req2 = mysqli_query($connexion, "INSERT INTO produit(titre,description,image) VALUES ('$titre','$description','$nouveau_nom_img')");
                    if ($req2) {
                        $message = '<p style="color: green;">Produit ajouté</p>';
                    } else {
                        $message = '<p style="color: red;">Produit non ajouté</p>';
                    }
                }
            }
        }
    } else {
        $message = '<p style="color: red;">Veuillez remplir tous les champs</p>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des produits</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <section class="input_add">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="message">
                <?php
                /*  echo "<pre>";
                var_dump($_FILES['image']);
                echo "</pre>"; */

                if (isset($message)) {
                    echo $message;
                }

                ?>


            </div>
            <label for="">Nom produits</label>
            <input type="text" name="titre">
            <label for="">Description</label>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
            <label for="">Ajouter une image</label>
            <input type="file" name="image">
            <input type="submit" value="Ajouter" name="btn-ajouter">
            <a href="resultats.php" class="btn-liste-prod">Liste des produits</a>


        </form>

    </section>
</body>

</html>