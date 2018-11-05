<html>
    <head>
        <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet"/>
        <script src="js/bootstrap/bootstrap.min.js"></script>
    </head>
    <body>
        <div>Hello, see our books:</div>
        <?php
            include_once '../resources/config.php';
            include_class('paginator');

            $conn = new mysqli('127.0.0.1', 'root', '', 'Books');
            $conn->set_charset('utf8');
            $limit = (isset($_GET['limit'])) ? $_GET['limit'] : 1;
            $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
            $links = (isset($_GET['links'])) ? $_GET['links'] : 7;
            $query = "SELECT name, author, price FROM books";

            $Paginator = new Paginator($conn, $query);
            $results = $Paginator->getData($page, $limit);
            //echo json_encode($results);
        ?>

        <br />

        <?php for ($i = 0; $i < count($results->data); $i++) : ?>
            <div>Name: <?php echo $results->data[$i]['name']; ?></div>
            <div>Author: <?php echo $results->data[$i]['author']; ?></div>
            <div>Price: <?php echo $results->data[$i]['price']; ?></div>
            <br />
        <?php endfor; print $Paginator->createLinks(3, 'pagination');
        ?>
    </body>
</html>
