<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link href="style.css" rel="stylesheet">
		<title> </title>
	</head>

	<body id="contact">
		<div id="wrapper">
		
			<div id="header">
				<h1>Acme</h1>
			</div>
			
			<div id="navbar">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="index.php?page=about">About</a></li>
					<li><a href="index.php?page=products">Products</a></li>
					<li><a href="index.php?page=contact">Contact</a></li>
				</ul>
			</div><!-- end navbar -->
			
			<div id="content">
				<h2>Contact us</h2>
					
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
			
			<div id="footer">
				<p>&copy; Mitsa & Kenth</p>
			</div><!-- end footer -->
		
		</div> <!--end wrapper -->
	</body>
</html>