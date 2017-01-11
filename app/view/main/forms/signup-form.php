<div id="cd-signup">
	<!-- sign up form -->
	<form class="cd-form" action="app/controller/get-signup-data.php" method="post">
		<p class="fieldset">
			<label class="image-replace cd-username" for="signup-username">Username</label>
			<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username" name="username">
			<span class="cd-error-message">Error message here!</span>
		</p>

		<p class="fieldset">
			<label class="image-replace cd-email" for="signup-email">E-mail</label>
			<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail" name="email">
			<span class="cd-error-message">Error message here!</span>
		</p>

		<p class="fieldset">
			<label class="image-replace cd-password" for="signup-password">Password</label>
			<input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password" name="password">
			<a href="#0" class="hide-password">Hide</a>
			<span class="cd-error-message">Error message here!</span>
		</p>

		<p class="fieldset">
			<input class="full-width has-padding" type="submit" value="Create account">
		</p>
	</form>

	<!-- <a href="#0" class="cd-close-form">Close</a> -->
</div>
<!-- cd-signup -->