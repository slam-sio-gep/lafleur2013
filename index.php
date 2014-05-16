<?php
session_start();


if(isset($_GET["logout"])) {
   
    session_destroy();
    header("Location: ".dirname($_SERVER['SCRIPT_NAME'])." ");

}
    
//var_dump($_SERVER);
require_once("util/fonctions.inc.php");
require_once("util/class.pdoLafleur.inc.php");


if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];

include("vues/v_entete.php") ;
include("vues/v_bandeau.php") ;


$pdo = PdoLafleur::getPdoLafleur();	 
switch($uc)
{
	case 'accueil':
		{include("vues/v_accueil.php");break;}
	case 'voirProduits' :
		include("controleurs/c_voirProduits.php");break;
	case 'gererPanier' :
		{ include("controleurs/c_gestionPanier.php");break; }
	case 'administrer' :
	  { include("controleurs/c_gestionProduits.php");break;  }
}
include("vues/v_pied.php") ;
?>

