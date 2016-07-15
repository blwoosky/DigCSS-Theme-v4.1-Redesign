<?php
/*
	Template Name: CourseList
*/
get_header(); 
?>
<div class="fix">

    <div class="l col-2-3">
        <div class="courseList">

            <?php
			$the_query = new WP_Query(array(
			    'post_type' => 'page',
                'posts_per_page' => -1,
                'post_parent' => get_the_ID(),
                'paged' => $paged
            ));
            while ( $the_query->have_posts() ) :
            $the_query->the_post();
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
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="mt10 tar">
                        <a href="<?php the_permalink(); ?>" class="btn">
                            查看详情&gt;&gt;
                        </a>
                    </div>
                </div>
            </div>

            <?php  endwhile;wp_reset_query();?>

        </div>

    </div>
    <?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>