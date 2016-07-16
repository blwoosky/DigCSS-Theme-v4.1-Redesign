<?php
get_header();
global $query_string;
query_posts($query_string . '&posts_per_page=7&paged='.$paged);
echo $query_string;
?>
<div class="fix">
    <div class="l col-2-3 loadBox">
        <div class="recPostsPage">
            <div class="p10">
                <?php if (have_posts()) : ?>
                <h2 class="postTitle tac">推荐文章:</h2>
            </div>
            <ul>
                <?php while (have_posts()) : the_post(); ?>
                <div class="rel recPostItem mb10" id="post-<?php the_ID(); ?>">
                    <div class="moduleBox">
                        <div class="p20">
                            <h2 class="commonListTitle">
                                <a href="<?php the_field('arcLink');?>"
                                   target="_blank">
                                    <svg viewBox="0 0 100 100">
                                        <use xlink:href="#icon-link"></use>
                                    </svg>
                                    <?php the_title() ?>
                                </a>
                            </h2>
                            <div class="arcMeta f12">Author:<?php the_field('arcAuthor');?></div>
                            <div class="mt10 postExcerpt f14">
                                <?php the_content();?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </ul>
            <?php else : ?>
            <p class="BoxInner nothing">啥都没有...</p>
            <?php endif; ?>
        </div>
        <div class="mb30 mt20 tac">
            <?php if(function_exists('wp_page_numbers')) { wp_page_numbers("<div class='pagination'>","
        </div>
        "); } ?>
    </div>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>