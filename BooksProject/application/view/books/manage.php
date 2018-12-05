<div class="container">
    <h2>Here you can manage site books</h2>
    <!-- add book form -->
    <div class="box">
        <h3>Add a book</h3>
        <form action="<?php echo URL; ?>books/addbook" method="POST">
            <label>Author</label>
            <input type="text" name="author" value="" required />
            <label>Name</label>
            <input type="text" name="name" value="" required />
            <label>Year</label>
            <input type="number" name="year" value="" required />
            <label>Link</label>
            <input type="text" name="link" value="" />
            <input type="submit" name="submit_add_book" value="Submit" />
        </form>
    </div>
    <!-- main content output -->
    <div class="box">
        <h3>List of books</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Author</td>
                <td>Name</td>
                <td>Year</td>
                <td>Link</td>
                <td>DELETE</td>
                <td>EDIT</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($books as $book) { ?>
                <tr>
                    <td><?php if (isset($book->id)) echo htmlspecialchars($book->id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($book->author)) echo htmlspecialchars($book->author, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($book->name)) echo htmlspecialchars($book->name, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($book->year)) echo htmlspecialchars($book->year, ENT_QUOTES, 'UTF-8'); ?></td>
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
