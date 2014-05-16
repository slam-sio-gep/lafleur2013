<ul id="categories">
<?php
foreach( $resultCategories as $uneCategorie) 
{
	$idCategorie = $uneCategorie['id'];
	$libCategorie = $uneCategorie['libelle'];
	?>
	<li>
		<a href=index.php?uc=administrer&categorie=<?php echo $idCategorie ?>&action=voirProduits><?php echo $libCategorie ?></a>
	</li>
<?php
}
?>
</ul>


<div id="produits">
<?php
	
foreach( $lesProduits as $unProduit) 
{
	$id = $unProduit['id'];
	$description = $unProduit['description'];
	$prix=$unProduit['prix'];
	$image = $unProduit['image'];
	?>	
	<ul>
			<li><img src="<?php echo $image ?>" alt=image /></li>
			<li><?php echo $description ?></li>
			 <li><?php echo " : ".$prix." Euros" ?>
			<li><a href=index.php?uc=voirProduits&categorie=<?php echo $categorie ?>&produit=<?php echo $id ?>&action=ajouterAuPanier> 
			 <img src="images/mettrepanier.png" TITLE="Ajouter au panier" </li></a>
			
	</ul>
			
			
			
<?php			
}
?>
</div>

<!-- deconnxion -->

<form action='' method="post">
    <p><input type="submit" name="logout" value="Déconnexion"/></p>
</form>

<?php
if (isset($_POST['logout'])) {   
    session_destroy();
    header("Location: ".dirname($_SERVER['SCRIPT_NAME']).""); /* retourne a l'accueil */
}
?>