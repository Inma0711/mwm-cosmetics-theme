<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</head>

<body <?php body_class(); ?>>

    <?php get_template_part('parts/header'); ?>
    <?php get_template_part('parts/nav'); ?>

    <main>
        <?php get_template_part('page-home'); ?>




        <?php get_template_part('parts/features'); ?>
        <?php get_template_part('parts/newsletter'); ?>
    </main>

    <?php get_template_part('parts/footer'); ?>

</body>

</html>