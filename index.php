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