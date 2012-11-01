<?php
	$to = 'mattzagone@gmail.com';
	$name = $_POST['name'];
	$from = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
	
	echo mail($to, $subject, $message, 'From:' . $from);
?>