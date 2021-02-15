 <?php
            include 'fonctions/fonction_bdd.php';

            if (!empty($_GET['id'])) {
            
            $article = getArticle($_GET['id']);

            if ($article == false) {
                include '404.php';
                die;
            }

            $titre = $article['titre'];
        
            include 'layout/header.php'; ?>
        

        <img src="<?php echo $article['image'];?>" alt="<?php echo $article['image_alt'];?>" class="banner" />
        
        <small><?php echo $article['image_copyright'];?></small>

        <h1 class="mb-4"><?php echo $article['titre'];?></h1>

        <p><?php echo $article['contenu'];?></p>

    <?php include 'layout/footer.php';
            
} else {
    include '404.php';
}