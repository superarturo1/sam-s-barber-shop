<?php 
	$title='Contact Us | Sams Barber Shop';
	$description='Contact Us';
	$keywords='haircuts, beard trims, line-ups, hair graphics';
	include_once "includes/header.php";
?>
<main id="contact-us">
	<h1 id="contact-us-title">Contact Us</h1> 
	<div class="main-window">
		<div class="info">Give Your Feedback!</div>
		<form action="mail_handler.php" method="post" name="form" class="form-box"">
			<label for="name">Name</label>
			<input type="text" name="name" class="inp" placeholder="" required>
			<label for="email">Email ID</label>
			<input type="email" name="email" class="inp" placeholder="" required>
			<label for="phone">Phone</label>
			<input type="tel" name="phone" class="inp" placeholder="" required>
			<label for="message">Message</label>
			<textarea name="msg" id="msg-box" placeholder=""></textarea>
			<input type="submit" name="submit" value="Send" class="sub-btn">
		</form>
	</div>
</main>
<?php 
	include_once "includes/footer.php";
?>