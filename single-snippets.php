<?php
get_header(); 
?>
<div class="row p30">
<!-- Start left column -->
<div class="col-md-9 col-lg-8">
	<div id="post-<?php the_ID(); ?>">
		<article class="Box arcWrap">
			<div class="digcssPath bgp p10">
				<a href="<?php echo home_url(); ?>">Home</a> &gt;
				<a href="<?php echo home_url(); ?>/snippets/">Snippets</a> &gt;
				<span class="cur_nav"><?php the_title(); ?></span>
		    </div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="ti10 arcMeta">
				Last modified: <?php the_modified_time( 'Y-m-d H:i' ); ?> 
			</div>
			<div class="bgp p10">
				<div class="arcContent">
					
					<?php the_content(); ?>
					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
					
				</div>
			</div>
		<?php endwhile; endif; ?>
		</article>
		<div class="p10 bgp mt30">
			<div class="share_box">
				<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
		<script>window._bd_share_config={"common":{"bdSnsKey":{"tsina":"988379594"},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"32"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"32"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
			</div>
		</div>
		<?php if (function_exists('oposts_show')) oposts_show(); ?>
		<?php comments_template(); ?>
	</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>