<?php
include_once '../Include/healer.inc.php';
 ?>


   <h1>Créer un compte :</h1>
   <h2>Renseigner les informations demandées : </h2>
 </br>


<form class="form-horizontal" action="nouveauMembre.php" method="POST">
  <div class="form-group">
    <label class="control-label col-sm-4" for="Email">Email:</label>
    <div class="col-sm-4">
      <input type="email" class="form-control" name="Email" placeholder="Entrer email" class="text-center" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="Pseudo">Pseudo:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="Pseudo" placeholder="Entrer pseudo" class="text-center" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="Password">Mot de passe:</label>
    <div class="col-sm-4">
      <input type="password" class="form-control" name="Password" placeholder="Entrer votre mot de passe" class="text-center" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="ConfirMdp">Confirmation mot de passe:</label>
    <div class="col-sm-4">
      <input type="password" class="form-control" name="ConfirMdp" placeholder="Confirmation" class="text-center" required>
    </div>
  </div>

  <div class="form-group">
    <label for="OK" class="control-label col-sm-4"></label>
    <div class="col-sm-4">
      <input type="submit" name="OK" value="Valider" class="btn btn-success">
    </div>
  </div>

</form>




 <?php
include_once '../Include/footer.inc.php';
  ?>
