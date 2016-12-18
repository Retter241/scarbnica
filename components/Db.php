<?php

const MYSQL_HOST = 'localhost'; //127.0.0.1
const MYSQL_USER = 'root';
const MYSQL_PASS = '';
const MYSQL_DB = 'Scarbnica';
const MYSQL_ENCD = 'utf8'; //encoding
const MYSQL_PORT = 3306;
const DB_DRIVER = 'mysql';
class Db
{
    /**
     * @return PDO
     * Возвращает объект PDO
     */
    public static function getConnection()
    {
        $dbParamsPath = ROOT . '/config/db_config.php';
        $dbParams = include($dbParamsPath);
//        $dsn = 'mysql:host=' . $dbParams['host'] . ', ' . 'dbname=' . $dbParams['dbname'];

        try{
            $db = new PDO(
                DB_DRIVER . ":dbname=" . MYSQL_DB . ";host=" . MYSQL_HOST,
                MYSQL_USER,
                MYSQL_PASS
            );
        }catch (PDOException $e){
            echo 'Подключение не удалось: ' . $e->getMessage();
        }
        return $db;
    }
}