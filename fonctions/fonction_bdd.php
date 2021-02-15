<?php

function connectDB () {
    try {
       $connectDB = new PDO ('mysql:host=localhost;dbname=formawave_php_fil_rouge','root','root');
        return $connectDB;}
    catch (PDOException $e){
        include __DIR__ . "/../erreurs/500.php";
        die();
    }
}

function getArticle($id = null) {

    if (!empty($id)){

            //si on a un $id
            //on va chercher un unique artcile

            $bdd = connectDB();



            $resultat = $bdd->prepare('SELECT * FROM 
            articles WHERE id = ?');
            
            $statement = $bdd->prepare('SELECT * FROM articles WHERE id = ?  ');

            $statement ->bindParam(1,$id);
            

            $statement ->execute();

            return $statement->fetch();
            
        
    }

    else {
        //si on n'a pas $id
        //on va chercher TOUS les articles
        $bdd_pdo = connectDB();

        $resultat = $bdd_pdo->query('SELECT * FROM articles');
  
  
        $articles =array();
                  
  
        while ($article = $resultat->fetch()) {		
               $articles[] = $article;
        }
         return $articles;

    }
}

/**
 * Sert à créer un utilisateur dans la BDD
 * A partir des données de formulaire POST
 */
function createUser() {
	/**
	 * Pas besoin d'accolades pour if et else 
	 * si on n'a qu'une seule instruction derrière
	 */
	if (empty($_POST['image'])) $image = null;	// Si $_POST['image] est vide, $image = null
	else {	// Sinon
		if (filter_var($_POST['image'], FILTER_VALIDATE_URL)) $image = $_POST['image'];	// Si elle est valide, on prend sa valeur
		else $image = null;		// Sinon, tant pis pour l'utilisateur, $image = null
	}

	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);


	$bdd = connectDB();

	$requete = 'INSERT INTO utilisateurs (pseudo, email, image, password) VALUE (?, ?, ?, ?)';

	$statement = $bdd->prepare($requete);

	$statement->bindParam(1, $_POST['pseudo']);
	$statement->bindParam(2, $_POST['email']);
	$statement->bindParam(3, $image);
	$statement->bindParam(4, $password);

	$statement->execute();
}

function getUtilisateurByPseudo($pseudo) {

	$requete = 'SELECT * FROM utilisateurs WHERE pseudo = ?';

	$bdd = connectDB();

	$statement = $bdd->prepare($requete);

	$statement->bindParam(1, $pseudo);

	$statement->execute();

	$utilisateur = $statement->fetch();	// On va chercher une ligne de notre réponse

	return $utilisateur;
}


