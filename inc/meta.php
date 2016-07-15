<div class="postMeta">
	<div class="postDate">
		<b><?php the_time('Y.m.d') ?></b>
	</div>
	<div class="commentsNo">
		<svg viewBox="0 0 100 100">
			<use xlink:href="#icon-bubbles2"></use>
		</svg>
		<?php comments_popup_link('暂无评论', '一条评论', '% 条评论', 'comments-link', ''); ?>
	</div>
	<div class="tags">
		<?php the_category(',');?>
	</div>
</div>