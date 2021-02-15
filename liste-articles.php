<?php
$titre = 'Mes super articles | Mon super Blog';
include 'layout/header.php'
?>

<h1 class="mt-4 mb-4 text-danger ">Mes super articles</h1>
<hr color="black">
<div class="list-group my-4">
    <?php
    include 'fonctions/fonction_bdd.php';

    include 'fonctions/mes_fonction.php';

    $articles = getArticle();

    foreach ($articles as $article) {
        affichage($article);
    }

    ?>
</div>
<hr color="black">
<?php include 'layout/footer.php'; ?>