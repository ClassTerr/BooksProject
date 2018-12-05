<?php

class books extends Controller
{
    public function index()
    {
        if (!Helper::userIsAuthorized())
        {
            header('location: ' . URL);
            exit();
        }
        
        // getting all books and amount of books
        $books = $this->books_model->getAllbooks();
        $amount_of_books = $this->books_model->getAmountOfbooks();

       // load views. within the views we can echo out $books and $amount_of_books easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/books/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function manage()
    {
        if (!Helper::userIsAdmin())
        {
            http_response_code(403);
            die('Forbidden');
        }
        
        // getting all books and amount of books
        $books = $this->books_model->getAllbooks();

        require APP . 'view/_templates/header.php';
        require APP . 'view/books/manage.php';
        require APP . 'view/_templates/footer.php';
    }

    public function addbook()
    {
        if (!Helper::userIsAdmin())
        {
            http_response_code(403);
            die('Forbidden');
        }
        
        // if we have POST data to create a new book entry
        if (isset($_POST["submit_add_book"])) {
            // do addbook() in model/Book.php
            $this->books_model->addbook($_POST["author"], $_POST["name"],  $_POST["link"],  $_POST["year"]);
        }

        // where to go after book has been added
        header('location: ' . URL . 'books/manage');
    }

    public function deletebook($book_id)
    {
        if (!Helper::userIsAdmin())
        {
            http_response_code(403);
            die('Forbidden');
        }
        
        // if we have an id of a book that should be deleted
        if (isset($book_id)) {
            // do deletebook() in model/Book.php
            $this->books_model->deletebook($book_id);
        }

        // where to go after book has been deleted
        header('location: ' . URL . 'books/manage');
    }

    public function editbook($book_id)
    {
        if (!Helper::userIsAdmin())
        {
            http_response_code(403);
            die('Forbidden');
        }

        // if we have an id of a book that should be edited
        if (isset($book_id)) {
            // do getbook() in model/Book.php
            $book = $this->books_model->getbook($book_id);

            // in a real application we would also check if this db entry exists and therefore show the result or
            // redirect the user to an error page or similar

            // load views. within the views we can echo out $book easily
            require APP . 'view/_templates/header.php';
            require APP . 'view/books/edit.php';
            require APP . 'view/_templates/footer.php';
        } else {
            header('location: ' . URL . 'books/manage');
        }
    }
    
    public function updatebook()
    {
        if (!Helper::userIsAdmin())
        {
            http_response_code(403);
            die('Forbidden');
        }

        // if we have POST data to create a new book entry
        if (isset($_POST["submit_update_book"])) {
            // do updatebook() from model/Book.php
            $this->books_model->updatebook($_POST["author"], $_POST["name"], $_POST['year'],  $_POST["link"], $_POST['book_id']);
        }

        // where to go after book has been added
        header('location: ' . URL . 'books/manage');
    }

    public function ajaxGetStats()
    {
        if (!Helper::userIsAdmin())
        {
            http_response_code(403);
            die('Forbidden');
        }
        
        $amount_of_books = $this->books_model->getAmountOfbooks();

        // simply echo out something. A supersimple API would be possible by echoing JSON here
        echo $amount_of_books;
    }

    public function details()
    {
        if (!Helper::userIsAuthorized())
        {
            header('location: ' . URL);
            exit();
        }
        
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/books/details.php';
        require APP . 'view/_templates/footer.php';
    }
}
