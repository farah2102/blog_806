<?php
$titre = 'Créer un compte mon super blog';
include 'layout/header.php';?>

<h1 class="mt-4 mb-4 text-danger">Formulaire d'upload de fichiers </h1>
<hr color="black">

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <h2>Upload Fichier</h2>
        <label for="fileUpload">Fichier:</label>
        <input type="file" name="photo" id="fileUpload">
        <input type="submit" name="submit" value="Upload">
        <p><strong>Note:</strong> Seuls les formats .jpg, .jpeg, .jpeg, .gif, .png sont autorisés jusqu'à une taille maximale de 5 Mo.</p>
    </form>

	<hr color="black">
	<button type="submit" class="btn btn-danger mb-4">upload</button>
</form>


<?php include 'layout/footer.php';