<?php
get_header(); 
?>
<div class="fix">
    <div class="l col-2-3 loadBox" id="post-<?php the_ID(); ?>">
        <!-- Start left column -->

        <div class="postPage">
            <h1 class="postTitle tac">
                <?php the_title(); ?>
            </h1>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="postMeta mt20">
                <div>
                    上次更新时间 : <?php the_modified_time( 'Y-m-d H:i' ); ?>
                </div>
                <span class="split">|</span>
                <div class="commentsNo">
                    <svg viewBox="0 0 100 100">
                        <use xlink:href="#icon-bubbles2"></use>
                    </svg>
                    <?php comments_popup_link('暂无评论', '一条评论', '% 条评论', 'comments-link', ''); ?>
                </div>
            </div>
            <div class="postContent moduleBox">
                <div class="p15">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
        <div class="mt20 moduleBox">
            <?php include (TEMPLATEPATH . '/parts/shareBox.php' ); ?>
        </div>
        <?php if (function_exists('oposts_show')) oposts_show(); ?>
        <?php comments_template(); ?>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>