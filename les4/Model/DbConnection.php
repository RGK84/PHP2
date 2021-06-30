<?php

namespace Model;

class DbConnection
{
    private static $db;

    protected function __construct() {}
    protected function __clone() {}
    protected function __wakeup() {}

    public static function getInstance() {
        if (empty(self::$db)) {
            self::$db = new self();
        }
        return self::$db;
    }

    public function connect() {
        $connection = mysqli_connect("localhost", "root", "root", "brandshop") or die("Не удалось соединиться:" . mysqli_error($db));
        return $connection;
    }
}

?>