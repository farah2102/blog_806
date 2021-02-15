<?php

include 'fonctions/fonction_bdd.php';

// if(!empty($_POST['titre']) && !empty($_POST['contenu']))

$bdd = connectDB();


$requete = 'UPDATE articles SET titre = ?, image = ?, image_alt = ?, image_copyright = ?, contenu = ? WHERE id = ?'; 

$statement = $bdd->prepare($requete);
$date = date('Y-m-d');

//SA
$statement->bindParam(1,$_POST['titre']);
$statement->bindParam(2,$_POST['contenu']);
$statement->bindParam(3,$_POST['image']);
$statement->bindParam(4,$_POST['image_alt']);
$statement->bindParam(5,$_POST['image_copyright']);
$statement->bindParam(6,$date);

$statement->execute();

header('location: liste-articles.php');
	die;


