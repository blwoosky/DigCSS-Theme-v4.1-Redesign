<?php get_header(); ?>
<!-- Start left column -->
<div class="fix">
    <div class="l col-2-3">
        <div class="homePosts">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


            <div class="rel postItem mb10" id="post-<?php the_ID(); ?>">

                <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
                <div class="moduleBox">
                    <div class="p20">
                        <h2 class="commonListTitle">
                            <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                        </h2>
                        <div class="postExcerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="mt10 tar">
                            <a href="<?php the_permalink(); ?>" class="btn">阅读全文</a>
                        </div>
                    </div>
                </div>

            </div>

            <?php endwhile; ?>
            <?php else : ?>
            <div class="moduleBox">
                <h3 class="yahei">Nothing...</h3>
            </div>
            <?php endif; ?>
            <div class="mb30 mt20 tac">
                <?php if(function_exists('wp_page_numbers')) { wp_page_numbers("<div class='pagination'>","</div>"); } ?>
            </div>
        </div>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
