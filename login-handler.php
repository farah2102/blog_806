<?php

include 'fonctions/fonction_bdd.php';
include 'fonctions/mes_fonction.php';

if (
    !empty($_POST['pseudo'])
    && !empty($_POST['password'])
){

    $utilisateur = getUtilisateurByPseudo($_POST['pseudo']);

	if ($utilisateur === false) {		// S'il y a une erreur (par exemple : on n'a pas trouvé l'utilisateur)
		header('location: login.php');	// on redirige vers la page de connexion

		// OU
		// echo 'Mauvais pseudo';

		die;
	} else {

		if (password_verify($_POST['password'], $utilisateur['password'])) {

			session_start();

			createSession($utilisateur);

			if ($_POST['rester-connecte'] == 'true') {		// Si la case est cochée
				// On calcule le timestamp de "dans un an"
				$dans_un_an = time() + 365 * 24 * 60 * 60;

				setcookie('user_id', $utilisateur['id'], $dans_un_an);
			}

			header('location: index.php');
			die;
		} else {
			header('location: login.php');	// on redirige vers la page de connexion

			// OU
			// echo 'Mauvais mot de passe';

			die;
		}
	}
} else {
	header('location: login.php');	// on redirige vers la page de connexion

	// OU
	// echo 'Il manque un champ';

	die;
}
