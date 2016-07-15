<?php
/*
	Template Name: GuestBook
*/
get_header();
?>
<div class="fix">

    <div class="l col-2-3 guestBookPage">
        <h1 class="postTitle tac">
            留言板 \^_^/
        </h1>
        <?php comments_template(); ?>
    </div>
    <?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>