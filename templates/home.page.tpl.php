<!-- startsidan -->
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link href="style.css" rel="stylesheet">
		<title><?php print($title); ?></title>
	</head>

	<body id="start">
		<div id="wrapper">
		
			<div id="header">
				<h1>Acme</h1>
			</div>
			
			<div id="navbar">
				<ul>
					<li><a href="hem">Home</a></li>
					<li><a href="om_oss">About</a></li>
					<li><a href="produkter">Products</a></li>
					<li><a href="kontakt">Contact</a></li>
				</ul>
			</div><!-- end navbar -->
			
			<div id="content">
				<div id="bigImg"><img src="<?php print($images[3]['src']); ?>" width="800" height="573"></div>

				<div class="box">
					<img src="<?php print($images[0]['src']); ?>" width="200" height="200">
					<p>Folie</p>
				</div>
				<div class="box">
					<img src="<?php print($images[1]['src']); ?>" width="200" height="200">
					<p>Slangbella</p>
				</div>
				<div class="box">
					<img src="<?php print($images[2]['src']); ?>" width="200" height="200">
					<p>Glass</p>
				</div>
			</div><!-- end content -->
			
			<div id="footer">
				<p>&copy; Mitsa & Kenth</p>
			</div><!-- end footer -->
		</div> <!--end wrapper -->
	</body>
</html