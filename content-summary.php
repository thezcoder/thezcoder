<?php
/**
 * @package WordPress
 * @subpackage theZcoder
 * @since theZcoder 1.0
 */
?>

	<div class="post-summary">
		<?php get_template_part('content', 'date'); ?>
		<div id="post-info">
			<a href="index.php?p=<?php echo get_the_ID(); ?>">
			<?php the_title('<h3>','</h3>') ?>
			</a>
			<hr>
			By: <span><?php the_author(); ?></span>
		</div>
		<?php the_excerpt(); ?>
	</div>
