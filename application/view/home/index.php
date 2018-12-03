<div class="container">
	<div class="row">
		<div class="col-md-6 book-image" style='background-image: url(<?=URL . "img/landing-book-2.png"?>);'></div>
		<div class="col-md-6 col-md-offset-6">
			<h2>Welcome to Books project. Here you can get the best books in the world for free</h2>
			<?php if (!Helper::userIsAuthorized()) : ?>
			<h2>To get books you need please
				<a href="auth/login">Sign In</a> or
				<a href="auth/register">Sign Up</a>
			</h2>
			<?php else : ?>
			<h2>
				Hi,
				<span class="text-success">
					<?=$_SESSION['user'] ?>
				</span> Have fun with
				<a href="books">access to our free books</a>
			</h2>
			<?php endif; ?>
		</div>
	</div>
</div>