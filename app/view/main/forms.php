<div class="cd-user-modal">
	<!-- this is the entire modal form, including the background -->
	<div class="cd-user-modal-container">
		<!-- this is the container wrapper -->
		<ul class="cd-switcher">
			<li>
				<a href="#0">Sign in</a>
			</li>
			<li>
				<a href="#0">New account</a>
			</li>
		</ul>

		<?php
			include ("app/view/main/forms/login-form.php");
		?>
		<?php
			include ("app/view/main/forms/signup-form.php");
		?>

		<a href="#0" class="cd-close-form">Close</a>
	</div>
	<!-- cd-user-modal-container -->
</div>
<!-- cd-user-modal -->