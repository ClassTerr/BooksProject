<div class="container">
    <h2>Here you can get books you need</h2>
    <!-- add book form -->
    <div class="box">
        <h3>Add a book</h3>
        <form action="<?php echo URL; ?>books/addbook" method="POST">
            <label>Artist</label>
            <input type="text" name="artist" value="" required />
            <label>Track</label>
            <input type="text" name="track" value="" required />
            <label>Link</label>
            <input type="text" name="link" value="" />
            <input type="submit" name="submit_add_book" value="Submit" />
        </form>
    </div>
    <!-- main content output -->
    <div class="box">
        <h3>Amount of books (data from second model)</h3>
        <div>
            <?php echo $amount_of_books; ?>
        </div>
        <h3>Amount of books (via AJAX)</h3>
        <div>
            <button id="javascript-ajax-button">Click here to get the amount of books via Ajax (will be displayed in #javascript-ajax-result-box)</button>
            <div id="javascript-ajax-result-box"></div>
        </div>
        <h3>List of books (data from first model)</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Artist</td>
                <td>Track</td>
                <td>Link</td>
                <td>DELETE</td>
                <td>EDIT</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($books as $book) { ?>
                <tr>
                    <td><?php if (isset($book->id)) echo htmlspecialchars($book->id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($book->artist)) echo htmlspecialchars($book->artist, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($book->track)) echo htmlspecialchars($book->track, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td>
                        <?php if (isset($book->link)) { ?>
                            <a href="<?php echo htmlspecialchars($book->link, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($book->link, ENT_QUOTES, 'UTF-8'); ?></a>
                        <?php } ?>
                    </td>
                    <td><a href="<?php echo URL . 'books/deletebook/' . htmlspecialchars($book->id, ENT_QUOTES, 'UTF-8'); ?>">delete</a></td>
                    <td><a href="<?php echo URL . 'books/editbook/' . htmlspecialchars($book->id, ENT_QUOTES, 'UTF-8'); ?>">edit</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
