<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="result">
        <div class="result-content">
            <a href="index.php" class="index php">Ajouter un produit</a>
            <h3>Liste des produits</h3>
            <div class="liste-produits">
                <?php
                require 'connexion_bdd.php';
                $req3 = mysqli_query($connexion, "SELECT * FROM produit ");
                if (mysqli_num_rows($req3) == 0) {
                    echo '<p style="color: red;">Aucun article trouvé</p>';
                }

                while ($row = mysqli_fetch_assoc($req3)) {
                ?>
                    <div class="produit">
                        <div class="image-prod">
                            <img src="image_bdd/<?= $row['image'] ?>" alt="">
                        </div>
                        <div class="text"> <strong>
                                <p class="titre"><?= $row['titre'] ?></p>
                            </strong>
                            <p class="description"><?= $row['description'] ?></p>
                        </div>
                    </div>
                <?php
                }

                ?>
                <!-- Produits -->


            </div>
        </div>
    </div>

</body>

</html>