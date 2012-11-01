<?php
/**
 *
 * @package WordPress
 * @subpackage theZcoder
 * @since theZcoder 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon">
		<?php if($post->ID == 117) :?>
			<div id="resume">
				<a href="<?php echo get_template_directory_uri() ?>/files/resume.pdf">
					<img src="<?php echo get_template_directory_uri() ?>/images/file.png">Resume
				</a>
			</div>	
		<?php endif; ?>
		<p>Copyright Matthew Zagone</p>
		<div id="social-links">
			<a href="http://www.facebook.com/theZcoder"><img src="<?php echo get_template_directory_uri() ?>/images/facebook.png" alt="Facebook" title="Facebook"></a>
			<a href="https://twitter.com/mattyz01"><img src="<?php echo get_template_directory_uri() ?>/images/twitter.png"></a>
			<a href="http://www.linkedin.com/pub/matthew-zagone/38/aa4/222"><img src="<?php echo get_template_directory_uri() ?>/images/linkedin.png"></a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php get_template_part('content', 'contact'); ?>
<?php wp_footer(); ?>

</body>
</html>