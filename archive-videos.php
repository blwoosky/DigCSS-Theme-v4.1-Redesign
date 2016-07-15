<?php
  get_header();
  global $query_string;
  query_posts($query_string . '&posts_per_page=8&paged='.$paged);
?>
<div class="fix">

    <div class="l col-2-3">

        <div class="thumbnailList">
            <?php
            while (have_posts()){
                the_post();
        ?>

            <div class="mb10">
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
                <div class="moduleBox">
                    <div class="p15">
                        <div class="fix">
                            <?php if ( has_post_thumbnail() ) { ?>
                            <div class="l mr20 thumbnailImg">
                                <a href="<?php the_permalink() ?>">
                                    <?php  the_post_thumbnail();?>
                                </a>
                            </div>
                            <?php } ?>
                            <div class="cell">
                                <h4>
                                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                </h4>
                                <p class="videoRuntime">
                                    RUNTIME: <?php the_field('video_runtime');?>
                                </p>
                                <div class="videoExcerpt">
                                    <?php the_excerpt();?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php } ?>
        </div>
        <div class="mb30 mt20 tac">
            <?php if(function_exists('wp_page_numbers')) { wp_page_numbers("<div class='pagination'>","</div>"); } ?>
        </div>


    </div>

    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>