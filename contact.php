<?php
/*
  Template Name: Contact
*/

	get_header();

	if ( have_posts() ) : while ( have_posts() ) : the_post();

?>

<section>

    <div class="form-contact">
        <?php get_template_part( 'parts/contact-2' ); ?>
    </div>


</section>



<?php

	endwhile; endif;
	get_footer();

?>