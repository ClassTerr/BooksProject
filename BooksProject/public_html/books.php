<?php 
session_start();

if(!$_SESSION['email'])
{
    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
}
?>

<html>

<head>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/site.js"></script>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link href="css/site.css" rel="stylesheet" />
</head>

<body>
	<?php
		require_once("../resources/templates/header.php");
		include_once '../resources/config.php';
		include_class('paginator');

		$conn = new mysqli('127.0.0.1', 'root', '', 'Books');
		$conn->set_charset('utf8');
		$limit = (isset($_GET['limit'])) ? $_GET['limit'] : 10;
		$page = (isset($_GET['page'])) ? $_GET['page'] : 1;
		$links = (isset($_GET['links'])) ? $_GET['links'] : 7;
		$query = "SELECT name, author, price FROM books";

		$Paginator = new Paginator($conn, $query);
		$results = $Paginator->getData($page, $limit);
	?>

	<br />

	<div class="container text-center">
		<div class="row">
			<h1>Hello, see our books</h1>
		</div>
		<?php for ($i = 0; $i < count($results->data); $i++) : ?>
		<div class="row">
			<!-- row class is used for grid system in Bootstrap-->
			<div class="col-md-4 col-md-offset-4">
				<div>Name:
					<?php echo $results->data[$i]['name']; ?>
				</div>
				<div>Author:
					<?php echo $results->data[$i]['author']; ?>
				</div>
				<div>Price:
					<?php echo $results->data[$i]['price']; ?>
				</div>
				<br />
			</div>
		</div>
		<?php endfor; print $Paginator->createLinks(10, 'pagination');?>
	</div>
</body>

</html>