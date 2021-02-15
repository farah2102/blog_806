<?php
         include 'fonctions/fonction_bdd.php';

         $article = getArticle(3);
        
        $titre = $article['titre'];
        
        include 'layout/header.php'; ?>
         <img src="<?php echo $article['image'];?>" alt="<?php echo $article['image_alt'];?>" class="banner" />
        <small><?php echo $article['image_copyright'];?></small>

        <h1 class="mb-4"><?php echo $article['titre'];?></h1>

        <p><?php echo $article['contenu'];?></p>

        <?php include 'layout/footer.php';?>
        
