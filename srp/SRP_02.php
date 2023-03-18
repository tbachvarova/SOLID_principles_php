<?php


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

    /* This violates the srp because the class has multiple responsibilities.
    To apply the srp, we can separate the responsibilities into separate classes.

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
