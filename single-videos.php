<?php
get_header(); 
?>
<div class="p30 video_wrap text-center">

    <h1 class="tac postTitle"><?php the_title(); ?></h1>
    <div class="videoBox mt10">
        <?php the_field('video_src');?>
    </div>

</div>

<div class="fix" id="post-<?php the_ID(); ?>">

    <div class="l col-2-3">

        <div class="postMeta">
            <div class="postDate">
                <b><?php the_time('Y.m.d') ?></b>
            </div>
            <div class="commentsNo">
                <svg viewBox="0 0 100 100">
                    <use xlink:href="#icon-bubbles2"></use>
                </svg>
                <?php comments_popup_link('暂无评论', '一条评论', '% 条评论', 'comments-link', ''); ?>
            </div>
        </div>

        <div class="p10 moduleBox">
            <?php include (TEMPLATEPATH . '/parts/shareBox.php' ); ?>
        </div>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="postContent moduleBox mt20">
            <div class="p15">
                <div>
                    <?php the_content();?>
                </div>
                <div class="mt10 tar">
                    如果讨厌广告,可以: <a class="btn" target="_blank" href="<?php the_field('video_dlink');?>">下载高清视频</a>
                </div>
            </div>

        </div>
        <?php endwhile; endif; ?>

        <?php if (function_exists('oposts_show')) oposts_show(); ?>
        <?php comments_template(); ?>

    </div>
    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>

