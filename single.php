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
	<?php	the_title('<h2>', '</h2>'); ?>
	<div class="single-post-info">
		<div>Posted on: <span><?php the_date('M-d-Y')?></span></div>
		<div>By: <span><?php the_author(); ?></span></div>
	</div>
	<hr>
	<?php the_content(); ?>
		<?php comments_template(); ?>
	<?php endwhile; else: ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>