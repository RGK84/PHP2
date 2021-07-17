<?php

namespace Model;

use Model\DbConnection;

class GettingData 
{
    public function getData ($offset) {
        $limitOffset = (int)$offset;
        $db = DbConnection::getInstance();
        $sql = mysqli_query($db->connect(), "SELECT id, name, price, img_link AS link FROM products ORDER BY id LIMIT {$limitOffset}, 25;");
        mysqli_close($db->connect());
        return $sql;
    }

    public function sendData ($offset) {
        $sql = $this->getData($offset);
        foreach ($sql as $row) {
            $productArr[] = $row;
        };
        return $productArr;
    }
}