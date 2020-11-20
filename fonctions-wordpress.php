<!--
___________________
___________________
INFORMATIONS WORDPRESS
___________________
___________________
-->


<!-- Récupérer le nom du site -->
<?php bloginfo('name') ?>

<!-- Récupérer le slogan -->
<?php bloginfo('description') ?>

<!-- Récupérer le lien du site -->
<?php bloginfo('url') ?>

<!-- Récupérer le lien vers le thème -->
<?php bloginfo('stylesheet_directory') ?>






<!--
___________________
___________________
CONTENU
___________________
___________________
-->


<!-- Titre d'un post -->
<?php the_title() ?>

<!-- Catégories d'un post -->
<?php the_category() ?>

<!-- Récupérer les catégories sans le lien (<a>) -->
<?php foreach((get_the_category()) as $category) : ?>
  <li><?php echo $category->cat_name; ?></li>
<?php endforeach; ?>

<!-- Date d'un post -->
<?php echo get_the_date() ?>

<!-- Lien d'un post -->
<?php the_permalink() ?>

<!-- Image à la une d'un post -->
<?php the_post_thumbnail() ?>

<!-- Contenu d'un post -->
<?php the_content() ?>

<!-- Extrait d'un post -->
<?php the_excerpt() ?>

<!-- Auteur d'un post -->
<?php the_author() ?>








<!--
___________________
___________________
DIVERS
___________________
___________________
-->

<!-- Ajout d'un menu -->
<?php
  wp_nav_menu(array(
    'theme_location' => 'header'
  ))
?>

<!-- Ajout d'une zone de widget -->
<?php dynamic_sidebar('sidebar') ?>
