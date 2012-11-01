<?php
/**
 * @package WordPress
 * @subpackage theZcoder
 * @since theZcoder 1.0
 */
?>

<div id="contact-me" title="Contact Me">
	<form id="contact-form" action="<?php echo get_template_directory_uri() ?>/mail.php" action="POST">
		<div id="contact-name">
			<label for="name">Name:</label>
			<input id="name" name="name" class="ui-widget ui-widget-content">
		</div>
		<div id="contact-email">
			<label>Email:</label>
			<input id="email" name="email" class="ui-widget ui-widget-content">
		</div>
		<div id="contact-subject">
			<label>Subject:</label>
			<input id="subject" name="subject" class="ui-widget ui-widget-content">
		</div>
		<div id="contact-message">
			<label>Message:</label>
			<textarea id="message" name="message" class="ui-widget ui-widget-content"></textarea>
		</div>
		<div id="contact-direct">You can contact me directly at
			<a href="mailto:mattzagone@gmail.com">mattzagone@gmail.com</a>
		</div>
		<button id="contact-clear" type="reset">Clear</button>
		<button id="contact-submit" type="submit">Submit</button>
	</form>
</div>

