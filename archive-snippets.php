<?php
	get_header();
	global $query_string;
	query_posts($query_string . '&posts_per_page=10&paged='.$paged);
?>
<div class="fix" id="post-<?php the_ID(); ?>">

    <div class="l col-2-3">
        <!-- Start left column -->

        <div class="pl20 pr20 commonPageTitle">
            <div class="moduleBox">
                <div class="list-inline tac snippetsTagMenu">
                    <ul>
                        <li><a class="active" href="/snippets">全部</a></li>
                    </ul>
                    <?php
						wp_tag_cloud(array(
							'taxonomy' => 'snippetstags',
                    'smallest' => '16',
                    'largest' => '16',
                    'unit' => 'px',
                    'format' => 'list',
                    ));
                    ?>
                </div>
            </div>
        </div>

        <div class="moduleBox snippetsList mb20">
            <div class="p15">
                <ul>
                    <?php while (have_posts()) :the_post(); ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?php endwhile; ?>
                </ul>

            </div>
        </div>

        <div class="mb30 mt20 tac">
            <?php if(function_exists('wp_page_numbers')) { wp_page_numbers("<div class='pagination'>","</div>"); } ?>
    </div>


    </div>

    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>