<!-- template för produktlista -->
<?php
	// type inte angett i databasen än. skall matchas med angiven typ för produktlistan
 $type = 'productlist';
?>
<div id="content">
	<h2><?php print($title); ?></h2>
	<ul>
		<?php
			// gör en loop här när vi har info om produkterna i databasen
		?>
		<li> <a href="index.php?page=product1">Slangbella </a></li>
		<li> <a href="index.php?page=product2"> Folie</a></li>
		<li> <a href="index.php?page=product3"> Glass</a></li>
	</ul>
</div><!-- end content -->