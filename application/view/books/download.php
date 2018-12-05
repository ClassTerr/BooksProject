<figure class='book'>

	<!-- Front -->

	<ul class='hardcover_front'>
		<li>
			<div class="coverDesign yellow">
				<h1>
					<?php 
					if ($book != null) {
						print($book->name);
					}
					else {
						echo "Book not found";
					}
					?>
				</h1>
			</div>
		</li>
		<li></li>
	</ul>

	<!-- Pages -->

	<ul class='page'>
		<li></li>
		<li>
			<?php if ($book != null) :?>
			<a class="btn" target="_blank" href="<?=$book->link?>">Download</a>
			<?php endif; ?>
		</li>
		<li></li>
		<li></li>
		<li></li>
	</ul>

	<!-- Back -->

	<ul class='hardcover_back'>
		<li></li>
		<li></li>
	</ul>
	<ul class='book_spine'>
		<li></li>
		<li></li>
	</ul>
</figure>