<?php
/*
  Template Name: Analyses
*/

	get_header();

?>

<section  style = "background-color : white;">

	<div class="container">
		<div class="spinner-border text-info" role="status">
  			<span class="visually-hidden">Loading...</span>
		</div>

		<h1 id ="analyse-title">

			<?php the_title(); ?>

		</h1>

		<div class="content">

			<?php the_content(); ?>

		</div>

		<div class="accordion" id="accordionPanelsStayOpenExample">


  			<div class="accordion-item">
    			<h2 class="accordion-header" id="panelsStayOpen-headingOne">
      				<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        				Analyses plus fréquentes
      				</button>
    			</h2>
    			<div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      				<div class="accordion-body">
        				<li>APO A1, APO B</li>
						<li>BILAN LIPIDIQUE (E.A.L)</li>
						<li>GLYCEMIE</li>
						<li>HDL, LDL</li>
						<li>INSULINE</li>
						<li>PROLACTINE</li>
      				</div>
    			</div>
  			</div>



  			<div class="accordion-item">
    			<h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        				Analyses plus rares
      				</button>
    			</h2>
    			<div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      				<div class="accordion-body">
        				<li>CROSSLAPS Sanguins (venir avant 9H)</li>
						<li>CROSSLAPS urinaires</li>
						<li>HOMOCISTEINE</li>
						<li>TESTOTERONE BIODISPONIBLE</li>
						<li>GH</li>
						<li>ACIDES BILIAIRES TOTAUX</li>
      				</div>
    			</div>
  			</div>
		</div>

		<br>
		<br>

		<div>

			<p>Nous faisons également d’autres analyses dites à jeun mais en fait  sont des premiers recueils de miction :</p>

				<li>- Sucre urinaire</li>
				<li>- Albumine urinaire</li>

		</div>

	</div>

	<div class="">

		<div class="sub-analyse">
			<div class="container">
				<h3>Conseils & préconisation prélèvement</h3>
			</div>
		</div>

		<div style="text-align: center;">
			<p> Pour consulter nos fiches de préconisation.<br>

				Sélectionner les analyses que vous souhaitez réaliser tout simplement.
			</p>
		</div>

	</div>

	<div class="accordion center-block" id="accordionPanelsStayOpenExample">


		<div class="accordion-item">
			<h2 class="accordion-header" id="panelsStayOpen-headingOne">
				<button class="accordion-button" style="text-align: center;" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
				Sélectinner une analyse <span> </span>
				</button>
  			</h2>


	  	<div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
			<div style="text-align: center;" class="accordion-body">
				<li>Sucre / Albumine / Chimie urinaire</li>
				<li>ECBU</li>
				<li>1er jet urinaire : Chlamydiae, Mycoplasmes, Gonocoque, BK</li>
				<li>HLM</li>
				<li>Frottis urinaire</li>
				<li>Recherche drogues urinaires</li>
				<li>Recueil Urines 24H</li>
				<li>Recueil Mélatonine 24H</li>
				<li>Auto-prélèvement vaginal</li>
				<li>Huhner</li>
				<li>Spermogramme / Spermoculture</li>
				<li>Sang dans les selles</li>
				<li>Recueil de selles unique</li>
				<li>Scotch test</li>
				<li>Fécalogramme 24H</li>
			</div>
	  	</div>
	</div>

</section>

<?php

	get_footer();

?>