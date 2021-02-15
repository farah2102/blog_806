<?php 
$titre = 'Créer un nouveau super article | Mon super blog';
include 'layout/header.php';?>

<h1 class=" mt-4 mb-4 text-danger">Créer un nouvel article</h1>
<hr color="black">

<form action="creer-article-transmission.php" method="post">
	<div class="form-group">
		<label for="titre">Titre</label>
		<input type="text" class="form-control" name="titre" id="titre" aria-describedby="titre-help" placeholder="Titre" autofocus>
		<small id="titre-help" class="form-text text-muted">Le titre de l'article.</small>
	</div>


	<div class="form-group">
		<label for="image">Image</label>
		<input type="url" class="form-control" name="image" id="image" aria-describedby="image-help" placeholder="Image">
		<small id="image-help" class="form-text text-muted">L'URL qui pointe vers l'image d'illustration de l'article.</small>
	</div>


	<div class="form-group">
		<label for="image_alt">Alternative textuelle</label>
		<input type="text" class="form-control" name="image_alt" id="image_alt" aria-describedby="image_alt-help" placeholder="Alternative textuelle">
		<small id="image_alt-help" class="form-text text-muted">L'alternative textuelle de l'image d'illustration de l'article.</small>
	</div>


	<div class="form-group">
		<label for="image_copyright">Copyright</label>
		<textarea class="form-control" name="image_copyright" id="image_copyright" aria-describedby="image_copyright-help" rows="5"></textarea>
		<small id="image_copyright-help" class="form-text text-muted">Le HTML qui sert de copyright à l'image d'illustration de l'article.</small>
	</div>


	<div class="form-group">
		<label for="contenu">Contenu</label>
		<textarea class="form-control" name="contenu" id="contenu" aria-describedby="contenu-help" rows="5"></textarea>
		<small id="contenu-help" class="form-text text-muted">Le contenu de l'article.</small>
	</div>

	<hr color="black">
	<button type="submit" class="btn btn-danger mb-4">Nouvel article</button>
</form>



<?php include 'layout/footer.php';?>