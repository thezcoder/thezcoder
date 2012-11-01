<?php
/**
 * @package WordPress
 * @subpackage theZcoder
 * @since theZcoder 1.0
 */
?>

<?php get_header(); ?>

<nav id="site-menu">
	<a href="index.php?cat=12"><img src="<?php echo get_template_directory_uri() ?>/images/html5.png" alt="HTML5" title="HTML5"></a>
	<a href="index.php?cat=7"><img src="<?php echo get_template_directory_uri() ?>/images/css3.png" alt="CSS3" title="CSS3"></a>
	<a href="index.php?cat=5"><img src="<?php echo get_template_directory_uri() ?>/images/js.png" alt="Javascript" title="Javascript"></a>
	<a href="index.php?cat=6"><img src="<?php echo get_template_directory_uri() ?>/images/java.png" alt="Java" title="Java"></a>
	<a href="index.php?cat=4"><img src="<?php echo get_template_directory_uri() ?>/images/php.png" alt="PHP" title="PHP"></a>
	<a href="index.php?cat=8"><img src="<?php echo get_template_directory_uri() ?>/images/linux.png" alt="Linux" title="Linux"></a>
</nav>
<h1 id="category-title">HTML5</h1>
<div id="homepage-content">
	<?php for($i = 0; $i < 6; $i++) : ?>
	<?php $my_query = new WP_Query('category_name=' . cycle_category($i) . '&posts_per_page=1'); ?>
	<div class="home-page-posts"> 
		<?php $has_post = FALSE; ?>
	<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
		<?php get_template_part('content', 'summary'); ?>
		<?php $has_post = TRUE; ?>
	<?php endwhile; ?>
		<?php if(!$has_post) : ?>
		<?php get_template_part('content', 'nopostscategory') ?>
		<?php endif ?>
	</div>
	<?php endfor; ?>
</div>


<?php get_footer(); ?>
