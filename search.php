<?php get_header(); ?>

<div class="fix" id="post-<?php the_ID(); ?>">

    <div class="l col-2-3 loadBox">
        <div>
            <h2 class="postTitle tac">搜索结果/search result:</h2>
            <?php $posts = query_posts($query_string . '&orderby=date&showposts=8&paged='.$paged); ?>
            <?php if (have_posts()) : ?>
            <div>
                <?php while (have_posts()) : the_post(); ?>
                <div class="rel postItem mb10" id="post-<?php the_ID(); ?>">
                    <div class="postMeta">
                        <div class="postDate">
                            <b><?php the_time('Y.m.d') ?></b>
                        </div>
                    </div>
                    <div class="moduleBox">
                        <div class="p20">
                            <h2 class="commonListTitle">
                                <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                            </h2>
                            <div class="postExcerpt">
                                <?php the_excerpt();?>
                            </div>
                        </div>
                    </div>

                </div>
                <?php endwhile; ?>
            </div>
            <?php else : ?>
            <p class="BoxInner nothing">啥都没有...</p>
            <?php endif; ?>
        </div>
        <div class="mb30 mt20 tac">
            <?php if(function_exists('wp_page_numbers')) { wp_page_numbers("<div class='pagination'>","</div>"); } ?>
    </div>
    </div>

    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>