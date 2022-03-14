<?php get_header(); ?>
<div class="h-56 mb-12 bg-red-300/50">
    <img src="https://images.pexels.com/photos/3747463/pexels-photo-3747463.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="" class="object-cover object-center w-full h-56 rounded shadow-lg lg:rounded-none lg:shadow-none md:h-96 lg:h-full">
</div>
<div class="flex">
    <div class="">
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>
    <aside class="max-w-sm">
    <?php get_sidebar(); ?>
    </aside>
    
</div>



<?php get_footer(); ?>