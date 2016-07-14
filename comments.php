
<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		This post is password protected. Enter the password to view comments.
	<?php
		return;
	}
?>


 
<?php if ( have_comments() ) : ?>

	<div class="comments mt10">
		<h2 class="arcTitle p10">
			《<?php the_title(); ?>》上的 <?php comments_number( "0", "1","%" ); ?>  条评论 / Comments:
		</h2>
		<ol class="commentlist mt10">
			<?php wp_list_comments('callback=mydiy_comment'); ?>
		</ol>
	</div>

	<?php paginate_comments_links(); ?>  
	
<?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
			<!-- If comments are open, but there are no comments. -->

	<?php else : // comments are closed ?>
			<!-- comments are closed -->

	<?php endif; ?>
	
<?php endif; ?>

<?php if ( comments_open() ) : ?>

	<div id="respond" class="respond">

		<div class="arcTitle"> 留个言吧 ๑•́ ₃ •̀๑ </div>

		<div class="p10 bgp">
			<div class="text-right cancel-comment-reply">
				<span class=" btn btn-xs btn-primary"><?php cancel_comment_reply_link(); ?></span>
			</div>
			
			<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
				<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
			<?php else : ?>
			
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			<div>
				<?php if ( is_user_logged_in() ) : ?>
					
					<p class="logged BoxTitle">Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php" class="label label-primary"><?php echo $user_identity; ?></a> <a href="<?php echo wp_logout_url( get_permalink() ); ?>" class="label label-primary" title="Log out of this account">Log out &raquo;</a></p>
				
				<?php else : ?>
					<div class="row">
						<div class="col-md-4">
							<input type="text" class="form-control mt10" placeholder="昵称" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "required"; ?> />
						</div>
						<div class="col-md-4">
							<input type="email" class="form-control mt10" placeholder="Email" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "required"; ?> />
						</div>
						<div class="col-md-4">
							<input type="url" class="form-control mt10" placeholder="网站" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
						</div>
					</div>
				
					<div class="sns_login_comment mt10">
						<p>
							您可以填写以上信息后留言，或者使用右侧方式登录后进行留言-&gt;
							<a href="http://digcss.com/digcss/wp-content/plugins/wp-connect/login.php?go=qzone" title="用QQ登录" class="sns_btn iconsns-icon_qq"></a>
							<a href="http://digcss.com/digcss/wp-content/plugins/wp-connect/login.php?go=sina" title="用新浪微博登录" class="sns_btn iconsns-icon_weibo"></a>
						</p>
					</div>
				<?php endif; ?> 

					<div class="form-group">
						<div class="smililes"><?php cs_print_smilies(); ?></div>
						<div class="mt10">
							<textarea name="comment" class="form-control" id="comment" cols="30" rows="10"></textarea>
						</div>
					</div>

					<div class="mt10">
						
						可以用以下格式插入代码(将两个<code>```</code>中间的代码替换掉即可)：</p>

<pre>
<code class="language-markup">```
&lt;script&gt;
  function helloDigCSS() { }
&lt;/script&gt;
```</code>
</pre>

					</div>

					
					<div class="text-right mt10">
						<input name="submit" type="submit" id="submit" tabindex="5" class="btn btn-sm btn-primary" value="提交评论" />
						<?php comment_id_fields(); ?>
					</div>

				</div>
				<?php do_action('comment_form', $post->ID); ?>
			</form>
			<?php endif; // If registration required and not logged in ?>
	</div>



</div>
<?php endif; ?>