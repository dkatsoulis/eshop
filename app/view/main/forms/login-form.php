<div id="cd-login">
	<!-- log in form -->
	<form class="cd-form" action="app/controller/get-login-data.php" method="post">
		<p class="fieldset">
			<label class="image-replace cd-email" for="signin-email">E-mail</label>
			<input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail" name="email">
			<span class="cd-error-message">Error message here!</span>
		</p>

		<p class="fieldset">
			<label class="image-replace cd-password" for="signin-password">Password</label>
			<input class="full-width has-padding has-border" id="signin-password" type="password"  placeholder="Password" name="password">
			<a href="#0" class="hide-password">Show</a>
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
	<!-- <a href="#0" class="cd-close-form">Close</a> -->
</div>
<!-- cd-login -->