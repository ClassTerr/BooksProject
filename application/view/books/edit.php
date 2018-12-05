<div class="container">
    <!-- add book form -->
    <div>
        <h3>Edit a book</h3>
        <form action="<?php echo URL; ?>books/updatebook" method="POST">
            <label>Author</label>
            <input autofocus type="text" name="author" value="<?php echo htmlspecialchars($book->author, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Name</label>
            <input type="text" name="name" value="<?php echo htmlspecialchars($book->name, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Year</label>
            <input type="number" name="year" value="<?php echo htmlspecialchars($book->year, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Link</label>
            <input type="text" name="link" value="<?php echo htmlspecialchars($book->link, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="hidden" name="book_id" value="<?php echo htmlspecialchars($book->id, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="submit" name="submit_update_book" value="Update" />
        </form>
    </div>
</div>

