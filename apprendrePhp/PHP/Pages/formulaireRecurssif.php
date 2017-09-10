<?php
include_once '../Include/healer.inc.php';
 ?>

<?php

// if ((isset($Nom) and isset($Prenom)) and (empty($Nom) and empty($Prenom))) {
if ((isset($_POST["txtNom"]) AND isset($_POST["txtPrenom"])) AND (!empty($_POST["txtNom"]) AND !empty($_POST["txtPrenom"]))) {
  # code...
    echo 'Bonjour ' . htmlspecialchars($_POST["txtNom"]) . ' '.htmlspecialchars($_POST["txtPrenom"]) . '!';
}
else{
?>

<script type="text/javascript">alert('Vous devez renseigner tous les champs')</script>

<div class="container text-center">
  <h1>Veuillez saisir les informations demandées :</h1>
  <form method="post" action="#">
    <p>
      <input type="text" name="txtNom" weight="50" placeholder="Nom" class="text-center"/>
    </p>
    <p>
      <input type="text" name="txtPrenom" weight="50" placeholder="Prénom" class="text-center"/>
    </p>
    <p>
      <input type="submit" name="formulaire" value="Valider" class="text-center"/>
    </p>
  </form>
</div>

  <?php
}

 ?>

 <?php
include_once '../Include/footer.inc.php';
  ?>
