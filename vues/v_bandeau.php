<div id="bandeau">
<!-- Images En-t�te -->
<!--<img src="images/menuGauche.gif"	alt="Choisir" title="Choisir"/>-->
<img src="images/lafleur.jpeg" height="116ppx"	alt="Lafleur" title="Lafleur"/>
</div>
<!--  Menu haut-->
<ul id="menu">
	<li><a href="index.php?uc=accueil"> Accueil </a></li>

	<?php echo ($uc == 'administrer') ? '' : '<li><a href="index.php?uc=voirProduits&action=voirCategories"> Voir le catalogue de fleurs </a></li>'; ?>
	<li><a href="index.php?uc=gererPanier&action=voirPanier"> Voir son panier </a></li>
	<li><a href="index.php?uc=administrer"> Administrer </a></li>
</ul>
