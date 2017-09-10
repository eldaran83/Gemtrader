<?php
include_once '../Include/healer.inc.php';
 ?>
<!-- Connection à la BDD -->
 <?php
 include'../../DAL/Connection.php';
  ?>
  <!-- On ajoute le membre en BDD -->
 <?php
 require'../../DAL/AjouterUser.php';
  ?>

<div class="container text-center">
  <h1>Bienvenue <?php echo $_POST['Pseudo']; ?></h1></br>
  <h2>Cela fait un peu court, vous devriez vous présenter un peu plus en détail.</h2>
  </br>
  <form class="form-horizontal" action="sessionUser.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-4" for="Nom">Nom:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="Nom" placeholder="Entrer votre nom" class="text-center" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="Prenom">Prénom:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="Prenom" placeholder="Entrer votre prénom" class="text-center" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="DateNaissance">Date de naissance:</label>
      <div class="col-sm-4">
        <input type="date" class="form-control" name="DateNaissance" placeholder="Date de naissance" class="text-center" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="Adresse1">Adresse:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="Adresse1" placeholder="Entrer votre adresse" class="text-center" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="Adresse2">Complément adresse:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="Adresse2" placeholder="Complément adresse" class="text-center">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="Cp">Z.I.P:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="Cp" placeholder="ZIP" class="text-center" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="Region">Région:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="Region" placeholder="Région" class="text-center">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="Ville">Ville:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="Ville" placeholder="Ville" class="text-center" required >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="Pays">Pays:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="Pays" placeholder="Pays" class="text-center" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="Telephone">Téléphone:</label>
      <div class="col-sm-4">
        <input type="tel" class="form-control" name="Telephone" placeholder="Téléphone" class="text-center">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="PhotoUser">Votre avatar:</label>
      <div class="col-sm-4">
        <input type="file" class="form-control" name="PhotoUser" placeholder="Choisir une image ..." class="text-center" accept="image/*">
       </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="Lien">Où vous trouver sur la toile:</label>
      <div class="col-sm-4">
        <input type="url" class="form-control" name="Lien" placeholder="Votre url ..." class="text-center">
       </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="Commentaire">Commentaire(s):</label>
      <div class="col-sm-4">
        <!-- <input type="textarea" class="form-control" name="Commentaire" placeholder="Présentez-vous plus en détails..."> -->
       <textarea name="Commentaire" rows="4" cols="75" placeholder="Exprimez-vous !" id="Commentaire" ></textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="OK" class="control-label col-sm-4"></label>
      <div class="col-sm-4">
        <input type="submit" name="OK" value="Valider" class="btn btn-success">
      </div>
    </div>
  </form>
</div>


<?php
include_once '../Include/footer.inc.php';
 ?>
