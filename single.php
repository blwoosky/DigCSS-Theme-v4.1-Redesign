<?php get_header(); ?>
<div class="fix">
    <div class="l col-2-3 loadBox">
        <!-- Start left column -->
        <div class="postPage" id="post-<?php the_ID(); ?>">
            <h1 class="postTitle tac">
                <?php the_title(); ?>
            </h1>
            <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="postContent moduleBox">
                <div class="p15">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php endwhile; endif; ?>
            <div class="p10 moduleBox mt30 tac">
                <?php include (TEMPLATEPATH . '/parts/shareBox.php' ); ?>
            </div>

            <div class="comTitle pt20 pb20 tac">
                相关文章推荐
            </div>

            <div class="p10 moduleBox relatedPosts">
                <?php wp_related_posts()?>
            </div>

            <?php if (function_exists('oposts_show')) oposts_show(); ?>


            <?php comments_template(); ?>

        </div>
    </div>

    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>