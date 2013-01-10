<!-- Om oss sidan -->
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link href="style.css" rel="stylesheet">
		<title> </title>
	</head>

	<body id="about">
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
				<h2><?php print($title); ?></h2>
				<p><?php print($content); ?></p>
			</div><!-- end content -->
			
			<div id="footer">
				<p>&copy; Mitsa & Kenth</p>
			</div><!-- end footer -->
		
		</div> <!--end wrapper -->
	</body>
</html>