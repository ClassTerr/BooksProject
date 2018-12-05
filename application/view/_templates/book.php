<li class="book-item small-12 medium-6 columns" data-date-created='<?= $year ?>' data-title='<?= $name ?>'
 data-color='<?= $color ?>'>
	<div class="bk-img">
		<div class="bk-wrapper">
			<div class="bk-book bk-bookdefault">
				<div class="bk-front">
					<div class="bk-cover"></div>
				</div>
				<div class="bk-back"></div>
				<div class="bk-left"></div>
			</div>
		</div>
	</div>
	<div class="item-details">
		<h3 class="book-item_title"><?= $name ?></h3>
		<p class="author"><?= $author ?> &bull; <?= $year ?></p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tellus nisi, eget pulvinar in, molestie et arcu.</p>
		<a href="<?= URL . "books/details?id=" . $id ?>" class="button">Details</a>
	</div>
</li>