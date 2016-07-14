<?php get_header(); ?>
<div class="row p30">
<!-- Start left column -->
	<div class="col-md-9 col-lg-8">
		<div>
			<?php $posts = query_posts($query_string . '&orderby=date&showposts=-1'); ?>
				<div class="p10">
					<?php if (have_posts()) : ?>
					<h2 class="arcTitle">Recommend/推荐文章</h2>
				</div>
			<ul>
			<?php while (have_posts()) : the_post(); ?>
				<li class="bgp mt10 p20" id="post-<?php the_ID(); ?>" >
					<h3><a href="<?php the_field('arcLink');?>" target="_blank"><?php the_title() ?>&rarr;</a></h3>
					<div class="arcMeta">Author:<?php the_field('arcAuthor');?></div>
					<div>
						<?php the_content();?>
					</div>
				</li>
			<?php endwhile; ?>
			</ul>
			<?php else : ?>
				<p class="BoxInner nothing">啥都没有...</p>
			<?php endif; ?>
		</div>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>