<?php
declare(strict_types=1);

ini_set('error_reporting', (string)E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

// Задание 1. Создать структуру классов ведения товарной номенклатуры.
// а) Есть абстрактный товар.
// б) Есть цифровой товар, штучный физический товар и товар на вес.
// в) У каждого есть метод подсчета финальной стоимости.
// г) У цифрового товара стоимость постоянная – дешевле штучного товара в два раза. У штучного товара обычная стоимость, у весового – в зависимости от продаваемого количества в килограммах. У всех формируется в конечном итоге доход с продаж.
// д) Что можно вынести в абстрактный класс, наследование?

abstract class Product 
{
    protected $price;

    public function __construct($price) {
        $this->price = $price;
    }
    
    abstract public function calcTotalPrice(float $qty): float;
}

class DigitalProduct extends Product
{
    public function calcTotalPrice(float $qty): float {
        return $this->price / 2 * $qty;
    }
}

class SimpleProduct extends Product
{
    public function calcTotalPrice(float $qty): float {
        return $this->price * $qty;
    }
}

class WeightProduct extends Product
{
    public function calcTotalPrice(float $weight): float {
        return $this->price * $weight;
    }
}

$productPrice = rand (0, 1000);

$digitalProduct = new DigitalProduct($productPrice);
$simpleProduct = new SimpleProduct($productPrice);
$weightProduct = new WeightProduct($productPrice);

echo "Базовая цена товарной единицы: {$productPrice} <br><br>";
echo "Цена цифрового товара: {$digitalProduct->calcTotalPrice(5)} <br>";
echo "Цена штучного товара: {$simpleProduct->calcTotalPrice(5)} <br>";
echo "Цена весового товара: {$weightProduct->calcTotalPrice(2)} <br>";

// Задание 2. *Реализовать паттерн Singleton при помощи traits.

trait TSingleton
{
    private static $instance;

    // защищаем trait от перезаписи и дублирования
    protected function __construct();
    protected function __clone();
    protected function __wakeup();

    // даем доступ к единственному экземпляру $instance
    public static function getInstance() {
        if (empty(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}

class App 
{
    use TSingleton;

    private $db;

    public function __construct() {
        $this->db = getInstance();
    }
}