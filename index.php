<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <?php get_template_part('parts/header'); ?>
  <?php get_template_part('parts/nav'); ?>

  <main>
 
    <?php get_template_part('page-makeup'); ?>



  <?php get_template_part('parts/features'); ?> 
  <?php get_template_part('parts/newsletter'); ?>
</main>
  
  <?php get_template_part('parts/footer'); ?>

</body>
</html>