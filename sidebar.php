	<div class="sideBar col-md-3 col-lg-4">
		
		<?php
		if ( is_user_logged_in() ) {
			?>
			<div class="p10 side_loggedin bg_opacity text-center">
				<span class="avatar">
					<?php echo get_avatar( wp_get_current_user()->ID ); ?>
				</span>
				<p>Hi, <?php echo wp_get_current_user()->display_name; ?></p>
				<p>Welcome to DigCSS!<a href="<?php echo wp_logout_url(); ?>">退出</a></p>
			</div>
			<?php
		} else {
			?>

			<div class="side_login_form">
				<div class="p10">
					<?php wp_login_form( $args ); ?>
					
					<div class="sns_login text-center">
						<p>没有账号？点击<a href="<?php echo wp_registration_url(); ?>">注册</a>，或者使用以下方式登录：</p>
						<a href="http://digcss.com/digcss/wp-content/plugins/wp-connect/login.php?go=qzone" title="用QQ登录" class="sns_btn iconsns-icon_qq"></a>
						<a href="http://digcss.com/digcss/wp-content/plugins/wp-connect/login.php?go=sina" title="用新浪微博登录" class="sns_btn iconsns-icon_weibo"></a>
					</div>
				</div>
			</div>

			<?php
		}
		?>

		

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
		<div class="bgp mt30">
			<h2 class="BoxTitle">latest video</h2>
			<?php if ( has_post_thumbnail() ) {?>
			<div class="thumbnailBox">
				<a href="<?php the_permalink();?>" class="thumbnailImg">
					<span class="play_btn trans"></span>
					<?php  the_post_thumbnail();?>
				</a>
				
				<div class="mt10 thumbnailIntro">
					<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
					<div class="arcMeta">RUNTIME:  <?php the_field('video_runtime');?></div>
					<div class="thumbnailExcerpt">
						<?php the_excerpt();?>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	<?php endwhile; endif;?>
	<?php #end latest video?>

	<div class="mt30 social_icon bg_opacity">
			
			<div class="row">
				<div class="col-sm-6">
					<a href="http://study.163.com/u/blwoosky" target="_blank" title="DigCSS作者BlwooSky在网易云课堂">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 320 320" enable-background="new 0 0 320 320" xml:space="preserve">
							<g>
								<polygon fill="#9FA0A0" points="300.6,257.3 24.4,257.3 58.8,49 300.6,39.6 	"/>
								<polygon fill="#FFFFFF" points="289.7,235.9 23,247.1 56.9,39.6 289.7,30.9 	"/>
								<polygon fill="#21A557" points="19.8,36.1 284.2,6.8 284.2,212.5 182.1,226.3 107.2,302.3 108.3,235.9 19.4,247.1 	"/>
							</g>
						</svg>
					</a>
				</div>
				<div class="col-sm-6">
					<a href="http://weibo.com/blwoosky" target="_blank" title="DigCSS作者BlwooSky在新浪微博">
						<svg version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 320 320" enable-background="new 0 0 320 320" xml:space="preserve">
							<g>
								<path fill="#E62227" d="M106,27.8c0,0,32.1-21.7,56.6-7c24.5,14.6,6.1,70.8,6.1,70.8s-4.1,7.7,0.3,10c0,0,2.3,3.1,13.2-5.6
								c13.5-10.8,69.4-45.4,92.8-24.6c18.9,16.8,0,54.5,0,54.5S308,130,316.2,151c0,0,12.3,72.9-81.7,118.6c0,0-72.8,39.8-152.6,16.2
								c0,0-89.8-21.1-73.1-112.4c0,0,0.1-15.2,8.7-30.9c0,0-0.4-3.3,12-28.4C41.9,89.1,64.6,57.4,106,27.8z"/>
								<path fill="#FFFFFF" d="M264.6,180.5c7.8,38.8-30.5,72.4-81.1,87.8c-75.6,23.1-138.6-6.9-147.6-45.8c-9.1-38.9,33.9-85.5,94.4-93.6
								C210.7,118.1,256.8,141.3,264.6,180.5z"/>
								<ellipse transform="matrix(0.9599 -0.2805 0.2805 0.9599 -51.9226 46.2858)" cx="135.7" cy="204.5" rx="57.1" ry="45.4"/>

								<ellipse transform="matrix(0.9475 -0.3199 0.3199 0.9475 -62.2953 48.4225)" fill="#FFFFFF" cx="116.2" cy="213.8" rx="19.8" ry="17.3"/>

								<ellipse transform="matrix(0.8623 -0.5065 0.5065 0.8623 -81.9391 99.9605)" fill="#FFFFFF" cx="142.8" cy="200.6" rx="7.2" ry="5.1"/>
							</g>
						</svg>
					</a>
				</div>

			</div>

		</div>

	<?php #start articles?>
	<div class="mt30 bgp sideArchives">
		<h2 class="BoxTitle">article:</h2>
		<div class="p10">
			<h3 class="BoxInnerTitle">文章分类:</h3>
			<ul class="list-inline mt10">
				<?php wp_list_categories(
					'show_count=1&title_li='
					); ?> 
				</ul>
				<h3 class="BoxInnerTitle">文章存档:</h3>
				<ul class="list-inline mt10">
					<?php wp_get_archives(
						'show_post_count=1'
						); ?> 
					</ul>
				</div>
			</div>
			<?php #end articles?>

			<?php #start latest code?>
			<?php
			$the_query = new WP_Query(array('post_type' => 'snippets','posts_per_page' => 6));
			if(have_posts()):
				?>

			<div class="bgp mt30">
				<h2 class="BoxTitle">latest code</h2>
				<ul class="sideList">
					<?php 
					while ( $the_query->have_posts() ) :
						$the_query->the_post();
					?>
					<li><a href="<?php the_permalink();?>" class="trans"><?php the_title();?></a></li>
				<?php endwhile;?>
			</ul>
		</div>
	<?php  endif;wp_reset_postdata();?>
	<?php #end latest code?>

	<?php if (function_exists('vote_poll') && !in_pollarchive()){ ?>
	<div class="bgp mt30">
		<h2 class="BoxTitle">Polls</h2>
		<div class="BoxInner">
			<?php get_poll();?>
		</div>
	</div>
	<?php } ?>

	</div> <!-- End SidrBar -->