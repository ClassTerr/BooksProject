<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Books project</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- JS -->
	<script src="<?=URL?>js/jquery-3.3.1.min.js"></script>
	<script src="<?=URL?>js/shuffle.min.js"></script>
	<script src="<?=URL?>bootstrap/js/bootstrap.min.js"></script>
	<script src="<?=URL?>js/foundation.min.js"></script>

	<!-- CSS -->
	<link href="<?=URL?>css/style.css" rel="stylesheet">
	<link href="<?=URL?>css/stars.css" rel="stylesheet">
	<link href="<?=URL?>css/book.css" rel="stylesheet">
	<link href="<?=URL?>css/books.css" rel="stylesheet">
	<link href="<?=URL?>css/bookshelf.css" rel="stylesheet">
	<link href="<?=URL?>css/foundation.min.css" rel="stylesheet">
	<link href="<?=URL?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=URL?>css/problem.css" rel="stylesheet">
</head>

<body>
	<?php if (!isset($hideNav) || $hideNav == false): ?>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
		 aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<?php include "bookshelf.php"; ?>
		<a class="nav-item nav-link active books-project" href="#">BOOKS PROJECT
			<span class="sr-only">(current)</span>
		</a>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="order-1 nav-link" href="<?=URL?>">Home</a>
				<?php if (Helper::userIsAuthorized()) : ?>
				<a class="order-2 nav-link navbar-right" href="<?=URL?>books">Books</a>
				<a class="order-5 nav-link navbar-right" href="<?=URL?>auth/logout">Logout</a>
				<?php endif;?>
				<?php if (!Helper::userIsAuthorized()) : ?>
				<a class="order-3 nav-link navbar-right" href="<?=URL?>auth/register">Sign Up</a>
				<a class="order-4 nav-link navbar-right" href="<?=URL?>auth/login">Sign In</a>
				<?php endif;?>
			</div>
		</div>
	</nav>
	<script>
		var loc = window.location.href;
		$(".navbar .navbar-nav > a").each(function() {
			if (loc.endsWith($(this).attr('href'))) {
				$(this).addClass("active");
			}
		});
	</script>
	<?php endif;
