<?php
 /**
 * Hooks the WP cpt_post_types filter 
 *
 * @param array $post_types An array of post type names that the templates be used by
 * @return array The array of post type names that the templates be used by
 **/
function my_cpt_post_types( $post_types ) {
    $post_types[] = 'videos';
    $post_types[] = 'snippets';
    return $post_types;
}
add_filter( 'cpt_post_types', 'my_cpt_post_types' );
?>
<?php
	add_theme_support( 'post-thumbnails' ); 
	// Add RSS links to <head> section
	automatic_feed_links();

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
	
	/*Mydiy Comments*/
	if ( ! function_exists( 'mydiy_comment' ) ) :
		function mydiy_comment($comment,$args,$depth){
			$GLOBALS['comment'] = $comment;
			switch ( $comment->comment_type ) :
				case 'pingback' :
				case 'trackback' :
			?>
			<li class="commentItem mb10 rel moduleBox p15">
            
				    <p><?php _e( 'Pingback:', 'twentyeleven' );?> <?php comment_author_link();?><?php edit_comment_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' );?></p>
                
				<?php
					break;
				default :
				?>

			<li class="commentItem moduleBox p15 mb10 <?php comment_class();?> " id="li-comment-<?php comment_ID();?>">
                <div class="rel fix" id="comment-<?php comment_ID();?>">
            
				    <div class="l gravatar mr20">
                        <?php
                            echo get_avatar( $comment, 100 );
                        ?>
                    </div>

                    <div class="cell">

                        <div class="authorMeta">
                            <?php comment_author_link();?>
                            <div class="commentsDate">
                                <?php comment_time( 'Y.m.d' );?>
                            </div>
                        </div>

                        <div class="commentContent">
                            <?php comment_text();?>
                        </div>

                    </div>
                    
                    <div class="btns reply_btn abs">
                        <?php comment_reply_link( array_merge( $args, array('reply_text' =>'回复', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) );?>
                    </div>
			    </div>
                    
		<?php
			break;
		endswitch;
		}
	endif;

	show_admin_bar(false);


?>