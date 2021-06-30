<?php 
require_once 'vendor/autoload.php';
require_once 'Model/DbConnection.php';
require_once 'Model/GettingData.php';

use Model\GettingData AS GettingData;

try {
    $loader = new Twig\Loader\FilesystemLoader('templates');
    $twig = new \Twig\Environment($loader, [
        'cache' => 'cache',
        'debug' => true,
    ]);

    $productArray = new GettingData();
    if(isset($_POST['more'])){
        $productArr = $productArray->sendData($_POST['offset']);
    } else {
        $productArr = $productArray->sendData(0);
    }

    if(isset($_GET['data'])) {
        echo $twig->render('data.html.twig', ['productArr' => $productArr]);  
    } else {
        echo $twig->render('index.html.twig', ['productArr' => $productArr]);
    }
    

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage() . ' в файле ' . $e->getFile() . $e->getLine() . '. Код ошибки: ' . $e->getCode());
}
?>