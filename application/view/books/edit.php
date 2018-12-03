<div class="container">
    <!-- add book form -->
    <div>
        <h3>Edit a book</h3>
        <form action="<?php echo URL; ?>books/updatebook" method="POST">
            <label>Artist</label>
            <input autofocus type="text" name="artist" value="<?php echo htmlspecialchars($book->artist, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Track</label>
            <input type="text" name="track" value="<?php echo htmlspecialchars($book->track, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Link</label>
            <input type="text" name="link" value="<?php echo htmlspecialchars($book->link, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="hidden" name="book_id" value="<?php echo htmlspecialchars($book->id, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="submit" name="submit_update_book" value="Update" />
        </form>
    </div>
</div>

