<?php
foreach ($tonProduit as $unChamp) {
      }     
?>

<form action="" method="post" onsubmit="return sure()">
    <input type="text" name="Description" value="<?php echo $unChamp['description']; ?>">
    <input type="reel" name="Prix" value="<?php echo $unChamp['prix']; ?>">
        <select id="ListeElement" onchange="VerifListe();"> 
            <?php foreach ($listcategorie as $value) { 
                if($categorie == $value['id'])
                    echo '<option value="'.$value['id'].'" selected>'.$value['libelle'].'</option>';
                else
                    echo '<option value="'.$value['id'].'">'.$value['libelle'].'</option>';
            } ?>
        </select>
    <img height="116ppx" title="Lafleur" alt="Lafleur" src="<?php echo $unChamp['image']; ?>">
    <input type="file" name="nom" />
    <button type="submit" name="form_edit">Faire la modifaction</button>
     
</form>

<script>
    function sure() 
    {
    return confirm ("validez?");
    }

</script>

