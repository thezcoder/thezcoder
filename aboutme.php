<?php
/**
 * @package WordPress
 * @subpackage theZcoder
 * @since theZcoder 1.0
 */
?>

<?php get_header(); ?>
<?php wp_nav_menu( array( 'theme_location' => 'header-menu',
	'link_after' => '<div class="arrow-left"></div>' ) ) ?> 
<div id="main-content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_title('<h1 class="no-image-heading">', '</h1>'); ?>
		<?php the_content(); ?>
	<?php endwhile; else: ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>
