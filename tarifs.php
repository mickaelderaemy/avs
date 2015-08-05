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
			<h1>Tarifs</h1>
		</div>
	</div><!--Row-->
</div><!-- Container -->

<!-- Prices introduction -->
<div class="container-fluid">
	<div class="row prices-title">
		<div class="col-md-6 col-md-offset-3">
			<h2>Un tarif unique !</h2>
		</div>
	</div><!--Row-->
</div><!--Container-->
<div class="container">
	<div class="row">
		<div class="col-md-2 col-md-offset-2">
			<img class="img-responsive img-prices" src="images/prices.png">
		</div>
		<div class="col-md-6">
			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
	</div><!--Row-->
</div><!--Container-->

<!-- Prices introduction -->
<div class="container">
	<div class="row prices-title">
		<div class="col-md-6 col-md-offset-3">
			<h2>Nos tarifs</h2>
		</div>
	</div><!--Row-->
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<table class="table table-responsive table-bordered prices-table">
			  <tr>
			  	<th></th>
			    <th>Ménage</th>
			    <th>Bricolage</th>
			    <th>Jardinage</th>
			    <th>Spécifique*</th>
			  </tr>
			  <tr>
			  	<th>Tarif initial</th>
			    <td>22,50 € / heure</td>
			    <td>36,00 € / heure</td>
			    <td>33,00 €	/ heure</td>
				<td>33,00 € / heure</td>
			  </tr>
			  <tr>
			  	<th>Tarif remisé</th>
			    <td class="prices-discounted">11,25 € / heure</td>
			    <td class="prices-discounted">18,00 € / heure</td>
			    <td class="prices-discounted">16,50 € / heure</td>
			    <td class="prices-discounted">16,50 € / heure</td>			    
			  </tr>
			</table>
			<p class="prices-specific">* Tarif pour les prestations spécifiques (vitres, véranda, terrasse, cave,...</p> 
		</div>
	</div><!--Row-->
</div><!--Container-->

<?php include("footer.php"); ?>