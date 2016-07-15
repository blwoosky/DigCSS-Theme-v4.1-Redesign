<div class="col-1-3 r">


    <?php #latest video?>
    <?php
		$args = array(
			'post_type' => 'videos',
    'posts_per_page' => 1
    );
    // The Query
    $the_query = new WP_Query( $args );
    if(have_posts()):while ( $the_query->have_posts() ) :
    $the_query->the_post();
    ?>

    <div class="sideItem" rel="latest video">
        <div class="moduleBox sideVideo">

            <div class="p15" key={video.id}>
                <div class="videoThumbnail rel">
                    <a href="<?php the_permalink();?>">
                        <?php  the_post_thumbnail();?>
                        <svg viewBox="0 0 100 100" class="abs">
                            <use xlink:href="#icon-play_circle_outline"></use>
                        </svg>
                    </a>
                </div>
                <h4>
                    <a href="<?php the_permalink();?>">
                        <?php the_title();?>
                    </a>

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
    <?php endwhile; endif;?>
    <?php #end latest video?>


    <?php #start articles?>
    <div class="sideItem mt10" rel="categories">
        <div class="moduleBox sideArticles">
            <div class="p15">
                <h5>文章分类:</h5>
                <ul class="list-inline mt10">
                    <?php wp_list_categories(
					'show_count=1&title_li='
					); ?>
                </ul>
                <h5 class="mt10">文章存档:</h5>
                <ul class="list-inline mt10">
                    <?php wp_get_archives(
						'show_post_count=1'
						); ?>
                </ul>
            </div>
        </div>
        <?php #end articles?>

        <?php #start latest snippets?>
        <?php
			$the_query = new WP_Query(array('post_type' => 'snippets','posts_per_page' => 6));
        if(have_posts()):
        ?>

        <div class="sideItem mt10" rel="latest snippets">
            <div class="moduleBox sideList">
                <div class="p15">
                    <ul>
                        <?php
					while ( $the_query->have_posts() ) :
                        $the_query->the_post();
                        ?>
                        <li><a href="<?php the_permalink();?>" class="trans"><?php the_title();?></a></li>
                        <?php endwhile;?>
                    </ul>
                </div>
            </div>
        </div>
        <?php  endif;wp_reset_postdata();?>
        <?php #end latest code?>


        <?php if (function_exists('vote_poll') && !in_pollarchive()){ ?>
        <div class="sideItem mt10" rel="Poll">
            <div class="moduleBox sidePoll sideList">
                <div class="p15">
                    <?php get_poll();?>
                </div>
            </div>
        </div>
        <?php } ?>

        <?php #start latest recarticles?>
        <?php
			$the_query = new WP_Query(array('post_type' => 'recarticles','posts_per_page' => 6));
        if(have_posts()):
        ?>

        <div class="sideItem mt10" rel="recommend">
            <div class="moduleBox sideList">
                <div class="p15">
                    <ul>
                        <?php
					while ( $the_query->have_posts() ) :
                        $the_query->the_post();
                        ?>
                        <li>
                            <a href="<?php the_field('arcLink');?>"
                               target="_blank"
                               title="作者:<?php the_field('arcAuthor')?>"
                               class="trans">
                                <svg viewBox="0 0 100 100">
                                    <use xlink:href="#icon-link"></use>
                                </svg>
                                <?php the_title();?>
                            </a>
                        </li>
                        <?php endwhile;?>
                    </ul>
                </div>
            </div>
        </div>
        <?php  endif;wp_reset_postdata();?>
        <?php #end latest recarticles?>



    </div> <!-- End SidrBar -->