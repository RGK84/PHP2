<?php 
declare(strict_types=1);

ini_set('error_reporting', (string)E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

function dbConnect($host = "localhost", $login = "root", $pass = "root", $dbName = "gallery") {
    $db = mysqli_connect($host, $login, $pass, $dbName);
    if (!$db) {
        die("Не удалось соединиться:" . mysqli_error($db));
    }
    return $db;
}

function makeImgArray($dbSelect) {
    foreach ($dbSelect as $row) {
        $imgArr[] = $row;
    };
    return $imgArr;
}

function makeImgString($dbSelect, $locationName) {
    $imgArr = mysqli_fetch_assoc($dbSelect);
    if (empty($imgArr)){
        header("Location: $locationName");
        exit();
    }
    return $imgArr;
}