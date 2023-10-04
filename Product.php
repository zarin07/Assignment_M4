<?php

class Product{
    public $product_id;
    public $product_name;
    public $product_price;

    public function __construct($id,$name,$price){
            $this->product_id=$id;
            $this->product_name=$name;
            $this->product_price=$price;
    }

    public function getFormattedPrice()
    {
        return "$". number_format($this->product_price,2);
    }

    public function showDetails()
    {
        echo "Product Details: <br/>";
        echo "-ID: {$this->product_id} <br/>";
        echo "-Name: {$this->product_name} <br/>";
        echo "-Price: {$this->getFormattedPrice()}";
    }
}

$product = new Product(1,"T-Shirt",19.99);
$product->showDetails();