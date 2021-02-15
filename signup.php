<?php
$titre = 'Créer un compte mon super blog';

include 'layout/header.php';?>

<h1 class="mt-4 mb-4 text-danger">Créer un compte</h1>
<hr color="black">

<form action="signup-handler.php" method="post">
	<div class="form-group">
		<label for="pseudo">Pseudo</label>
		<input type="text" class="form-control" name="pseudo" id="pseudo" aria-describedby="pseudo-help" placeholder="Pseudo" required autofocus>
		<small id="pseudo-help" class="form-text text-muted">Votre pseudonyme utilisateur.</small>
	</div>


	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" name="email" id="email" aria-describedby="email-help" placeholder="Email" required>
		<small id="email-help" class="form-text text-muted">Votre adresse email. Doit être valide.</small>
	</div>


	<div class="form-group">
		<label for="image">Image</label>
		<input type="url" class="form-control" name="image" id="image" aria-describedby="image-help" placeholder="Image">
		<small id="image-help" class="form-text text-muted">L'URL qui pointe vers l'image d'illustration de l'article.</small>
	</div>


	<div class="form-group">
		<label for="password">Mot de passe</label>
		<input type="password" class="form-control" name="password" id="password" aria-describedby="password-help" placeholder="Mot de passe" required minlength="6">
		<small id="password-help" class="form-text text-muted">Votre mot de passe. Doit contenir au moins 6 caractères.</small>
	</div>


	<div class="form-group">
		<label for="password_conf">Confirmation du mot de passe</label>
		<input type="password" class="form-control" name="password_conf" id="password_conf" aria-describedby="password_conf-help" placeholder="Confirmation du mot de passe" required minlength="6">
		<small id="password_conf-help" class="form-text text-muted">Veuillez confirmer votre mot de passe. Doit correspondre au champ "Mot de passe".</small>
	</div>

    <hr color="black">
	<button type="submit" class="btn btn-danger mb-4">Créer un nouveau compte</button>
</form>


<?php include 'layout/footer.php';