<?php
/*
  Template Name: Laboratoires Awaida
*/

	get_header();

	if ( have_posts() ) : while ( have_posts() ) : the_post();

?>

<section>


<div class="container">
	<div class="col-12 block-presentation">
		<h1>
        	Présentation des <?php the_title(); ?>
    	</h1>

		<div class="col-12 text-present">

			<div>
				<?php
            		echo '<img class="col-md-4 col-12 icon-natalio img-fluid" src=" '.get_bloginfo('stylesheet_directory').'/img/natalio.jpg" />'
        		?>
			</div>

			<blockquote class="col-md-8 col-12">
				“Nous sommes plusieurs laboratoires sur Paris et ses alentours, depuis 1990, ces années d’expérience nous ont permis d’avoir une grande patientèle et de nous agrandir en fonction “. <br>

				<br>
				
				Les Labo XV sont la propriété du Docteur Natalio Awaida, biologiste, diplômé de la Faculté de Médecine Aix-Marseille, en qualité de Consultant Parasitologie Médicale. <br> <br>

				Formé en Criminalistique , Médecine et Plongée , VIH.

			</blockquote>

		</div>
	</div>
</div>

	<div class="content">
    	<?php the_content(); ?>
    </div>

</section>


<?php

	endwhile; endif;
	get_footer();

?>