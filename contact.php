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
			<h1>Contact</h1>
		</div>
	</div>
</div>

<!--- Contact intro -->
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2>Nous contacter</h2>
			<p>Vous avez une question ou vous souhaitez nous contacter pour une demande de prestation ? Vous pouvez utiliser le formulaire ci-dessous ou nous appeler au 06.XX.XX.XX.XX.</p>
		</div>
	</div><!---row-->
</div><!---container-->

<!--- Contact form -->
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<form role="form" class="form-horizontal">
				<div class="form-group">
					<label for="prenom" class="col-sm-2 control-label">Prénom</label>
					<div class="col-sm-10">
						<input id="prenom" type="text" class="form-control" placeholder="Entrez votre prénom">
					</div>
				</div>
				<div class="form-group">
					<label for="nom" class="col-sm-2 control-label">Nom</label>
					<div class="col-sm-10">
						<input id="nom" type="text" class="form-control" placeholder="Entrez votre nom">
					</div>
				</div>
				<div class="form-group">
					<label for="message" class="col-sm-2 control-label">Message</label>
					<div class="col-sm-10">
						<input id="message" type="textarea" class="form-control" placeholder="Votre message">
					</div>
				</div>
			</form>
		</div>
	</div><!---row-->
</div><!---container-->

<?php include("footer.php"); ?>