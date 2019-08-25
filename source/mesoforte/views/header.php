<div class="loggedin">
		<nav class="navtop">
			<div>
        <h1><a href="index.php?controller=pages&action=main"><img src="assets/Logo.png"></a></h1>
        <a href="#">Welcome User, <?=$_SESSION['name']?></a>
        <a href="index.php?controller=cart&action=show"><i class="fas fa-shopping-cart"></i><?=count($_SESSION["arrCart"]);?></a>
				<a href="index.php?controller=pages&action=showfavs"><i class="fas fa-heart"></i>
				<?=count($_SESSION["arrFavs"]);?></a>
				<a href="libs/logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>

			</div>
		</nav>

</div>