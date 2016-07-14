<?php
get_header(); 
?>
<div class="p30 video_wrap text-center">
	
	<h2 class="p10 arcTitle"><?php the_title(); ?></h2>
	<div class="video-body mt10 p10 bgp">
		<?php the_field('video_src');?>
	</div>

</div>


<div class="row p30">
	<!-- Start left column -->
	<div class="col-md-9 col-lg-8">
		<div class="p10 bgp">
			<div class="share_box">
				<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
		<script>window._bd_share_config={"common":{"bdSnsKey":{"tsina":"988379594"},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"32"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"32"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
			</div>
		</div>
		<div id="post-<?php the_ID(); ?>" class="mt10">
				
			<div class="bgp p10">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="arcContent">
						<?php the_content(); ?>
					</div>
					<div class="text-right">
						不喜欢在线播放？可以：
						<a href="<?php the_field('video_dlink');?>" target="_blank" class="btn btn-primary btn-sm">下载高清视频 &rarr;</a>
					</div>
				<?php endwhile; endif; ?>
			</div>

			<?php if (function_exists('oposts_show')) oposts_show(); ?>
			<?php comments_template(); ?>

		</div>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

