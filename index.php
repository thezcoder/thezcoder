<?php
/**
 * @package WordPress
 * @subpackage theZcoder
 * @since theZcoder 1.0
 */
?>
<?php
	$query = get_queried_object();
	$category_ID = $query->ID;
?>
<?php get_header(); ?>
<?php wp_nav_menu( array( 'theme_location' => 'header-menu',
	'link_after' => '<div class="arrow-left"></div>' ) ) ?> 
<div id="main-content" class="with-sidebar">
	<h1>Blog</h1>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part('content', 'summary'); ?>
	<?php endwhile; else: ?>
		<?php get_template_part('content', 'nopostsblog') ?>
	<?php endif; ?>
</div>
<?php if(is_dynamic_sidebar() ) :?>
	<div id="sidebar">
		<?php dynamic_sidebar('sidebar-' . get_category_sidebar_id($category_ID) ) ?>
	</div>
<?php else: get_sidebar()?>
<?php endif; ?>	
<?php get_footer(); ?>