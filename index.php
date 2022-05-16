<?php get_header(); ?>

<!-- Réservation de chaque labo / Horaires d'ouverture -->

<div class="container-fluid">

    <div id="rdv-onglet" class="reservation">

        <div class="col-md-3 col-12 block-reservation">
            <h2>Labo XV <br>Vaugirard</h2>

                <p>Horaires</p>

                <p>Lundi au Vendredi<br>7H30 - 18H00</p>

                <p>Samedi <br> 7H45 - 14H00</p>

                <p> <button class=" col-12 btn-rdv">Prendre rendez-vous</button></p>
        </div>

        <div class=" col-md-3 col-12 block-reservation">

            <h2>Labo XV <br>Mozart</h2>

                <p>Horaires</p>

                <p>Lundi au Vendredi<br>7H30 - 18H00</p>

                <p>Samedi <br> 7H45 - 14H00</p>

                <p><button class=" col-12 btn-rdv">Prendre rendez-vous</button></p>

        </div>

        <div class="col-md-3 col-12 block-reservation">
            <h2>Labo XV <br>Thiais</h2>

                <p>Horaires</p>

                <p>Lundi au Vendredi<br>7H30 - 18H00</p>

                <p>Samedi <br> 7H45 - 14H00</p>
 
                <p> <button class="col-12 btn-rdv">Prendre rendez-vous</button></p>
        </div>

    </div>
</div>

</header>

<!-- Les étapes de préparation des RDV -->

<section class="panneau-block">

<h2> Préparer votre rendez-vous ? </h2>

<div class="group-block">

    <div class="col-md-3 col-10 block">

    <?php

        $id=1; // identifiant de la page
        $post = get_post($id);
        $post_thumbnail = apply_filters('the_post_thumbnail', $post->post_thumbnail);
        $content = apply_filters('the_content', $post->post_content);
        echo $post_thumbnail;

    ?>

        <h3>Une ordonnance</h3>
        <p>C'est le jour de votre rendez-vous ? <br>
        Présentez vous au laboratoire avec de votre ordonnance reùis par votre médecin traitant.
        </p>  
        
    </div>


    <div class="col-md-3 col-10  block">
        <h3>Un règlement</h3>
        <p>Prévoyez toutes les solutions de paiements<br>
        Avec votre carte vitale + votre carte mutuelle si possible
        </p>  
    </div>


    <div class="col-md-3 col-10  block">
        <h3>Sans ordonnance</h3>
        <p>Vous n'avez pas reçu d'ordonance pour vos analyses.<br>
        Certaines analyses n'ont pas besoin de d'ordonnance. <br>
        <a href="">Découvrez les dès maintenant.</a>
        </p>  
    </div>
</div>

</section>

<section>

    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>

    <?php endwhile; endif; ?>

    <button class="btn-laboconnect"><a href="">Go LaboConnect</a></button>

</section>


<div class="large-block">

<div class="row line-block">

    <div class="col-md-6 col-12 img-fluid">
        <?php
            echo '<img src=" ' .get_bloginfo('stylesheet_directory').'/img/faq.jpg" />'
        ?>
    </div>

    <div id="text-faq" class="col-md-6 col-12">

        <h2>FAQ</h2>

        <p> Vous avez des questions ? <br> <br>
 
            On a peut-être déjà les réponses. <br> <br>
 
            Consultez notre foire aux questions.
        </p>

        <p><button class="btn-faq">Découvrir la FAQ</button></p>

    </div>

</div>

<div  class="row line-block">

    <div id="text-faq" class="col-md-6 col-12">

        <h2>Mieux comprendre ses analyses</h2>

        <p>
            Vous avez reçu vos résultats mais vous avez du mal à les interpréter . <br>

            Faites des recherches sur le site Labtest , pour mieux comprendre vos analyses.
        </p>

        <p><button class="btn-faq">Go LabTest</button></p>

    </div>

    <div class="col-md-6 col-12 img-fluid" >

        <?php
            echo '<img style="width: 100% " class="rounded float-start" src=" ' .get_bloginfo('stylesheet_directory').'/img/eprouvement.jpg" />'
        ?>
        
    </div>
    
</div>

</div>





<?php get_footer(); ?>