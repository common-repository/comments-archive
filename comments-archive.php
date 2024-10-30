<?php
/*
Plugin Name: Comments Archive
Plugin URI: http://www.zeevm.co.il
Description: this plugin creates a comment archive in your site , just add [comments-archive] to any post or page
Version: 0.1
Author URI: ze'ev ma'ayan
Author URI: http://www.zeevm.co.il

/*  TM zeev.co.il */
add_action('init', 'process_post');

function process_post(){ 
Function sheker()  { 
$args = array(
 'status'=>'approve',
);

// The Que3ry
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );

// Comment Loop
if ( $comments ) {
  foreach ( $comments as $comment ) {?>

	 <u>Posted on: <a rel="canonical" href="<?php echo get_permalink($comment->comment_post_ID); ?>">
    <?php echo get_the_title($comment->comment_post_ID); ?></a>, <?php echo($comment->comment_date);?></u><br/>
    <strong><?php echo($comment->comment_author);?></strong>: <?php echo($comment->comment_content);?><br /><br />
  
<?php
  }
} else {
    echo 'No comments found.';
}
} 
Function archive()  { return sheker();}
add_shortcode('comments-archive', 'archive');
}
?>
