<!doctype html>
<head>
  <meta charset="utf-8">
  <title>Our First HTML5 Page</title>
  <meta name="description" content="Welcome to my basic template.">
  <link rel="stylesheet" href="css/style.css?v=1">
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="css/reset.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/index.js"></script>
</head>
 
<body>
    <div id="wrapper">
      <header>
      	<div class="top-bar">
      		<div class="cart"><img alt="Cart" src="images/cart.png"></div>
      		<div class="user">
      			<img alt="User" src="images/user.png">
      			<span class="tooltiptext"><a class="login cd-signin" rel="external" href="#">Login</a></span>
      		</div>
      	</div>
      	<div class="logo"><img class="logo-image" alt="Logo" src="images/logo.png"></div>
	    <nav class="main-nav">
		    <ul>
			    <li><a rel="external" href="#">HOME</a></li>
			    <li><a rel="external" href="#">ABOUT US</a></li>
			    <li><a rel="external" href="#">CONTACT</a></li>
		    </ul>
	    </nav>
	    <div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
			<ul class="cd-switcher">
				<li><a href="#0">Sign in</a></li>
				<li><a href="#0">New account</a></li>
			</ul>

			<div id="cd-login"> <!-- log in form -->
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="signin-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">Remember me</label>
					</p>

					<p class="fieldset">
						<input class="full-width" type="submit" value="Login">
					</p>
				</form>
				
				<p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->

			<div id="cd-signup"> <!-- sign up form -->
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Username</label>
						<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Password</label>
						<input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="accept-terms">
						<label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Create account">
					</p>
				</form>

				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-signup -->

			<div id="cd-reset-password"> <!-- reset password form -->
				<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Reset password">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div> <!-- cd-reset-password -->
			<a href="#0" class="cd-close-form">Close</a>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->
        <div class="offers">
           	<div class="offer">
           		<div tooltip="info info info info info info info infoinfo info info infoinfo info info infoinfo info info infoinfo info info info">
        			<img class="offer-image" alt="Offer" src="images/shoe.jpg">
        		</div>
        		<div class="price">100€</div>
        	</div>
        	<div class="offer">
        		<img class="offer-image" alt="Offer" src="images/shoe.jpg">
        		<div class="price">100€</div>
        	</div>
        	<div class="offer">
        		<img class="offer-image" alt="Offer" src="images/shoe.jpg">
        		<div class="price">100€</div>
        	</div>
        	<div class="offer">
        		<img class="offer-image" alt="Offer" src="images/shoe.jpg">
        		<div class="price">100€</div>
        	</div>
        	<div class="offer">
        		<img class="offer-image" alt="Offer" src="images/shoe.jpg">
        		<div class="price">100€</div>
        	</div>
        	<div class="offer">
        		<img class="offer-image" alt="Offer" src="images/shoe.jpg">
        		<div class="price">100€</div>
        	</div>
        	<div class="offer">
        		<img class="offer-image" alt="Offer" src="images/shoe.jpg">
        		<div class="price">100€</div>
        	</div>
        	<div class="offer">
        		<img class="offer-image" alt="Offer" src="images/shoe.jpg">
        		<div class="price">100€</div>
        	</div>
        </div>    
        </header>
        <footer>
        	<div class="footer"></div>    	
        </footer>
    </div>
</body>
</html>