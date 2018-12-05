<?php 
if (!Helper::userIsAuthorized())
{
	header('location: ' . URL);
	exit();
}
?>
<div id="main-container" class="main-container books nav-effect-1">
	<!-- Main Section -->
	<div class="container">

		<div class="page-title category-title">
			<!-- <h1>Book Viewer</h1> -->
		</div>

		<section id="book_list container">

			<div class="toolbar row">
				<div class="filter-options small-12 medium-9 columns">
				</div>

				<div class="small-12 medium-3 columns">
					<select class="sort-options">
						<option value="" disabled selected>Sort by</option>
						<option value="">Featured</option>
						<option value="title">Alphabetical</option>
						<option value="date-created">Published</option>
					</select>
				</div>
			</div>

			<div class="grid-shuffle">
				<ul id="grid" class="row">
					
					<?php 
					$colors = ["#fcc278","#009c8b","#9c9688","#db2e0f","#e3b005","#a9afad","#fe7b21","#aea98c","#705e1e","#939894","#b4aa91","#725d64","#7a4930","#800020","#603060","#9a9c43","#2c63a0","#658539","#b06010"];
					$books = $this->books_model->getAllbooks();
					
					foreach ($books as $book) {
						$id = $book->id;
						$author = $book->author;
						$name = $book->name;
						$year = $book->year;
						$link = $book->link;
						$color = $colors[array_rand($colors)];
						require APP . 'view/_templates/book.php';
					}
					?>

				</ul>
			</div>

		</section>

	</div>
</div>
<!-- /main -->

<div class="main-overlay">
	<div class="overlay-full"></div>
</div>

</div>

<script src="<?=URL?>js/books.js"></script>
<!-- /main-container -->