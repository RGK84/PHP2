<?php
include_once('functions.php');
require_once 'vendor/autoload.php';

try {
    $loader = new Twig\Loader\FilesystemLoader('templates');
    $twig = new \Twig\Environment($loader, [
        'cache' => 'cache',
        'debug' => true,
    ]);

    $db = dbConnect();
    $imgID = isset($_GET['id']) ? (int)$_GET['id'] : 0;
    $select = mysqli_query($db, "SELECT link, description FROM images WHERE id = '$imgID'");
    $img = makeImgString($select, 'index.php');
    mysqli_close($db);

    echo $twig->render('img.html.twig', ['img' => $img]);

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}