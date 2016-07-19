<?php
  get_header();
  global $query_string;
  query_posts($query_string . '&posts_per_page=8&paged='.$paged);
?>
<div class="fix">

    <div class="l col-2-3 loadBox">
        <div class="courseList">

            <?php
            while (have_posts()){
                    the_post();
            ?>
            <div class="courseItem rel moduleBox">
                <div class="p15">
                    <div class="courseName abs tac">
                        <h2>
                            <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                        </h2>
                    </div>
                    <div class="courseCoverImg">
                        <img src="<?php the_field('cover_img');?>" alt="<?php the_title() ?>"/>
                    </div>
                    <div class="courseIntro">
                        <?php the_field('course_intro'); ?>
                    </div>
                    <div class="mt10 tar">
                        <a href="<?php the_permalink(); ?>" class="btn">
                            查看详情&gt;&gt;
                        </a>
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