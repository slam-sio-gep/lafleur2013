<?php
 
session_start();

if(!isset($_REQUEST['action']))
     $action = 'admin';
else
	$action = $_REQUEST['action'];


  function connecter($id,$nom) {
      $_SESSION['id'] = $id;
      $_SESSION['nom'] = $nom;
  }
 
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnection';
}

switch($action){
        case 'modifier':
            $mod = $_REQUEST;
            $categorie = $_REQUEST['categorie'];

            if(isset($mod['form_edit']))
                $pdo->modProduct($mod);
           
            $id = $_REQUEST['id'];
            $tonProduit = $pdo->getProduct($id);
           $listcategorie = $pdo->getLesCategories();

            include('vues/v_modifproduit.php');
            break;
        case 'delete':
         
            $id = $_REQUEST['id'];
            $categorie = $_REQUEST['categorie'];
            $pdo->supProduct($id,$categorie);
            
            
            
            
            
            break;
        case 'administrer':
        case 'admin':
            // Début de page
 
            if(!empty($_POST)) {
                
        	$login = $_POST['utilisateur'];
		$mdp = $_POST['password'];

		$administrateur = $pdo->getInfosadministrateur($login,$mdp);

                
                if(!is_array($administrateur)){

                    
		$msgErreurs[] = "Login ou mot de passe incorrect";
			include("vues/v_erreurs.php");
			
		}
		else{
			$id = $administrateur['id'];
			$nom =  $administrateur['nom'];
			$msgErreurs[] = "Vous êtes connecté";
                        include("vues/v_erreurs.php");
			connecter($id,$nom);
	
		}

            }
            if(!empty($_SESSION['id']))
            
                {
                $resultCategories = $pdo->getLesCategories();
                $categorie = $_REQUEST['categorie'];
                $lesProduits = $pdo->getLesProduitsDeCategorie($categorie);
                  include("vues/v_backoffice.php");
            }
            else
            {
                 include("vues/v_connection.php");
            }
                
                
                // Fin de la page
		break;
        case 'voirProduits':
            
        $lesCategories = $pdo->getLesCategories();
        include("vues/v_categories.php");
        $categorie = $_REQUEST['categorie'];
        $lesProduits = $pdo->getLesProduitsDeCategorie($categorie);
        include("vues/v_produits.php");
            break;
	default :
		echo "Page 404";
		break;
        
}
?>


