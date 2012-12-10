<!-- template för kontakta_oss -->
<?php
 $type = 'Contact';
?>

<div id="content">
	<h2><?php print($title); ?></h2>
		
	  <form action="" method="post">
	  	<label for="fullname"> Name:</label> <input type="text" name="fullname" id="fullname"><br>
	  	<label for="emailadress"> Email:</label> <input type="email" name="emailadress" id="emailadress"><br>
	  	<label for="message">Message:</label><br><textarea name="message" id="message"></textarea><br>
	  	<input type="submit" value="Send Email" class="submit">
	  </form>
	  
	  <ul>
			<li>Tel: +46-44-12 34 56</li>
			<li>Email: <a href="mailto:contact@acme.se">contact@acme.se</a></li>
			<li>Address:<br>Gatan 5<br>12345 Malmö</li>
	  </ul>
</div><!-- end content -->