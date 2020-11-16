<?php
define('WP_USE_THEMES', false);
require 'blog/wp-blog-header.php';
?>
<?php
// Get the last 3 posts.
global $post;
$args = array('posts_per_page' => 3);
$myposts = get_posts($args);

foreach ($myposts as $post): setup_postdata($post);?>
	<?php the_date();?><br />
	<?php the_post_thumbnail('medium_large');?><br />
	<a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title_attribute();?>"><?php the_title();?></a>
	<?php the_excerpt();?> <br />
<?php endforeach;?>
