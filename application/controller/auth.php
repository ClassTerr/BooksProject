<?php

require APP . "model/user.php";
use model\User;
/**
 * Class books
 * This is a demo class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Auth extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/books/index
     */
    public function index()
    {
        // getting all books and amount of books
        $books = $this->model->getAllbooks();
        $amount_of_books = $this->model->getAmountOfbooks();

       // load views. within the views we can echo out $books and $amount_of_books easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/books/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (User::login($_POST["login"], $_POST["password"])){   
                header('location: ' . URL . 'books');
            }
            else {
                $error = "Unable to login with given credentials";
                require APP . 'view/_templates/header.php';
                require APP . 'view/auth/login.php';
            }
        }
        else {
            require APP . 'view/_templates/header.php';
            require APP . 'view/auth/login.php';
        }

        require APP . 'view/_templates/footer.php';
    }
    
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $errors = [];

            $email = Helper::safeInput($_POST['email']);
            $username = Helper::safeInput($_POST['username']);
            $name= Helper::safeInput($_POST['name']);
            $password = Helper::safeInput($_POST['password']);
            $birth = Helper::safeInput($_POST['birth']);

            //creating new user
            $user = new User($email, $username, $name, $password, $birth);
            $result = $user->save();
            if($result === true) {
                header("location:" . URL . 'books');
            } else {
                $errors = $result;
                require APP . 'view/_templates/header.php';
                require APP . 'view/auth/register.php';
            }
        }
        else {
            require APP . 'view/_templates/header.php';
            require APP . 'view/auth/register.php';
        }

        require APP . 'view/_templates/footer.php';
    }

    public function logout()
    {
        unset($_SESSION["user"]);

        //redirect user to the home page
        header("Location:" . URL);
        return true;
    }

    
    public function editbook($book_id)
    {
        // if we have an id of a book that should be edited
        if (isset($book_id)) {
            // do getbook() in model/model.php
            $book = $this->model->getbook($book_id);

            // in a real application we would also check if this db entry exists and therefore show the result or
            // redirect the user to an error page or similar

            // load views. within the views we can echo out $book easily
            require APP . 'view/_templates/header.php';
            require APP . 'view/books/edit.php';
            require APP . 'view/_templates/footer.php';
        } else {
            // redirect user to books index page (as we don't have a book_id)
            header('location: ' . URL . 'books/index');
        }
    }
    

    /**
     * AJAX-ACTION: ajaxGetStats
     * TODO documentation
     */
    public function ajaxGetStats()
    {
        $amount_of_books = $this->model->getAmountOfbooks();

        // simply echo out something. A supersimple API would be possible by echoing JSON here
        echo $amount_of_books;
    }

}
