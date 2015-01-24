<nav>
	<?
	if ($_SERVER['REQUEST_URI'] !== '/xsi/index.php' && $_SERVER['REQUEST_URI'] !== '/xsi/'){
		echo '<a href="/xsi/" class="left"><i class="fa fa-angle-left"></i> Back</a>';
	}
	?>		
    <a href="login.php" class="fancybox fancybox.iframe">Login</a>
    <a href="#">Contact</a>
</nav>