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
			<h2>Tarif unique</h2>
		</div>
	</div><!--Row-->
</div><!--Container-->
<div class="container">
	<div class="row">
		<div class="col-md-2 col-md-offset-2">
			<img class="img-responsive img-prices" src="images/prices.png">
		</div>
		<div class="col-md-6">
			<p>Afin de simplifier les calculs, AVS vous propose une sélection de tarifs uniques. Ces tarifs comprennent la prestation ainsi que les frais pour la réaliser. N'hésitez pas à <a href="/contact.php">nous contacter</a> pour toutes informations ou si vous avez une demande spécifique.</p>
		</div>
	</div><!--Row-->
</div><!--Container-->

<!-- Prices introduction -->
<div class="container">
	<div class="row prices-title">
		<div class="col-md-6 col-md-offset-3">
			<h2>Grille des tarifs 2015</h2>
		</div>
	</div><!--Row-->
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<table class="table table-responsive table-bordered prices-table">
			  <tr class="warning">
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

<!-- Quotation section -->
<div class="container">
	<div class="row prices-title prices-quotation">
		<div class="col-md-6 col-md-offset-3">
			<h2>Devis gratuit</h2>
			<p>Vous êtes intéressé par une ou plusieurs de nos prestations ? <br>N'hésitez pas à nous contacter pour obtenir un devis gratuit.</p>
			<a class="btn btn-avs" href="/contact.php">Devis gratuit</a>
		</div>
	</div><!--Row-->
</div><!--Container-->

<?php include("footer.php"); ?>