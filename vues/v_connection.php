<style>
    .monTableau {
        width:70%;
        text-align: center;
    }

    
</style>

<form action="index.php?uc=administrer&action=admin" method="POST" name="form_connect">
    <table class="monTableau">
   <caption>Connection à l'administration</caption>

   <thead> <!-- En-tête du tableau -->
       <tr>
           <th>Nom d'utilisateur</th>
           <th>Mot de passe:</th>
          
       </tr>
   </thead>
   <tbody>
       <tr>
           <td><input type="text" placeholder="Entrer votre nom d'utilisateur" name="utilisateur"></td>
           <td><input type="password" placeholder="Entrer votre mot de passe" name="password"></td>
       </tr>
       <tr>
           <td colspan="2" ><input type="submit" value="Connection"></td>
           <td colspan="2" ></td>
          
       </tr>
   </tbody>
   
</table>
    
    </form>