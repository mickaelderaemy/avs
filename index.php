<!doctype>

<html>

<header>
<meta charset="utf-8">
<title>À votre service | AVS</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400,100,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
</header>

<body>

<?php include("header.php"); ?>

<div class="container-fluid">
	<div class="row">
		<div class="header-background col-md-12">
			<div class="col-md-6 col-md-offset-3 header-call">
				<div class="call">
          <p>Détendez-vous<br><span class="header-call-avs-grey">A</span><span class="header-call-avs-purple">V</span><span class="header-call-avs-grey">S</span> <br>s'occupe de tout !</p>
				  <a href="http://avs-pro.fr/prestations.php" class="btn btn-avs action">Découvrez nos prestations</a>
        </div>
			</div>
		</div>
	</div>
</div>

<!-- Our business -->
<div class="container-fluid business">
  <h2>Nos prestations</h2>
	<div class="row">
		<div class="business-content col-md-2 col-md-offset-3">
      <a href="/prestations.php"><img class="img-responsive img-business" src="images/business-menage.png"></a>
      <h3>Ménage</h3>      
    </div>
		
    <div class="business-content col-md-2">
      <a href="/prestations.php"><img class="img-responsive img-business" src="images/business-jardinage.png"></a>
      <h3>Jardinage</h3>      
    </div>
		
    <div class="business-content col-md-2">
      <a href="/prestations.php"><img class="img-responsive img-business" src="images/business-bricolage.png"></a>
      <h3>Bricolage</h3>
    </div>
	</div>
  <div class="row business-more">
    <div class="col-md-6 col-md-offset-3">
      <h4>Envie d'en savoir plus sur nos prestations ?</h4> 
      <a class="business-more-action" href="/prestations.php">Découvrir les prestations en détails</a>
    </div>
  </div>
</div>

<div class="container prices">
  <div class="row">
    <h2>Tarifs</h2>
    <div class="col-md-3 col-md-offset-3">
      <h3>Tarifs</h3>
      <img class="img-responsive img-prices" src="images/prices.png">
      <br>
      <p class="prices-text">Pour chaque prestation, un tarif fixe. Nous vous invitons à vous rendre sur la page "Tarifs" afin d'obtenir toutes les informations nécessaires.</p>
    </div>
    <div class="col-md-3">
      <h3>Réductions d'impôts</h3> 
      <img class="img-responsive img-reduction-impots" src="images/avs-reduction-impots.png">
      <br>
      <p class="prices-text">En tant que client particulier, avec AVS vous pouvez bénéficier d'une réduction d'impôts sur le revenu de 50% sur les sommes versées pour les prestations de services (Attestation fiscale fournie).
        </p>
    </div>
    <div class="col-md-12 prices-action">
            <a class="btn btn-avs" href="http://avs-pro.fr/tarifs.php">Découvrir les tarifs</a> 
    </div>
  </div>
</div>

<div class="container-fluid contact">
  <div class="row">
    <h2>Contact</h2>
    <div class="col-md-4 col-md-offset-2">
      <h3>Notre secteur géographique</h3>
      <img class="img-responsive img-map" src="images/avs-map.png">
    </div>
    <div class="col-md-4">
      <h3>Informations utiles</h3>
      <p class="contact-society">La société AVS existe depuis 2005 et exerce dans le secteur de l'Eure-et-Loir et des Yvelines. Elle s'adapte à vos besoins et établit avec vous une relation de confiance.</p>
      <p class="contact-numbers">Pour toute demande, contactez nous au <strong>06.50.48.91.86</strong> ou par email <strong><a href="mailto:contact@avs-pro.fr">contact@avs-pro.fr</a></strong></p>
      <br>
      <p class="contact-numbers"><strong>À VOTRE SERVICE</strong>
      <br>12 bis Boulevard Clémenceau 
      <br>28130 Maintenon</p>
    </div>
  </div>
</div>

<?php include("footer.php"); ?>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>


</html>
