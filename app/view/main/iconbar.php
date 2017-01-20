<div class="top-bar">
	<div class="cart"><a class="login" rel="external" href="app/controller/navigation.php?page=cart"><img alt="Cart" src="images/cart.png"></a>
	</div>
	<div class="user">
		<img alt="User" src="images/user.png">
		<span class="tooltiptext"> 
		<?php
		if(isset($_SESSION["username"])){
			echo $_SESSION["username"];
		?>
			<a class="login" rel="external" href="app/controller/navigation.php?page=orders"> Orders</a>
			<a class="login" rel="external" href="app/controller/logout-user.php"> Logout</a></span>
		<?php
		}
		else{
		?>
			<a class="login cd-signin" rel="external" href="#">Login</a></span>
		<?php
		}
		?>
	</div>
</div>