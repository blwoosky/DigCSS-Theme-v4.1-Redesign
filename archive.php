<?php get_header(); ?>
<div class="fix" id="post-<?php the_ID(); ?>">

    <div class="l col-2-3">
        <div>
            <?php $posts = query_posts($query_string . '&orderby=date&showposts=-1'); ?>
            <div class="p10">
                <?php if (have_posts()) : ?>
                <?php /* If this is a category archive */ if (is_category()) { ?>
                <h2 class="postTitle tac">&#8216;<?php single_cat_title(); ?>&#8217;下所有文章</h2>
                <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
                <h2 class="postTitle tac">&#8216;<?php single_tag_title(); ?>&#8217;相关的文章</h2>
                <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                <h2 class="postTitle tac"><?php the_time('Y年m月d日'); ?>所有文章</h2>
                <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                <h2 class="postTitle tac"><?php the_time('Y年m月'); ?>所有文章</h2>
                <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                <h2 class="postTitle tac"><?php the_time('Y年'); ?>所有文章</h2>
                <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                <h2 class="postTitle tac">Author Archive</h2>
                <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                <h2 class="postTitle tac">Blog Archives</h2>
                <?php } ?>
            </div>
            <div>
                <?php while (have_posts()) : the_post(); ?>
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
            </div>
            <?php else : ?>
            <p class="BoxInner nothing">啥都没有...</p>
            <?php endif; ?>
        </div>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
