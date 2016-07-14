<?php
  get_header();
  global $query_string;
  query_posts($query_string . '&posts_per_page=20');
?>
<div class="row p30">
<!-- Start left column -->

<div class="col-md-9 col-lg-8">
	<div class="thumbnailPage">
		<div class="digcssPath bgp p10">
			<a href="<?php echo home_url(); ?>">首页</a> &gt; 
			<a href="<?php echo home_url(); ?>/demos/">示例</a> &gt; 
			<a href="javascript:;" class="collapseBox viewByTag">按标签查看<span class="glyphicon glyphicon-eye-open"></span></a>
			<div class="allTag verList bgp p15 bShadow">
				<?php
					wp_tag_cloud(array(
						'taxonomy' => 'demostags',
						'smallest' => '13',
						'largest'  => '13',
						'unit'     => 'px',
						'format'   => 'list',
					));
				?>
			</div>
		</div>
		<div class="mt10 bgp p15">
			<ul class="row thumbnailList">
				<?php while (have_posts()) : the_post(); ?>
				<li class="col-md-4 col-sm-6">
					<?php 
						if ( has_post_thumbnail() ) {
					?>
					<a href="<?php echo home_url(); ?>/examples/<?php the_field('demo_slink');?>" target="_blank" class="l">
						<?php  the_post_thumbnail();?>
					</a>
					<?php
						}
					?>
			
					<div class="trans thumbnailTxt">
						<div class="npt15">
							<div class="bgp bShadow p10">
								<h2><a href="<?php echo home_url(); ?>/examples/<?php the_field('demo_slink');?>" target="_blank"><?php the_title();?></a></h2>
								<div class="arcMeta">上次修改: <?php the_modified_time( 'Y-m-d H:i' ); ?></div>
								<div class="demoIntro">
									<?php the_excerpt();?>
								</div>
								<div class="btns mt10">
									<a href="<?php echo home_url(); ?>/examples/<?php the_field('demo_slink');?>" target="_blank" class="viewDemo btn btn-sm btn-primary">查看Demo</a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>