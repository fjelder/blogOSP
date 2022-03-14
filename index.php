<?php get_header(); ?>

<div class="mx-auto mt-24 mb-12 max-w-7xl">
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
</div>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>