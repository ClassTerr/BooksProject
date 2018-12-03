<?php

namespace libs;

use PDO;

/**
 * Class PDOConnection
 * @package libs
 */
class PDOConnection
{
    /**
     * Getting PDO connection
     * @return PDO connection with DB
     */
    public static function getConnection()
    {
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
        $db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, $options);

        return $db;
    }

}