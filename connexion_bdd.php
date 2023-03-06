<?php
$connexion = mysqli_connect('localhost', 'root', 'root', 'produits');
if (!$connexion) {
    die('Erreur : ' . mysqli_connect_error());
}
//echo "connexion réussie";
