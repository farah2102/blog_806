
<?php session_start();



if (empty($_SESSION['is_connected'])) {
	if (!empty($_COOKIE['user_id'])) {

		// Cookie remember se souvient de l'id de l'utilisateur

		include 'fonctions/fonction_bdd.php';
		include 'fonctions/mes_fonction.php';

		$bdd = connectDB();

		$requete = 'SELECT * FROM utilisateurs WHERE id = ?';

		$statement = $bdd->prepare($requete);
		$statement->bindParam(1, $_COOKIE['user_id']);
		$statement->execute();

		$utilisateur = $statement->fetch();

		createSession($utilisateur);
	}
}









?>

 <!doctype html>
<html lang="en">

<head>
    <title><?php echo $titre;?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Mon super blog</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="liste-articles.php">Mes super articles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="creer_article.php">Créer un article</a>
                        </li>
                        <?php if (!empty($_SESSION['is_connected'])) { ?>
						<li class="nav-item">
							<a class="nav-link" href="logout.php">Se déconnecter</a>
						</li>
	<?php } else { ?>
						<li class="nav-item">
							<a class="nav-link" href="login.php">Se connecter</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="signup.php">Créer un compte</a>
						</li>
                        <li class="nav-item">
							<a class="nav-link" href="upload_fichier.php">Ajouter un fichier</a>
						</li>
	<?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
