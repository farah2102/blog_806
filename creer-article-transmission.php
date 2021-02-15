<?php

include './fonctions/fonction_bdd.php';

// if(!empty($_POST['titre']) && !empty($_POST['contenu']))

$bdd = connectDB();

// $requete = 'INSER INTO articles (titre,contenu,image,image_alt,image_copyright,date,lien) VALUE (:titre,:contenu,:image,:image_alt,:copyright,:date,:lien)';

$requete = 'INSERT INTO articles (titre, contenu, image, image_alt, image_copyright, date) VALUE (?,?,?,?,?,?,)'; 

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
//$statement->bindValue(6, date('Y-m-d')); (version flemmard)

// $statement->bindParam(6,$date);
//OU SA
// $statement->execute(
//     array(
//         ':titre' -> $_POST['titre'],
//         ':contenu' -> $_POST['contenu'],
//         ':image' -> $_POST['image'],
//         ':image_alt' -> $_POST['image_alt'],
//         ':image_copyright' -> $_POST['image_copyright'],
//         $date
//     )
// );


