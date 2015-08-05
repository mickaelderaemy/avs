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
<script language="javascript" type="text/javascript" src="js/bootstrap.js"></script>
</header>

<body>

<?php include("header.php"); ?>

<!-- Top of the page with title -->
<div class="container-fluid who">
	<div class="row who-title">
		<div class="col-md-12">
			<h1>Prestations</h1>
		</div>
	</div>
</div> <!--Container-->

<!-- Presentation of global service -->
<div class="container-fluid">
	<div class="row benefits-intro">
		<div class="col-md-8 col-md-offset-2">
			<h2>Toutes nos prestations</h2>
			<p>Nous vous proposons un large choix de prestations allant de l'intérieur de votre maison jusqu'aux moindres recoints de votre jardin. Notre ambition est de vous satisfaire en vous proposant des services complets. Retrouvez toutes nos prestations ci-dessous et n'hésitez pas à nous contacter pour toutes demandes d'informations ou si vous souhaitez une prestation sur mesure.</p>
			<div class="benefits-btn">
				<a class="btn btn-avs" href="/contact.php">Nous contacter</a>
			</div>
		</div>
	</div>
</div> <!--Container-->

<!-- All business description -->
<div class="container-fluid">
	<div class="row benefits benefits-background">
		<div class="col-md-3 col-md-offset-3">
      		<img class="img-responsive" src="images/business-menage.png">
		</div>
		<div class="col-md-4">
			<h3>Ménage</h3>
			<ul>
				<li>Nettoyage des sols</li>
				<li>Dépoussièrage des surfaces</li>
				<li>Sanitaires</li>
				<li>Cuisine</li>
				<li>Repassage</li>
			</ul>
			<div class="benefits-link">
				<a href="/tarifs.php">Voir les tarifs</a>
			</div>
		</div>
	</div>
	<div class="row benefits">
		<div class="col-md-3 col-md-offset-3">
	  		<img class="img-responsive" src="images/business-jardinage.png">
		</div>
		<div class="col-md-4">
			<h3>Jardinage</h3>
			<ul>
				<li>Entretien des massifs</li>
				<li>Tonte et entretien des gazons</li>
				<li>Taille d'arbustes, de rosiers, de haies,...</li>
				<li>Engazonnement et regarnissage</li>
				<li>Ramassage des feuilles mortes, balayage et ratissage</li>
				<li>Entretien du potager,...</li>
			</ul>
			<div class="benefits-link">
				<a href="/tarifs.php">Voir les tarifs</a>
			</div>
		</div>
	</div>
	<div class="row benefits benefits-background">
		<div class="col-md-3 col-md-offset-3">
	  		<img class="img-responsive" src="images/business-bricolage.png">
		</div>
		<div class="col-md-4">
			<h3>Bricolage</h3>
			<ul>
				<li>Petits travaux de bricolage</li>
				<li>Petit déménagement</li>
				<li>Aide au bricolage</li>
				<li>Petits travaux de peinture</li>
				<li>Pour tout autre prestation nous consulter</li>
			</ul>
			<div class="benefits-link">
				<a href="/tarifs.php">Voir les tarifs</a>
			</div>
		</div>
	</div>
</div> <!--Container-->


<?php include("footer.php"); ?>
