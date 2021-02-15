<?php

if (
	// On vérifie que nos champs ne sont pas vides s'ils sont requis
	!empty($_POST['pseudo'])
	&& !empty($_POST['email'])
	&& !empty($_POST['password'])
	&& !empty($_POST['password_conf'])

	// On vérifie que le mot de passe et sa confirmation sont identiques
	&& $_POST['password'] === $_POST['password_conf']

	// On vérifie que le mot de passe fait au moins 6 caractères
	&& strlen($_POST['password']) >= 6

	// On vérifie que l'email est valide
	&& filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
) {

	include './fonctions/fonction_bdd.php';

	createUser();

	// Je redirige vers index.php
	header('location: index.php');
	die;
	// header('location: connect.php');


} else {
	echo 'Qui fait le malin, tombe dans le ravin !';
	die;
}

