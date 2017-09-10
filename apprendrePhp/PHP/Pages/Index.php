

<?php
include_once '../Include/healer.inc.php';
 ?>

 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="../../Images/diamant.jpg" alt="Image diamant" >
        <div class="carousel-caption">
          <h3>Diamant</h3>
          <p>de Tanzannie.</p>
        </div>
      </div>

      <div class="item">
        <img src="../../Images/Perle.jpg" alt="Image perles fines" >
        <div class="carousel-caption">
          <h3>Perles fines</h3>
          <p>de Russie.</p>
        </div>
      </div>


      <div class="item">
        <img src="../../Images/saphir.jpg" alt="Image saphir" >
        <div class="carousel-caption">
          <h3>Saphir</h3>
          <p>d'Afrique.</p>
        </div>
      </div>

      <div class="item">
        <img src="../../Images/emeraude.jpg" alt="Image Emeraude" >
        <div class="carousel-caption">
          <h3>Emeraude</h3>
          <p>de Colombie.</p>
        </div>
      </div>

      <div class="item">
        <img src="../../Images/topaze.jpg" alt="Image topaze" >
        <div class="carousel-caption">
          <h3>Topaze</h3>
          <p>de Colombie.</p>
        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Précédent</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Suivant</span>
    </a>
</div>

<div class="container text-center">
  <div class="Presentation">
    <h3>Présentation</h3><br>
    <section>
      <p>Bienvenue sur GemTrader, la plateforme de présentation et de négoce en pierres précieuses.</p>
      <p>Vous avez la possibilité de vous informer sur toute l'actualité du monde des pierres précieuses, mais également de vous informer et de vous inscrire à une école connue et reconnue dans son expertise et son négoce.</p>
    </section>
  </div>
  <div class="row">
    <div class="col-sm-4 section">
      <img src="../../Images/joaillier.jpg
      " class="img-responsive" style="width:100%" alt="Image expertise pierre precieuse">
      <p>Projet en cours</p>
    </div>
    <div class="col-sm-4 section">
      <img src="../../Images/venteDirecte.jpg" class="img-responsive" style="width:100%" alt="Image vente achat">
      <p>Projet à venir</p>
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Devenez un Expert ...</p>
      </div>
      <div class="well">
       <p>Augmentez vos revenus ...</p>
      </div>
      <div class="well">
       <p>Voyagez partout dans le monde ...</p>
      </div>
    </div>
  </div>
</div><br>

 <?php
include_once '../Include/footer.inc.php';
  ?>
