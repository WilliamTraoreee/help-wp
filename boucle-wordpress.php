<!-- DEBUT BOUCLE WORDPRESS -->
  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

  <!-- CONTENU -->

  <?php endwhile; endif; ?>
<!-- FIN BOUCLE WORDPRESS -->







<!-- DEBUT BOUCLE PERSONALISEE -->
<?php

  $args = array(
    'post_type' => 'post', // N'oubliez pas de mettre le bon post type suivant ce que vous souhaitez récupérer
    'posts_per_page' => 6,

  );

  $my_query = new WP_Query($args);

  if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
?>

  <!-- CONTENU -->

<?php endwhile; endif; wp_reset_postdata();?>
<!-- FIN BOUCLE WORDPRESS -->
