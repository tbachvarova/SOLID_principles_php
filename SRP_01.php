<?php
/**
 * Single Responsibility (SRP)
 *
 * „Даден клас трябва да отговаря само едно нещо“
 *
 * Ако е необходимо да ползва функционалност различна от неговата основна цел, то се създава отделен CLASS или интерфейс, като се подават обектите за взаимодействие в конструктора.
 * Например ако ни е необходимо да връщаме данни в определен формат (HTML, JSON и др) е по-добре да реализираме интерфейс
 */

class Product
{
    private $name;
    private $price;
    private $description;

    public function __construct($name, $price, $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    // getters and setters for name, price, and description

    /* This violates the SRP because the class has multiple responsibilities.
    To apply the SRP, we can separate the responsibilities into separate classes.

    public function saveToDatabase() {
        // logic for saving the product to the database
    }

    public function displayProduct() {
        // logic for displaying the product on a web page
    }

    public function deleteFromDatabase() {
        // logic for deleting the product from the database
    }
    */

}

class ProductRepository
{
    public function saveProduct($product)
    {
        // logic for saving the product to the database
    }

    public function deleteProduct($product)
    {
        // logic for deleting the product from the database
    }
}

class ProductRenderer
{
    public function renderProduct($product)
    {
        // logic for displaying the product on a web page
    }
}
