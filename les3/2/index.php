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
    $select = mysqli_query($db, "SELECT id, title, author, publisher, category, pages FROM books;");
    $books = makeBooksArray($select);
    mysqli_close($db);

    echo $twig->render('index.html.twig', ['books' => $books]);

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}