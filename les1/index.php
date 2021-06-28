<?php

class Item {
    public $id;
    public $name;
    public $price;
    public $img;

    public function __construct($id, $name, $price, $img) 
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;
    }

    public function render() 
    {
        $content = '';
        $content .= "<h1>{$this->name}</h1>";
        $content .= "<img src={$this->img}></img>";
        $content .= "<p>Цена: {$this->price} р.</p>";
        return $content;
    }
}

class Good extends Item {
    public $quantity;
    public $description;

    public function __construct($id, $name, $price, $img, $quantity, $description) 
    {
        parent::__construct($id, $name, $price, $img);
        $this->quantity = $quantity;
        $this->description = $description;
    }

    public function render() 
    {
        $content = '';
        $content .= "<h1>{$this->name}</h1>";
        $content .= "<img src={$this->img}></img>";
        $content .= "<p>Описание: {$this->description}</p>";
        $content .= "<p>Цена: {$this->price} р.</p>";
        $content .= "<p>Количество: {$this->quantity} шт.</p>";
        return $content;
    }

    public function addToCart ()
    {
        // запрос к БД на добавление конкретного товара в корзину пользователя
    }
}

class CartItem extends Item {
    public $quantity;

    public function __construct($id, $name, $price, $img, $quantity) 
    {
        parent::__construct($id, $name, $price, $img);
        $this->quantity = $quantity;
    }

    public function render() 
    {
        $content = parent::render();
        $content .= "<p>Количество: {$this->quantity} шт.</p>";
        return $content;
    }

    public function increaseQuantity() {
        return $this->quantity += 1;
    }

    public function decreaseQuantity () {
        return $this->quantity -= 1;
        // если количество станет меньше 1, то вызываем метод 
    }

    public function deleteFromCart() {
        // запрос к БД на удаление конкретного товара из корзины пользователя
    }

    public function countPrice() {
        return $this->quantity * $this->price;
    }
}