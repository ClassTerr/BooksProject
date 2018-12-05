<div class='container'>
	<?php
		if (isset($_GET['id'])) :
			$book = $this->books_model->getbook($_GET['id']); 
		endif;
		?>
	<div class='d-flex justify-content-center'>
		<?php include "download.php"; ?>
	</div>
	<div class="text-center">
		<?php
		if (isset($_GET['id']) && $book != null) : ?>
		<h3 class="book-item_title">
			<?= $book->name ?>
		</h3>
		<p class="author">
			<?= $book->author ?> &bull;
			<?= $book->year ?>
		</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tellus nisi, eget pulvinar in, molestie et arcu.</p>
		<h2>Want to download? Just opent the book!</h2>
		<?php endif; ?>
	</div>
</div>