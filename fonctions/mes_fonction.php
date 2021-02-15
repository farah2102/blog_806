<?php

 function resume($article){
    return substr($article['contenu'], 0,150) . '...';
 }
 function affichage($article){ ?>

    <article class="list-group-item list-group-item-action" aria-current="true">
        <div class="d-flex w-100 justify-content-between">
            <h2 class="mb-1">
                <?php echo $article['titre']; ?>
            </h2>
            <small>
                <?php echo $article['date']; ?>
            </small>
        </div>
        <p class="mb-1">
            <?php echo resume($article); ?>
        </p>
        <small class="text-muted"><a href="<?php echo 'article.php?id='. $article['id']; ?>">Lire l'article.</a></small><br>
        <small class="text-muted"><a href="modification_article.php">Modifier l'article.</a></small>
    </article>
    
     <?php }

     /**
 * Crée la session qui correspond à l'utilisateur
 */
function createSession($utilisateur) {
	$_SESSION['is_connected'] = true;
	$_SESSION['pseudo'] = $utilisateur['pseudo'];
	$_SESSION['image'] = $utilisateur['image'];
	$_SESSION['email'] = $utilisateur['email'];
}