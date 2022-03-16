<?php
/* Template Name: Home Page */
?>
<?php get_header()?>

<?php include get_template_directory() . "/inc/home-section/head.php";?>

<div class="mx-auto mt-24 mb-12 max-w-7xl">
    <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post();?>
																    <?php the_content();?>
																    <?php endwhile;?>
    <?php endif;?>
</div>

<?php include get_template_directory() . "/inc/home-section/news.php";?>
<?php include get_template_directory() . "/inc/home-section/stations.php";?>
<?php include get_template_directory() . "/inc/home-section/teams.php";?>


<?php get_footer()?>


