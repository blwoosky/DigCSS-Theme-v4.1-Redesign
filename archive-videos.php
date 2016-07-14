<?php
  get_header();
  global $query_string;
  query_posts($query_string . '&posts_per_page=8&paged='.$paged);
?>
<div class="row p30">
<div class="col-md-9 col-lg-8">
	<div class="thumbnailPage">
		<div class="digcssPath bgp p10">
			<a href="<?php echo home_url(); ?>">首页</a> &gt; 
			<span>视频</span>
		</div>
		
		<div class="mt10">
			<div>
				<?php if(function_exists('wp_page_numbers')) : wp_page_numbers(); endif; ?>
			</div>
			<ul class="thumbnailList mt10">
			<?php
				while (have_posts()){
					the_post();
			?>
				<li class="mb10 p10 bgp">
					<div class="row">
						<?php if ( has_post_thumbnail() ) { ?>
						<div class="col-md-4 col-sm-3">
							<a href="<?php the_permalink() ?>" target="_blank" class="p10 thumbnail_img">
								<?php  the_post_thumbnail();?>
							</a>
						</div>
						<?php } ?>

						<div class="trans thumbnailTxt col-md-8 col-sm-9">
							<h2><a href="<?php the_permalink() ?>" target="_blank"><?php the_title();?></a></h2>
							<div class="arcMeta">播放时长: <?php the_field('video_runtime');?></div>
							<div class="demoIntro">
								<?php the_excerpt();?>
							</div>
							<div class="btns mt10">
								<a href="<?php the_permalink();?>" class="btn btn-sm btn-primary">播放视频</a>
							</div>
						</div>
					</div>

				</li>
				<?php } ?>

			</ul>
			<div class="mt10">
				<?php if(function_exists('wp_page_numbers')) : wp_page_numbers(); endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>