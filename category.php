<?php
/**
 * @package WordPress
 * @subpackage theZcoder
 * @since theZcoder 1.0
 */
?>

<?php get_header(); ?>
<?php
	$query = get_queried_object();
	$name = $query->name;
	$category_ID = $query->cat_ID;
?>
<?php wp_nav_menu( array( 'theme_location' => 'header-menu',
	'link_after' => '<div class="arrow-left"></div>' ) ) ?> 
<div id="main-content" class="with-sidebar">
	<header id="category-header">
		<img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo get_category_image($category_ID); ?>">
		<h1>
			<?php echo $name ?>
		</h1>
	</header>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part('content', 'summary'); ?>
	<?php endwhile; else: ?>
		<?php get_template_part('content', 'nopostscategory') ?>
	<?php endif; ?>
</div>
	<?php if(is_dynamic_sidebar() ) :?>
		<div id="sidebar">
			<?php dynamic_sidebar('sidebar-' . get_category_sidebar_id($category_ID) ) ?>
		</div>
	<?php else: get_sidebar()?>
	<?php endif; ?>	
<?php get_footer(); ?>