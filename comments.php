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

<div class="commentsWrap mt10" id="comments">
    <h2 class="comTitle pt20 pb20 tac">
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


<div class="commentsWrap mt10">
    <h2 class="comTitle pt20 pb20 tac"> 留个言吧 ๑•́ ₃ •̀๑ </h2>
</div>


<div id="respond" class="respond mb10">

    <div class="tar cancel-comment-reply mb10">
        <?php cancel_comment_reply_link(); ?>
    </div>
    <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
    <p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
    <?php else : ?>

    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" class="commentForm" method="post"
          id="commentform">
        <div>
            <?php if ( is_user_logged_in() ) : ?>

            <p class="logged f14">
                Hi, <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"
                    class=""><?php echo $user_identity; ?></a>,您已登录.
                <a href="<?php echo wp_logout_url( get_permalink() ); ?>" class=""
                    title="Log out of this account">退出 &raquo;</a>
            </p>

            <?php else : ?>

            <div class="f14">
                <p class="pt10 pb10 pl10">
                    您可以使用
                    <a href="http://digcss.com/digcss/wp-content/plugins/wp-connect/login.php?go=qzone"
                            title="用QQ登录" class="sns_btn vm">
                        <svg viewBox="0 0 100 100">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-qq"></use>
                        </svg>
                    </a>
                    或
                    <a href="http://digcss.com/digcss/wp-content/plugins/wp-connect/login.php?go=sina"
                       title="用新浪微博登录" class="sns_btn vm">
                        <svg viewBox="0 0 100 100">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-weibo1"></use>
                        </svg>
                    </a>
                    登录后进行留言,也可以填写以下信息后进行留言:

                </p>
            </div>

            <div class="fix mainWrap inputs">
                <div class="col-1-3 l">
                    <input type="text" class="form-control" placeholder="昵称 (必填)" name="author" id="author"
                           value="<?php echo esc_attr($comment_author); ?>" size="22"
                           tabindex="1" required/>
                </div>
                <div class="col-1-3 l">
                    <input type="email" required class="form-control" placeholder="Email (必填)" name="email"
                           id="email"
                           value="<?php echo esc_attr($comment_author_email); ?>" size="22"
                           tabindex="2"/>
                </div>
                <div class="col-1-3 l">
                    <input type="url" class="form-control" placeholder="网站" name="url" id="url"
                           value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3"/>
                </div>
            </div>

            <?php endif; ?>

            <div class="text_content mt10">
                    <textarea name="comment" placeholder="留言内容 (必填)" required class="form-control" id="comment"
                              cols="30" rows="10"></textarea>
            </div>
            <div class="tar mt10">
                <input name="submit" type="submit" id="submit" tabindex="5" class="btn"
                       value="提交评论"/>
                <?php comment_id_fields(); ?>
            </div>

            <div>
                <p class="pt10 pb10 f14">可以用以下格式插入代码(将两个<code>```</code>中间的代码替换掉即可)：</p>

<pre>
<code class="language-markup">```
&lt;script&gt;
function helloDigCSS() { }
&lt;/script&gt;
```</code>
</pre>

            </div>


        </div>
        <?php do_action('comment_form', $post->ID); ?>
    </form>
    <?php endif; // If registration required and not logged in ?>


</div>
<?php endif; ?>