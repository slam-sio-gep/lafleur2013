<script>
var categorie = "<?php echo $categorie; ?>";

function supprimerProduit(id,name) {
    
 
    if (confirm("Voulez-vous supprimer "+name+" qui porte l'id:"+id+" ?") == true)
        {
        alert('supprimer ok');
        document.location.href='index.php?uc=administrer&id='+id+'&action=delete&categorie='+categorie;
       
        }
    else 
        {
        alert('annuler');
        }
  
}


</script>
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
                             <?php
                        if($uc == 'voirProduits')
			echo'<li><a style="text-decoration: none;"href="index.php?uc=voirProduits&categorie='.$categorie.'&produit='.$id.'&action=ajouterAuPanier"> 
                                <img src="images/mettrepanier.png" TITLE="Ajouter au panier"> </li></a>';
                    else 
                        { 
                        echo'<li><a style="text-decoration: none;"href="index.php?uc=administrer&categorie='.$categorie.'&action=modifier&id='.$id.'"> 
                                <img src="images/modifier_produit.png" TITLE="Modifié le produit"> </li></a>';
                    
                        }
                        ?>
                        <?php
                        if($uc == 'administrer')	
                        echo'<li><img name="supprimer" style="cursor:pointer;" onclick="supprimerProduit(\''.$id.'\',this.name);" src="images/supprimer_produit.png" height="32" width="32" TITLE="Supprimé le produit"></li>';
                        ?>
			
	</ul>
			
			
			
<?php			
}
?>
</div>
