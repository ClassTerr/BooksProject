<?php

class Helper
{
    static public function debugPDO($raw_sql, $parameters) {

        $keys = array();
        $values = $parameters;

        foreach ($parameters as $key => $value) {

            // check if named parameters (':param') or anonymous parameters ('?') are used
            if (is_string($key)) {
                $keys[] = '/' . $key . '/';
            } else {
                $keys[] = '/[?]/';
            }

            // bring parameter into human-readable format
            if (is_string($value)) {
                $values[$key] = "'" . $value . "'";
            } elseif (is_array($value)) {
                $values[$key] = implode(',', $value);
            } elseif (is_null($value)) {
                $values[$key] = 'NULL';
            }
        }

        /*
        echo "<br> [DEBUG] Keys:<pre>";
        print_r($keys);
        
        echo "\n[DEBUG] Values: ";
        print_r($values);
        echo "</pre>";
        */
        
        $raw_sql = preg_replace($keys, $values, $raw_sql, 1, $count);

        return $raw_sql;
    }

    
    /**
     * Sanitizing external inputs
     * @param null $data data to sanitize
     * @return null|string sanitized data
     */
    public static function safeInput($data = null) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    public static function userIsAuthorized() {
        if (!isset($_SESSION))
        {
            session_start();
        }
        return isset($_SESSION['user']);
    }
    
    public static function userIsAdmin() {
        if (!isset($_SESSION))
        {
            session_start();
        }
        return isset($_SESSION['user']) 
            && isset($_SESSION['is_admin'])
            && $_SESSION['is_admin'] == 1;
    }
}