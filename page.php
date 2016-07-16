<?php
/*
	Template Name: Single Page
*/
get_header(); 
?>
<div class="fix">

    <div class="l col-2-3 loadBox"><!-- Start left column -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="moduleBox">
            <div class="p15">
                <?php the_content(); ?>
            </div>
        </div>
        <?php endwhile; endif; ?>
        <?php comments_template(); ?>
    </div>

    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
